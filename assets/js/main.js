/**
 * MAT-I National High School JavaScript Interactive Logic
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Sticky Navigation Scroll Effect & Scroll-to-Top Button
  const stickyNav = document.querySelector('.sticky-nav');
  const scrollTopBtn = document.querySelector('.scroll-top-btn');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 20) {
      if (stickyNav) stickyNav.classList.add('scrolled');
    } else {
      if (stickyNav) stickyNav.classList.remove('scrolled');
    }

    if (scrollTopBtn) {
      if (window.scrollY > 400) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    }
  });

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 1.1 One-Way Scroll Reveal Observer (Smooth Scroll Down Reveal, Persistent on Scroll Up)
  const revealElements = document.querySelectorAll(
    '.scroll-reveal, .feature-shortcut-card, .core-value-card, .service-hub-card, .program-card-item, .enroll-step-item, .institutional-links-bar, .news-card-item, .program-card, .timeline-card-box, .mv-vision-quote-card, .mv-value-card-item, .history-narrative-card, .principal-spotlight-card, .organigram-dept-card, .emblem-showcase-card, .post-card, .section-title-navy'
  );

  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          el.classList.remove('scroll-exit-top', 'scroll-exit-bottom');
          el.classList.add('revealed');
          // Once revealed on scroll down, keep it visible and stop observing so scrolling up has no transition
          observer.unobserve(el);
        }
      });
    }, {
      root: null,
      rootMargin: '0px 0px -30px 0px',
      threshold: 0.08
    });

    revealElements.forEach((el, index) => {
      if (!el.classList.contains('scroll-reveal')) {
        el.classList.add('scroll-reveal');
      }
      // Apply subtle staggered delay based on grid siblings
      const siblingIndex = (index % 5) + 1;
      el.classList.add('stagger-' + siblingIndex);
      revealObserver.observe(el);
    });
  }

  // 2. Coordinated Dropdown Navigation System (About Us & User Account)
  const aboutBtn = document.getElementById('aboutDropdownBtn');
  const aboutPanel = document.getElementById('aboutDropdownPanel');
  const chevronIcon = document.getElementById('aboutChevronIcon');

  const userBtn = document.getElementById('userMenuBtn');
  const userPanel = document.getElementById('userDropdownPanel');
  const userChevron = document.getElementById('userChevronIcon');

  function closeAllDropdowns() {
    if (aboutPanel) aboutPanel.classList.remove('open');
    if (chevronIcon) chevronIcon.style.transform = 'rotate(0deg)';
    if (userPanel) userPanel.classList.remove('open');
    if (userChevron) userChevron.style.transform = 'rotate(0deg)';
    if (aboutBtn) aboutBtn.setAttribute('aria-expanded', 'false');
    if (userBtn) userBtn.setAttribute('aria-expanded', 'false');
  }

  // 2.1 About Us Dropdown (Click-Only)
  if (aboutBtn && aboutPanel) {
    aboutBtn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const willOpen = !aboutPanel.classList.contains('open');
      closeAllDropdowns();
      if (willOpen) {
        aboutPanel.classList.add('open');
        aboutBtn.setAttribute('aria-expanded', 'true');
        if (chevronIcon) chevronIcon.style.transform = 'rotate(180deg)';
      }
    });
  }

  // 2.2 User Account Dropdown (Click-Only)
  if (userBtn && userPanel) {
    userBtn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const willOpen = !userPanel.classList.contains('open');
      closeAllDropdowns();
      if (willOpen) {
        userPanel.classList.add('open');
        userBtn.setAttribute('aria-expanded', 'true');
        if (userChevron) userChevron.style.transform = 'rotate(180deg)';
      }
    });
  }

  // Document Click & Escape Key Dismissal
  document.addEventListener('click', function (e) {
    if (
      (!aboutPanel || !aboutPanel.contains(e.target)) &&
      (!aboutBtn || !aboutBtn.contains(e.target)) &&
      (!userPanel || !userPanel.contains(e.target)) &&
      (!userBtn || !userBtn.contains(e.target))
    ) {
      closeAllDropdowns();
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAllDropdowns();
    }
  });

  // 3. Mobile Navigation Hamburger & Accordion
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mobileNavMenu = document.getElementById('mobileNavMenu');
  const mobileAboutBtn = document.getElementById('mobileAboutBtn');
  const mobileAboutSub = document.getElementById('mobileAboutSub');

  if (mobileToggle && mobileNavMenu) {
    mobileToggle.addEventListener('click', function () {
      mobileNavMenu.classList.toggle('hidden');
    });
  }

  if (mobileAboutBtn && mobileAboutSub) {
    mobileAboutBtn.addEventListener('click', function () {
      mobileAboutSub.classList.toggle('hidden');
    });
  }

  // 4. Hero Auto-Rotating Slider (5000ms Timer)
  const heroBgs = document.querySelectorAll('.hero-slide-bg');
  const heroDots = document.querySelectorAll('.hero-dot');
  const heroHeadings = [
    "Shaping Leaders, Building Futures",
    "Your Journey Starts Here",
    "Transforming Lives Through Education"
  ];
  const heroBadges = [
    "Welcome to MAT-I NHS",
    "Admissions Open 2025–2026",
    "Excellence in Academia"
  ];

  const heroHeadingEl = document.getElementById('heroSlideHeading');
  const heroBadgeEl = document.getElementById('heroSlideBadge');
  let heroIndex = 0;
  let heroTimer = null;

  function setHeroSlide(index) {
    heroIndex = index;
    heroBgs.forEach((bg, i) => {
      if (i === index) bg.classList.add('active');
      else bg.classList.remove('active');
    });

    heroDots.forEach((dot, i) => {
      if (i === index) dot.classList.add('active');
      else dot.classList.remove('active');
    });

    if (heroHeadingEl && heroHeadings[index]) {
      heroHeadingEl.textContent = heroHeadings[index];
    }
    if (heroBadgeEl && heroBadges[index]) {
      heroBadgeEl.textContent = heroBadges[index];
    }
  }

  if (heroBgs.length > 0) {
    heroDots.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        setHeroSlide(i);
        resetHeroTimer();
      });
    });

    function resetHeroTimer() {
      if (heroTimer) clearInterval(heroTimer);
      heroTimer = setInterval(() => {
        let nextIndex = (heroIndex + 1) % heroBgs.length;
        setHeroSlide(nextIndex);
      }, 5000);
    }

    resetHeroTimer();
  }

  // 5. Campus Photo Carousel (3500ms Timer)
  const campusSlides = document.querySelectorAll('.campus-carousel-slide');
  const campusDots = document.querySelectorAll('.campus-dot');
  let campusIndex = 0;

  function setCampusSlide(index) {
    campusIndex = index;
    campusSlides.forEach((slide, i) => {
      if (i === index) slide.style.opacity = '1';
      else slide.style.opacity = '0';
    });

    campusDots.forEach((dot, i) => {
      if (i === index) dot.classList.add('active');
      else dot.classList.remove('active');
    });
  }

  if (campusSlides.length > 0) {
    campusDots.forEach((dot, i) => {
      dot.addEventListener('click', () => setCampusSlide(i));
    });

    setInterval(() => {
      let nextIndex = (campusIndex + 1) % campusSlides.length;
      setCampusSlide(nextIndex);
    }, 3500);
  }

  // 6. News & Announcements Filter & Live Search
  const filterBtns = document.querySelectorAll('.news-filter-btn');
  const searchInput = document.getElementById('newsSearchInput');
  const noNewsMsg = document.getElementById('noNewsFound');

  let currentCategory = 'all';

  function filterNews() {
    const newsItems = document.querySelectorAll('.news-card-item');
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    let visibleCount = 0;

    newsItems.forEach(item => {
      const itemCategory = item.getAttribute('data-category') || '';
      const itemTitle = (item.querySelector('.news-card-title')?.textContent || '').toLowerCase();
      const itemText = (item.querySelector('.news-card-text')?.textContent || '').toLowerCase();

      const matchesCat = currentCategory === 'all' || itemCategory.toLowerCase() === currentCategory.toLowerCase();
      const matchesQuery = !query || itemTitle.includes(query) || itemText.includes(query) || itemCategory.toLowerCase().includes(query);

      if (matchesCat && matchesQuery) {
        item.style.display = 'flex';
        visibleCount++;
      } else {
        item.style.display = 'none';
      }
    });

    if (noNewsMsg) {
      noNewsMsg.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      currentCategory = this.getAttribute('data-category') || 'all';
      filterNews();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', filterNews);
  }

  // 7. Strand Curriculum Modal Logic
  const strandData = {
    academic: {
      track: 'Academic Track',
      title: 'Academic Track (Senior High School)',
      desc: 'The Academic Track prepares learners for university education and specialized college degrees through comprehensive coursework across humanities, sciences, communication, and foundational research methodologies.',
      subjects: [
        'Oral and Written Communication in Context',
        'General Mathematics, Statistics & Probability',
        'Earth & Life Science, Physical Science',
        'Empirical Practical Research 1 & 2 / Inquiries',
        'Introduction to Philosophy & Human Person',
        'Contemporary Philippine Arts & Regional Studies',
        'Understanding Culture, Society, and Politics'
      ],
      pathways: 'University Baccalaureate Degrees (Education, Arts & Sciences, Allied Health, Business Administration, Engineering Foundations, Law, Social Work).'
    },
    techpro: {
      track: 'Tech-Voc Track',
      title: 'Tech-Pro Track (Technical-Vocational-Livelihood)',
      desc: 'The Tech-Pro (TVL) Track equips students with job-ready practical competencies, technical proficiencies, and TESDA National Certificate (NC II/III) qualifications for immediate career entry, trade entrepreneurship, and polytechnic studies.',
      subjects: [
        'Information & Communications Technology (ICT) / CSS NC II',
        'Computer Systems Servicing & Network Maintenance',
        'Electrical Installation & Maintenance / Technical Trade',
        'Home Economics, Industrial Arts & Workshop Safety',
        'Work Immersion in Certified Industry Partner Hubs',
        'Applied Entrepreneurship in Technical Trades',
        'Practical Technical Research & Innovations'
      ],
      pathways: 'TESDA National Certificate (NC II/III) Certified Specialist, IT & Hardware Support, Technical Trades, Polytech Degree Programs, Self-Employed Entrepreneur.'
    },
    stem: {
      track: 'Academic Track',
      title: 'Science, Technology, Engineering, and Mathematics (STEM)',
      desc: 'The STEM strand is designed for learners aiming to pursue rigorous university degrees in biological sciences, engineering, architecture, mathematics, computer science, and medical healthcare.',
      subjects: [
        'Pre-Calculus & Basic Calculus',
        'General Physics 1 & 2',
        'General Chemistry 1 & 2',
        'General Biology 1 & 2',
        'Empirical Practical Research 1 & 2',
        'Disaster Readiness & Risk Reduction'
      ],
      pathways: 'Engineering (Civil, Mech, Electrical, Software), Architecture, Medicine, Nursing, Pharmacy, Data Science, Medical Technology.'
    },
    humss: {
      track: 'Academic Track',
      title: 'Humanities and Social Sciences (HUMSS)',
      desc: 'The HUMSS strand is tailored for students passionate about public service, law, creative writing, social sciences, political analysis, and community leadership.',
      subjects: [
        'Creative Writing & Malikhaing Pagsulat',
        'Introduction to World Religions and Belief Systems',
        'Trends, Networks, and Critical Thinking in the 21st Century',
        'Philippine Politics and Governance',
        'Community Engagement, Solidarity, and Citizenship',
        'Disciplines and Ideas in the Social Sciences'
      ],
      pathways: 'Law, Political Science, Journalism, Secondary & Higher Education, Psychology, Foreign Service, Public Administration.'
    },
    abm: {
      track: 'Academic Track',
      title: 'Accountancy, Business, and Management (ABM)',
      desc: 'The ABM strand focuses on the fundamentals of corporate enterprise, financial literacy, business accounting, organizational behavior, and entrepreneurship.',
      subjects: [
        'Fundamentals of Accountancy, Business, and Management 1 & 2',
        'Business Math & Applied Economics',
        'Business Finance & Corporate Strategy',
        'Organization and Management',
        'Principles of Marketing',
        'Business Ethics and Social Responsibility'
      ],
      pathways: 'Certified Public Accountant (CPA), Business Administration, Marketing Management, Banking & Finance, Economics, Corporate Law.'
    },
    tvl: {
      track: 'Tech-Voc Track',
      title: 'Technical-Vocational-Livelihood (TVL)',
      desc: 'The TVL track delivers hands-on technical skills and National Certificate (NC II/III) qualifications for immediate career readiness and specialized polytechnic degrees.',
      subjects: [
        'Computer Systems Servicing (CSS NC II)',
        'Computer Programming & Web Development',
        'Electrical Installation and Maintenance (EIM NC II)',
        'Bread and Pastry Production / Cookery NC II',
        'Entrepreneurship in Technical Trade',
        'Work Immersion in Industry Partner Hubs'
      ],
      pathways: 'Information Technology, Network Administration, Culinary Arts, Electrical Engineering Tech, Certified TESDA Specialist.'
    }
  };

  const strandModal = document.getElementById('strandModal');
  const closeStrandBtn = document.getElementById('closeStrandModal');
  const strandButtons = document.querySelectorAll('.strand-details-btn');

  function openStrandModal(strandKey) {
    const data = strandData[strandKey];
    if (!data || !strandModal) return;

    document.getElementById('modalTrackBadge').textContent = data.track;
    document.getElementById('modalStrandTitle').textContent = data.title;
    document.getElementById('modalStrandDesc').textContent = data.desc;
    document.getElementById('modalPathways').textContent = data.pathways;

    const subjectsList = document.getElementById('modalSpecializedSubjects');
    if (subjectsList) {
      subjectsList.innerHTML = '';
      data.subjects.forEach(sub => {
        const li = document.createElement('li');
        li.textContent = sub;
        subjectsList.appendChild(li);
      });
    }

    strandModal.classList.remove('hidden');
  }

  strandButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const strand = this.getAttribute('data-strand');
      openStrandModal(strand);
    });
  });

  if (closeStrandBtn && strandModal) {
    closeStrandBtn.addEventListener('click', function () {
      strandModal.classList.add('hidden');
    });
  }

  // 8. Admissions & BEEF Form Modal Logic
  const beefModal = document.getElementById('beefModal');
  const closeBeefBtn = document.getElementById('closeBeefModal');
  const openBeefButtons = document.querySelectorAll('.open-beef-btn');

  openBeefButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      if (strandModal) strandModal.classList.add('hidden');
      if (beefModal) beefModal.classList.remove('hidden');
    });
  });

  if (closeBeefBtn && beefModal) {
    closeBeefBtn.addEventListener('click', function () {
      beefModal.classList.add('hidden');
    });
  }

  // 9. Front-End Inline News & Announcements CRUD Manager (Admin)
  const newsAdminModal = document.getElementById('newsAdminModal');
  const openAddNewsBtn = document.getElementById('openAddNewsModalBtn');
  const closeNewsBtn = document.getElementById('closeNewsModal');
  const cancelNewsBtn = document.getElementById('cancelNewsModalBtn');
  const newsAdminForm = document.getElementById('newsAdminForm');
  const newsGrid = document.getElementById('newsCardsGrid');

  function showToast(message, isError) {
    const toast = document.getElementById('matIToast');
    const toastMsg = document.getElementById('matIToastMessage');
    if (!toast || !toastMsg) return;
    toastMsg.textContent = message;
    toast.className = 'mat-toast ' + (isError ? 'mat-toast-error' : 'mat-toast-success') + ' visible';
    setTimeout(function () {
      toast.classList.remove('visible');
    }, 3500);
  }

  function openNewsModalForCreate() {
    if (!newsAdminModal || !newsAdminForm) return;
    newsAdminForm.reset();
    document.getElementById('newsFormPostId').value = '';
    document.getElementById('newsModalActionBadge').textContent = 'Create Announcement';
    document.getElementById('newsModalTitle').textContent = 'Add School Bulletin';
    document.getElementById('saveNewsBtnText').textContent = 'Save Bulletin';
    newsAdminModal.classList.remove('hidden');
  }

  function closeNewsModalHandler() {
    if (newsAdminModal) newsAdminModal.classList.add('hidden');
  }

  if (openAddNewsBtn) {
    openAddNewsBtn.addEventListener('click', function (e) {
      e.preventDefault();
      openNewsModalForCreate();
    });
  }

  if (closeNewsBtn) closeNewsBtn.addEventListener('click', closeNewsModalHandler);
  if (cancelNewsBtn) cancelNewsBtn.addEventListener('click', closeNewsModalHandler);

  // Delegated clicks for Edit and Delete buttons on cards
  if (newsGrid) {
    newsGrid.addEventListener('click', function (e) {
      const editBtn = e.target.closest('.btn-news-edit');
      const deleteBtn = e.target.closest('.btn-news-delete');

      // EDIT ACTION
      if (editBtn) {
        e.preventDefault();
        const card = editBtn.closest('.news-card-item');
        if (!card) return;

        const postId = card.getAttribute('data-id') || editBtn.getAttribute('data-id');
        const title = card.querySelector('.news-card-title')?.textContent || '';
        const category = card.getAttribute('data-category') || 'General News';
        const imgEl = card.querySelector('.news-card-img');
        const imgUrl = imgEl ? imgEl.src : '';
        const fullContent = card.querySelector('.news-card-full-content')?.textContent || card.querySelector('.news-card-text')?.textContent || '';

        document.getElementById('newsFormPostId').value = postId;
        document.getElementById('newsFormTitle').value = title.trim();
        document.getElementById('newsFormCategory').value = category;
        document.getElementById('newsFormImageUrl').value = imgUrl;
        document.getElementById('newsFormContent').value = fullContent.trim();

        document.getElementById('newsModalActionBadge').textContent = 'Edit Announcement';
        document.getElementById('newsModalTitle').textContent = 'Edit School Bulletin';
        document.getElementById('saveNewsBtnText').textContent = 'Update Bulletin';

        if (newsAdminModal) newsAdminModal.classList.remove('hidden');
        return;
      }

      // DELETE ACTION
      if (deleteBtn) {
        e.preventDefault();
        const card = deleteBtn.closest('.news-card-item');
        if (!card) return;

        const postId = card.getAttribute('data-id') || deleteBtn.getAttribute('data-id');
        if (!postId) return;

        if (!confirm('Are you sure you want to remove this announcement from the website?')) {
          return;
        }

        const formData = new FormData();
        formData.append('action', 'mat_i_delete_news');
        formData.append('post_id', postId);
        if (typeof matIAjax !== 'undefined' && matIAjax.nonce) {
          formData.append('nonce', matIAjax.nonce);
        }

        fetch(matIAjax.ajax_url, {
          method: 'POST',
          body: formData,
        })
          .then(res => res.json())
          .then(data => {
            if (data.success) {
              card.style.transition = 'all 0.35s cubic-bezier(0.16, 1, 0.3, 1)';
              card.style.opacity = '0';
              card.style.transform = 'scale(0.8)';
              card.style.maxWidth = '0px';
              card.style.minWidth = '0px';
              card.style.padding = '0px';
              card.style.margin = '0px';
              card.style.border = 'none';
              card.style.overflow = 'hidden';
              setTimeout(() => {
                card.remove();
                if (typeof filterNews === 'function') filterNews();
              }, 350);
              showToast(data.data.message || 'Bulletin removed successfully.', false);
            } else {
              showToast(data.data.message || 'Failed to delete bulletin.', true);
            }
          })
          .catch(err => {
            showToast('An error occurred while deleting. Please try again.', true);
          });
      }
    });
  }

  // Handle Form Submission (Add / Update)
  if (newsAdminForm) {
    newsAdminForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const submitBtn = document.getElementById('saveNewsSubmitBtn');
      const btnText = document.getElementById('saveNewsBtnText');
      const btnSpinner = document.getElementById('saveNewsBtnSpinner');

      const formData = new FormData(newsAdminForm);
      formData.append('action', 'mat_i_save_news');
      if (typeof matIAjax !== 'undefined' && matIAjax.nonce) {
        formData.append('nonce', matIAjax.nonce);
      }

      if (submitBtn) submitBtn.disabled = true;
      if (btnSpinner) btnSpinner.classList.remove('hidden');
      if (btnText) btnText.textContent = 'Saving...';

      fetch(matIAjax.ajax_url, {
        method: 'POST',
        body: formData,
      })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            const item = data.data;

            if (item.action_type === 'updated') {
              // Update existing card in DOM
              const existingCard = document.getElementById('news-card-' + item.id);
              if (existingCard) {
                existingCard.setAttribute('data-category', item.category);
                const badge = existingCard.querySelector('.news-cat-badge');
                if (badge) badge.textContent = item.category;

                const img = existingCard.querySelector('.news-card-img');
                if (img) img.src = item.image_url;

                const title = existingCard.querySelector('.news-card-title');
                if (title) title.textContent = item.title;

                const text = existingCard.querySelector('.news-card-text');
                if (text) {
                  const excerpt = item.content.length > 110 ? item.content.substring(0, 110) + '...' : item.content;
                  text.textContent = excerpt;
                }

                const fullContent = existingCard.querySelector('.news-card-full-content');
                if (fullContent) fullContent.textContent = item.content;
              }
            } else {
              // Create and prepend new card
              const excerpt = item.content.length > 110 ? item.content.substring(0, 110) + '...' : item.content;
              const cardMarkup = `
                <article class="news-card-item scroll-reveal revealed" id="news-card-${item.id}" data-id="${item.id}" data-category="${item.category}" style="animation: fadeInUp 0.4s ease forwards;">
                  <div class="news-card-img-wrap">
                    <img src="${item.image_url}" class="news-card-img" alt="${item.title}">
                    <span class="news-cat-badge">${item.category}</span>
                    <div class="news-admin-actions">
                      <button type="button" class="btn-news-ctrl btn-news-edit" data-id="${item.id}" title="Edit this announcement">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        <span>Edit</span>
                      </button>
                      <button type="button" class="btn-news-ctrl btn-news-delete" data-id="${item.id}" title="Delete this announcement">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                  <div class="news-card-body">
                    <h3 class="news-card-title">${item.title}</h3>
                    <p class="news-card-text">${excerpt}</p>
                    <div class="news-card-full-content" style="display: none;">${item.content}</div>
                    <div class="news-card-footer">
                      <span class="news-card-date">${item.date}</span>
                      <a href="${item.link}" class="news-card-link">Read More &rarr;</a>
                    </div>
                  </div>
                </article>
              `;

              if (newsGrid) {
                newsGrid.insertAdjacentHTML('afterbegin', cardMarkup);
              }
            }

            closeNewsModalHandler();
            if (typeof filterNews === 'function') filterNews();
            showToast(item.message || 'Saved successfully!', false);
          } else {
            showToast(data.data.message || 'Error saving announcement.', true);
          }
        })
        .catch(err => {
          showToast('Server error while saving. Please check connection.', true);
        })
        .finally(() => {
          if (submitBtn) submitBtn.disabled = false;
          if (btnSpinner) btnSpinner.classList.add('hidden');
          if (btnText) btnText.textContent = 'Save Bulletin';
        });
    });
  }

  // =========================================================================
  // 12. CMS SECTION FAST-EDIT SYSTEM (ADMIN)
  // =========================================================================
  const fastEditModal = document.getElementById('sectionFastEditModal');
  const fastEditForm = document.getElementById('sectionFastEditForm');
  const closeFastEditBtn = document.getElementById('closeSectionFastEditModal');
  const cancelFastEditBtn = document.getElementById('cancelSectionFastEditBtn');
  const fastEditSectionInput = document.getElementById('fastEditSectionName');
  const fastEditTitle = document.getElementById('fastEditTitle');
  const fastEditBadge = document.getElementById('fastEditBadge');
  const saveFastEditSubmitBtn = document.getElementById('saveSectionFastEditSubmitBtn');
  const saveFastEditBtnText = document.getElementById('saveSectionFastEditBtnText');
  const saveFastEditBtnSpinner = document.getElementById('saveSectionFastEditBtnSpinner');

  function openFastEditSection(sectionName) {
    if (!fastEditModal) return;

    // Hide all groups first
    document.querySelectorAll('.fast-edit-group').forEach(grp => grp.classList.add('hidden'));

    const targetGroup = document.getElementById('fastEditGroup_' + sectionName);
    if (targetGroup) {
      targetGroup.classList.remove('hidden');
    }

    if (fastEditSectionInput) fastEditSectionInput.value = sectionName;

    const titles = {
      hero: 'Edit Hero Banner',
      core_values: 'Edit DepEd Core Values',
      principal: 'Edit Principal & Leadership',
      admissions: 'Edit Admissions & Pathway',
      global: 'Edit Contact & Global Info'
    };

    if (fastEditTitle) fastEditTitle.textContent = titles[sectionName] || 'Edit Section';
    if (fastEditBadge) fastEditBadge.textContent = 'Section Fast-Edit';

    fastEditModal.classList.remove('hidden');
    fastEditModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeFastEditModalHandler() {
    if (!fastEditModal) return;
    fastEditModal.classList.add('hidden');
    fastEditModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  // Bind click on all .btn-fast-edit-section
  document.querySelectorAll('.btn-fast-edit-section').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const section = this.getAttribute('data-section');
      if (section) openFastEditSection(section);
    });
  });

  if (closeFastEditBtn) closeFastEditBtn.addEventListener('click', closeFastEditModalHandler);
  if (cancelFastEditBtn) cancelFastEditBtn.addEventListener('click', closeFastEditModalHandler);

  // WordPress Native Media Picker Trigger inside Fast-Edit Modal
  document.querySelectorAll('.mat-i-pick-media-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const targetSelector = this.getAttribute('data-target');
      if (!window.wp || !wp.media) {
        showToast('Media uploader not loaded. Please ensure you are logged in as admin.', true);
        return;
      }

      const mediaFrame = wp.media({
        title: 'Select Image',
        button: { text: 'Use Image' },
        multiple: false
      }).on('select', function () {
        const attachment = mediaFrame.state().get('selection').first().toJSON();
        const inputEl = document.querySelector(targetSelector);
        if (inputEl) inputEl.value = attachment.url;
      }).open();
    });
  });

  // Fast-Edit Form Submission
  if (fastEditForm) {
    fastEditForm.addEventListener('submit', function (e) {
      e.preventDefault();

      if (saveFastEditSubmitBtn) saveFastEditSubmitBtn.disabled = true;
      if (saveFastEditBtnSpinner) saveFastEditBtnSpinner.classList.remove('hidden');
      if (saveFastEditBtnText) saveFastEditBtnText.textContent = 'Saving...';

      const section = fastEditSectionInput ? fastEditSectionInput.value : '';
      const formData = new FormData(fastEditForm);
      const postPayload = new FormData();

      postPayload.append('action', 'mat_i_save_section');
      postPayload.append('section', section);
      postPayload.append('nonce', (typeof matIAjax !== 'undefined' && matIAjax.cms_nonce) ? matIAjax.cms_nonce : (matIAjax ? matIAjax.nonce : ''));

      for (let [key, value] of formData.entries()) {
        if (key === 'section') continue;
        postPayload.append(`data[${key}]`, value);
      }

      fetch((typeof matIAjax !== 'undefined' && matIAjax.ajax_url) ? matIAjax.ajax_url : '/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: postPayload,
      })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            const clean = data.data.data;

            // Live DOM Update based on section
            if (section === 'hero') {
              const badge = document.getElementById('heroSlideBadge');
              const heading = document.getElementById('heroSlideHeading');
              const para = document.getElementById('heroSlidePara');
              const cta1 = document.getElementById('heroCta1');
              const cta2 = document.getElementById('heroCta2');
              const cta3 = document.getElementById('heroCta3');
              const rightImg = document.getElementById('heroRightImg');

              if (badge && clean.badge) badge.textContent = clean.badge;
              if (heading && clean.headline) heading.textContent = clean.headline.replace(/[\r\n]+/g, ' ');
              if (para && clean.paragraph) para.textContent = clean.paragraph;
              if (cta1 && clean.cta1_text) cta1.querySelector('span').textContent = clean.cta1_text;
              if (cta2 && clean.cta2_text) cta2.textContent = clean.cta2_text;
              if (cta3 && clean.cta3_text) cta3.textContent = clean.cta3_text;
              if (rightImg && clean.banner_image) rightImg.src = clean.banner_image;

              document.querySelectorAll('.hero-slide-bg').forEach(bg => {
                if (clean.banner_image) bg.style.backgroundImage = `url('${clean.banner_image}')`;
              });
            } else if (section === 'core_values') {
              const badge = document.getElementById('coreValuesBadge');
              const heading = document.getElementById('coreValuesHeading');
              const desc = document.getElementById('coreValuesDesc');

              if (badge && clean.badge) badge.textContent = clean.badge;
              if (heading && clean.heading) heading.textContent = clean.heading;
              if (desc && clean.description) desc.textContent = clean.description;

              if (clean.values && Array.isArray(clean.values)) {
                clean.values.forEach((v, idx) => {
                  const card = document.getElementById('coreValueCard-' + idx);
                  if (card) {
                    const t = card.querySelector('.core-value-title');
                    const d = card.querySelector('.core-value-desc');
                    if (t) t.textContent = v.title;
                    if (d) d.textContent = v.desc;
                  }
                });
              }
            } else if (section === 'principal') {
              const badge = document.getElementById('principalBadge');
              const name = document.getElementById('principalName');
              const title = document.getElementById('principalTitle');
              const heading = document.getElementById('principalHeading');
              const quote = document.getElementById('principalQuote');
              const avatar = document.getElementById('principalAvatarImg');

              if (badge && clean.badge) badge.textContent = clean.badge;
              if (name && clean.name) name.textContent = clean.name;
              if (title && clean.title) title.textContent = clean.title;
              if (heading && clean.heading) heading.textContent = clean.heading;
              if (quote && clean.quote) quote.textContent = clean.quote;
              if (avatar && clean.image) avatar.src = clean.image;
            } else if (section === 'admissions') {
              const badge = document.getElementById('admissionsBadge');
              const title = document.getElementById('admissionsTitle');
              const desc = document.getElementById('admissionsDesc');
              const sideImg = document.getElementById('enrollmentBgImg');

              if (badge && clean.badge) badge.textContent = clean.badge;
              if (title && clean.title) title.textContent = clean.title;
              if (desc && clean.description) desc.textContent = clean.description;
              if (sideImg && clean.image_url) sideImg.style.backgroundImage = `url('${clean.image_url}')`;

              if (clean.steps && Array.isArray(clean.steps)) {
                const stepItems = document.querySelectorAll('.enroll-step-item');
                clean.steps.forEach((st, idx) => {
                  if (stepItems[idx]) {
                    const stTitle = stepItems[idx].querySelector('.enroll-step-title');
                    const stDesc = stepItems[idx].querySelector('.enroll-step-desc');
                    if (stTitle) stTitle.textContent = st.title;
                    if (stDesc) stDesc.textContent = st.desc;
                  }
                });
              }
            } else if (section === 'global') {
              const phone = document.getElementById('topInfoPhone');
              const email = document.getElementById('topInfoEmail');
              const hours = document.getElementById('topInfoHours');
              const fPhone = document.getElementById('footerPhone');
              const fEmail = document.getElementById('footerEmail');
              const fHours = document.getElementById('footerHours');
              const fAddr = document.getElementById('footerAddress');
              const fAbout = document.getElementById('footerAboutText');
              const fCopy = document.getElementById('footerCopyText');

              if (phone && clean.phone) phone.textContent = clean.phone;
              if (fPhone && clean.phone) fPhone.textContent = clean.phone;
              if (email && clean.email) email.textContent = clean.email;
              if (fEmail && clean.email) fEmail.textContent = clean.email;
              if (hours && clean.office_hours) hours.textContent = clean.office_hours;
              if (fHours && clean.office_hours) fHours.textContent = clean.office_hours;
              if (fAddr && clean.campus_address) fAddr.textContent = clean.campus_address;
              if (fAbout && clean.footer_about) fAbout.textContent = clean.footer_about;
              if (fCopy && clean.copyright_text) fCopy.textContent = clean.copyright_text;
            }

            closeFastEditModalHandler();
            showToast(data.data.message || 'Section saved successfully!', false);
          } else {
            showToast(data.data.message || 'Error saving section.', true);
          }
        })
        .catch(err => {
          showToast('Server error while saving section. Please check connection.', true);
        })
        .finally(() => {
          if (saveFastEditSubmitBtn) saveFastEditSubmitBtn.disabled = false;
          if (saveFastEditBtnSpinner) saveFastEditBtnSpinner.classList.add('hidden');
          if (saveFastEditBtnText) saveFastEditBtnText.textContent = 'Save Section';
        });
    });
  }

  // Close modals on clicking outside the box
  window.addEventListener('click', function (e) {
    if (e.target === strandModal) strandModal.classList.add('hidden');
    if (e.target === beefModal) beefModal.classList.add('hidden');
    if (e.target === newsAdminModal) newsAdminModal.classList.add('hidden');
    if (e.target === fastEditModal) closeFastEditModalHandler();
  });

  // Close modals on Escape key
  window.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      if (strandModal) strandModal.classList.add('hidden');
      if (beefModal) beefModal.classList.add('hidden');
      if (newsAdminModal) newsAdminModal.classList.add('hidden');
      if (fastEditModal) closeFastEditModalHandler();
    }
  });
});

