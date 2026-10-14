<?php
/**
 * News & Announcements AJAX Controller & Inline CRUD
 *
 * Provides endpoints for live, on-page creation, editing, and deletion
 * of institutional news bulletins without leaving the page.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Seed initial sample news into database so the user can immediately edit,
 * customize, or delete real school announcements right on the website.
 */
function mat_i_maybe_seed_news() {
	if ( get_option( 'mat_i_news_seeded_v1' ) ) {
		return;
	}

	// Remove default WordPress 'Hello world!' dummy post if present
	$hello_post = get_page_by_path( 'hello-world', OBJECT, 'post' );
	if ( $hello_post ) {
		wp_delete_post( $hello_post->ID, true );
	}

	$defaults = array(
		array(
			'title'    => 'Enrollment for S.Y. 2025–2026 Now Open',
			'content'  => 'The Office of the Registrar announces the official opening of enrollment for incoming Junior and Senior High School learners.',
			'category' => 'Admissions',
			'image'    => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop&auto=format',
			'date'     => '2025-07-15 09:00:00',
		),
		array(
			'title'    => 'Annual Science & Tech Fair 2025 Set',
			'content'  => 'Celebrating innovative student projects, scientific investigatory research, and robotics demonstrations.',
			'category' => 'Academic Fair',
			'image'    => 'https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=600&h=400&fit=crop&auto=format',
			'date'     => '2025-07-10 10:00:00',
		),
		array(
			'title'    => 'MAT-I Learners Bag Awards in Division Meet',
			'content'  => 'Students earn top recognitions in the Division Science Fair and Academic Competitions with innovative community projects.',
			'category' => 'Student Honors',
			'image'    => 'https://images.unsplash.com/photo-1627556704302-624286467c65?w=600&h=400&fit=crop&auto=format',
			'date'     => '2025-07-05 14:00:00',
		),
		array(
			'title'    => 'Faculty Completes Division Action Research',
			'content'  => 'Educators present findings on modern pedagogy and digital instructional tools for blended secondary education.',
			'category' => 'Faculty Research',
			'image'    => 'https://images.unsplash.com/photo-1590012314607-cda9d9b699ae?w=600&h=400&fit=crop&auto=format',
			'date'     => '2025-06-28 11:00:00',
		),
		array(
			'title'    => 'Upgraded ICT & Science Laboratories Open',
			'content'  => 'New computer stations and laboratory apparatus are now available to support advanced STEM and TVL coursework.',
			'category' => 'Facilities',
			'image'    => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?w=600&h=400&fit=crop&auto=format',
			'date'     => '2025-06-20 08:30:00',
		),
	);

	foreach ( $defaults as $item ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $item['title'],
			'post_content' => $item['content'],
			'post_status'  => 'publish',
			'post_type'    => 'post',
			'post_date'    => $item['date'],
		) );

		if ( ! is_wp_error( $post_id ) && $post_id ) {
			wp_set_object_terms( $post_id, $item['category'], 'category' );
			update_post_meta( $post_id, '_news_image_url', esc_url_raw( $item['image'] ) );
		}
	}

	update_option( 'mat_i_news_seeded_v1', '1' );
}
add_action( 'init', 'mat_i_maybe_seed_news' );

/**
 * AJAX Handler: Save (Create or Update) News
 */
function mat_i_ajax_save_news() {
	check_ajax_referer( 'mat_i_news_nonce', 'nonce' );

	if ( ! current_user_can( 'edit_posts' ) ) {
		wp_send_json_error( array( 'message' => 'Unauthorized action.' ), 403 );
	}

	$post_id  = isset( $_POST['post_id'] ) ? absint( $_POST['post_id'] ) : 0;
	$title    = isset( $_POST['title'] ) ? sanitize_text_field( wp_unslash( $_POST['title'] ) ) : '';
	$category = isset( $_POST['category'] ) ? sanitize_text_field( wp_unslash( $_POST['category'] ) ) : 'General News';
	$content  = isset( $_POST['content'] ) ? sanitize_textarea_field( wp_unslash( $_POST['content'] ) ) : '';
	$image    = isset( $_POST['image_url'] ) ? esc_url_raw( wp_unslash( $_POST['image_url'] ) ) : '';

	if ( empty( $title ) ) {
		wp_send_json_error( array( 'message' => 'Please provide a bulletin title.' ) );
	}

	$fallback_images = array(
		'Admissions'       => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=600&h=400&fit=crop&auto=format',
		'Academic Fair'    => 'https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=600&h=400&fit=crop&auto=format',
		'Student Honors'   => 'https://images.unsplash.com/photo-1627556704302-624286467c65?w=600&h=400&fit=crop&auto=format',
		'Faculty Research' => 'https://images.unsplash.com/photo-1590012314607-cda9d9b699ae?w=600&h=400&fit=crop&auto=format',
		'Facilities'       => 'https://images.unsplash.com/photo-1561089489-f13d5e730d72?w=600&h=400&fit=crop&auto=format',
	);

	if ( empty( $image ) ) {
		$image = isset( $fallback_images[ $category ] ) ? $fallback_images[ $category ] : 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&h=400&fit=crop&auto=format';
	}

	$post_data = array(
		'post_title'   => $title,
		'post_content' => $content,
		'post_status'  => 'publish',
		'post_type'    => 'post',
	);

	if ( $post_id > 0 ) {
		$post_data['ID'] = $post_id;
		$saved_id = wp_update_post( $post_data );
		$action_type = 'updated';
	} else {
		$saved_id = wp_insert_post( $post_data );
		$action_type = 'created';
	}

	if ( is_wp_error( $saved_id ) || ! $saved_id ) {
		wp_send_json_error( array( 'message' => 'Failed to save bulletin.' ) );
	}

	// Assign category
	wp_set_object_terms( $saved_id, $category, 'category' );

	// Store custom image URL
	update_post_meta( $saved_id, '_news_image_url', $image );

	$saved_post = get_post( $saved_id );
	$formatted_date = get_the_date( 'F j, Y', $saved_post );

	wp_send_json_success( array(
		'action_type'    => $action_type,
		'id'             => $saved_id,
		'title'          => get_the_title( $saved_post ),
		'content'        => wp_strip_all_tags( $saved_post->post_content ),
		'category'       => $category,
		'image_url'      => $image,
		'date'           => $formatted_date,
		'link'           => get_permalink( $saved_id ),
		'message'        => ( $action_type === 'updated' ) ? 'Bulletin updated successfully!' : 'New announcement posted successfully!',
	) );
}
add_action( 'wp_ajax_mat_i_save_news', 'mat_i_ajax_save_news' );

/**
 * AJAX Handler: Delete News
 */
function mat_i_ajax_delete_news() {
	check_ajax_referer( 'mat_i_news_nonce', 'nonce' );

	$post_id = isset( $_POST['post_id'] ) ? absint( $_POST['post_id'] ) : 0;

	if ( ! $post_id || ! current_user_can( 'delete_post', $post_id ) ) {
		wp_send_json_error( array( 'message' => 'Unauthorized or invalid post ID.' ), 403 );
	}

	$deleted = wp_delete_post( $post_id, true ); // permanent delete

	if ( $deleted ) {
		wp_send_json_success( array(
			'id'      => $post_id,
			'message' => 'Announcement removed successfully.',
		) );
	} else {
		wp_send_json_error( array( 'message' => 'Could not delete bulletin.' ) );
	}
}
add_action( 'wp_ajax_mat_i_delete_news', 'mat_i_ajax_delete_news' );
