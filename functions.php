<?php
/**
 * Mat-I Theme functions and definitions
 *
 * This file acts as the main theme orchestrator, delegating
 * specific tasks to specialized modules in the /includes directory.
 *
 * @package Mat-I
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * 1. Theme Setup & Features
 * Handles theme supports (title tag, custom logo, post thumbnails) and navigation menus.
 */
require_once get_template_directory() . '/includes/theme-setup.php';

/**
 * 2. Enqueue CSS Styles & JavaScript Scripts
 * Loads fonts, modular section CSS files, and JS bundle.
 */
require_once get_template_directory() . '/includes/enqueue-scripts.php';

/**
 * 3. URL Routing & Custom Rewrite Rules
 * Manages custom endpoint rewrites (/login, /services, /history, etc.) and template mapping.
 */
require_once get_template_directory() . '/includes/url-routing.php';

/**
 * 4. Authentication & Login Handling
 * Handles login credentials submission, error processing, and wp-login.php redirection.
 */
require_once get_template_directory() . '/includes/auth.php';

/**
 * 5. News & Announcements AJAX Inline CRUD
 * Handles front-end on-page creation, editing, and deletion of bulletins.
 */
require_once get_template_directory() . '/includes/news-ajax.php';

/**
 * 6. CMS Defaults & Sample Data Seeder
 * Populates native wp_options with existing website content on first run.
 */
require_once get_template_directory() . '/includes/sample-data-seeder.php';

/**
 * 7. CMS Admin Settings Dashboard
 * Adds "Theme Settings" page in WP Admin with Settings API tabs.
 */
require_once get_template_directory() . '/includes/admin-settings.php';

/**
 * 8. CMS Front-End Fast-Edit AJAX Controller
 * Handles on-page section saving without reloading.
 */
require_once get_template_directory() . '/includes/cms-ajax.php';

