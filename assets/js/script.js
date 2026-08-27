/* ============================================
   PHARMA DEMO - MAIN JAVASCRIPT
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {
  // Hide preloader
  const preloader = document.getElementById('preloader');
  if (preloader) {
    setTimeout(() => {
      preloader.classList.add('preloader--hidden');
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 500);
    }, 1500);
  }

  initThemeToggle();
  initHeader();
  initMobileMenu();
  initBackToTop();
  initScrollReveal();
  initSmoothScroll();
  initDropdownKeyboard();
  initProductFilters();
  initAnimatedCounters();
  initAccordion();
  initContactForm();
  initNewsModal();
  initEnquiryModal();
  initHeroSlider();
  initOurProductsSlider();
  initCareerStepsSlider();
});

/* ============================================
   THEME TOGGLE (LIGHT / DARK MODE)
   ============================================ */
function initThemeToggle() {
  const toggles = document.querySelectorAll('.theme-toggle');
  if (!toggles.length) return;

  const html = document.documentElement;

  function getPreferredTheme() {
    const stored = localStorage.getItem('pharma-theme');
    if (stored) return stored;
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  function applyTheme(theme) {
    html.setAttribute('data-theme', theme);
    localStorage.setItem('pharma-theme', theme);
  }

  applyTheme(getPreferredTheme());

  toggles.forEach(function(btn) {
    btn.addEventListener('click', function() {
      const current = html.getAttribute('data-theme');
      applyTheme(current === 'dark' ? 'light' : 'dark');
    });
  });

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
    if (!localStorage.getItem('pharma-theme')) {
      applyTheme(e.matches ? 'dark' : 'light');
    }
  });
}

/* ============================================
   STICKY HEADER
   ============================================ */
function initHeader() {
  const header = document.querySelector('.header');
  if (!header) return;

  let lastScroll = 0;
  let ticking = false;

  function updateHeader() {
    const scrollY = window.scrollY;

    if (scrollY > 50) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }

    lastScroll = scrollY;
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(updateHeader);
      ticking = true;
    }
  }, { passive: true });

  updateHeader();
}

/* ============================================
   MOBILE MENU
   ============================================ */
function initMobileMenu() {
  const toggle = document.querySelector('.mobile-menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  const overlay = document.querySelector('.overlay');
  const body = document.body;

  if (!toggle || !mobileNav) return;

  function openMenu() {
    toggle.classList.add('mobile-menu-toggle--active');
    mobileNav.classList.add('mobile-nav--open');
    if (overlay) overlay.classList.add('overlay--visible');
    body.style.overflow = 'hidden';
    toggle.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    toggle.classList.remove('mobile-menu-toggle--active');
    mobileNav.classList.remove('mobile-nav--open');
    if (overlay) overlay.classList.remove('overlay--visible');
    body.style.overflow = '';
    toggle.setAttribute('aria-expanded', 'false');

    document.querySelectorAll('.mobile-nav__sub-links--open').forEach(sub => {
      sub.classList.remove('mobile-nav__sub-links--open');
    });
    document.querySelectorAll('.mobile-nav__toggle-icon--rotated').forEach(icon => {
      icon.classList.remove('mobile-nav__toggle-icon--rotated');
    });
  }

  toggle.addEventListener('click', () => {
    const isOpen = mobileNav.classList.contains('mobile-nav--open');
    isOpen ? closeMenu() : openMenu();
  });

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  document.querySelectorAll('.mobile-nav__link--has-sub').forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const subLinks = link.nextElementSibling;
      const icon = link.querySelector('.mobile-nav__toggle-icon');

      if (subLinks) {
        subLinks.classList.toggle('mobile-nav__sub-links--open');
      }
      if (icon) {
        icon.classList.toggle('mobile-nav__toggle-icon--rotated');
      }
    });
  });

  document.querySelectorAll('.mobile-nav a').forEach(link => {
    if (!link.classList.contains('mobile-nav__link--has-sub')) {
      link.addEventListener('click', closeMenu);
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileNav.classList.contains('mobile-nav--open')) {
      closeMenu();
    }
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 992 && mobileNav.classList.contains('mobile-nav--open')) {
      closeMenu();
    }
  });
}

/* ============================================
   BACK TO TOP
   ============================================ */
function initBackToTop() {
  const btn = document.querySelector('.back-to-top');
  if (!btn) return;

  let ticking = false;

  function updateVisibility() {
    if (window.scrollY > 400) {
      btn.classList.add('back-to-top--visible');
    } else {
      btn.classList.remove('back-to-top--visible');
    }
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(updateVisibility);
      ticking = true;
    }
  }, { passive: true });

  btn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

/* ============================================
   SCROLL REVEAL ANIMATIONS
   ============================================ */
function initScrollReveal() {
  const elements = document.querySelectorAll('.reveal');
  if (!elements.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('reveal--visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  elements.forEach(el => observer.observe(el));
}

/* ============================================
   SMOOTH SCROLL FOR ANCHOR LINKS
   ============================================ */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const headerOffset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-height')) || 80;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.scrollY - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}

/* ============================================
   KEYBOARD ACCESSIBILITY FOR DROPDOWNS
   ============================================ */
function initDropdownKeyboard() {
  document.querySelectorAll('.nav__dropdown-wrapper').forEach(wrapper => {
    const trigger = wrapper.querySelector('.nav__link');
    const dropdown = wrapper.querySelector('.nav__dropdown');
    if (!trigger || !dropdown) return;

    trigger.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        dropdown.style.opacity = dropdown.style.opacity === '1' ? '0' : '1';
        dropdown.style.visibility = dropdown.style.visibility === 'visible' ? 'hidden' : 'visible';
        dropdown.style.pointerEvents = dropdown.style.pointerEvents === 'auto' ? 'none' : 'auto';
      }
    });

    trigger.addEventListener('blur', () => {
      setTimeout(() => {
        if (!wrapper.contains(document.activeElement)) {
          dropdown.style.opacity = '';
          dropdown.style.visibility = '';
          dropdown.style.pointerEvents = '';
        }
      }, 150);
    });
  });
}

/* ============================================
   UTILITY: Dynamic Page Title
   ============================================ */
function setPageTitle(title) {
  document.title = title ? `${title} | PharmaCorp` : 'PharmaCorp - Advancing Healthcare';
}

/* ============================================
   UTILITY: Debounce
   ============================================ */
function debounce(fn, delay) {
  let timer;
  return function (...args) {
    clearTimeout(timer);
    timer = setTimeout(() => fn.apply(this, args), delay);
  };
}

/* ============================================
   PRODUCT FILTERING
   ============================================ */
function initProductFilters() {
  const searchInput = document.getElementById('productSearch');
  const categorySelect = document.getElementById('categoryFilter');
  const therapySelect = document.getElementById('therapyFilter');
  const clearBtn = document.getElementById('clearFilters');
  const countEl = document.getElementById('productCount');
  const grid = document.querySelector('.product-grid');
  const emptyState = document.querySelector('.product-grid__empty');

  if (!grid) return;

  const products = grid.querySelectorAll('.product-card[data-product]');

  function filterProducts() {
    const search = (searchInput ? searchInput.value : '').toLowerCase().trim();
    const category = categorySelect ? categorySelect.value : '';
    const therapy = therapySelect ? therapySelect.value : '';

    let visibleCount = 0;

    products.forEach(card => {
      const name = (card.dataset.name || '').toLowerCase();
      const cardCategory = card.dataset.category || '';
      const cardTherapy = card.dataset.therapy || '';

      const matchesSearch = !search || name.includes(search);
      const matchesCategory = !category || cardCategory === category;
      const matchesTherapy = !therapy || cardTherapy === therapy;

      if (matchesSearch && matchesCategory && matchesTherapy) {
        card.classList.remove('product-card--hidden');
        card.classList.add('product-card--visible');
        visibleCount++;
      } else {
        card.classList.remove('product-card--visible');
        card.classList.add('product-card--hidden');
      }
    });

    if (countEl) {
      countEl.textContent = visibleCount + ' product' + (visibleCount !== 1 ? 's' : '') + ' found';
    }

    if (emptyState) {
      if (visibleCount === 0) {
        grid.classList.add('product-grid--empty');
        emptyState.style.display = 'flex';
      } else {
        grid.classList.remove('product-grid--empty');
        emptyState.style.display = 'none';
      }
    }
  }

  if (searchInput) {
    searchInput.addEventListener('input', debounce(filterProducts, 200));
  }

  if (categorySelect) {
    categorySelect.addEventListener('change', filterProducts);
  }

  if (therapySelect) {
    therapySelect.addEventListener('change', filterProducts);
  }

  if (clearBtn) {
    clearBtn.addEventListener('click', () => {
      if (searchInput) searchInput.value = '';
      if (categorySelect) categorySelect.value = '';
      if (therapySelect) therapySelect.value = '';
      filterProducts();
    });
  }

  filterProducts();
}

/* ============================================
   ANIMATED COUNTERS
   ============================================ */
function initAnimatedCounters() {
  const counters = document.querySelectorAll('.stat__number[data-target]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
}

function animateCounter(el) {
  const target = el.dataset.target;
  const suffix = el.dataset.suffix || '';
  const prefix = el.dataset.prefix || '';
  const duration = 2000;
  const startTime = performance.now();

  function easeOutExpo(t) {
    return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
  }

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const easedProgress = easeOutExpo(progress);
    const current = Math.round(easedProgress * parseInt(target));

    el.textContent = prefix + current.toLocaleString() + suffix;

    if (progress < 1) {
      requestAnimationFrame(update);
    } else {
      el.textContent = prefix + parseInt(target).toLocaleString() + suffix;
      el.closest('.stat')?.classList.add('stat--animated');
    }
  }

  requestAnimationFrame(update);
}
function initAccordion() {
  document.querySelectorAll('.accordion__trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('.accordion__item');
      const content = item.querySelector('.accordion__content');
      const isActive = item.classList.contains('accordion__item--active');

      document.querySelectorAll('.accordion__item--active').forEach(openItem => {
        if (openItem !== item) {
          openItem.classList.remove('accordion__item--active');
          const openContent = openItem.querySelector('.accordion__content');
          if (openContent) openContent.style.maxHeight = '0';
        }
      });

      if (isActive) {
        item.classList.remove('accordion__item--active');
        content.style.maxHeight = '0';
      } else {
        item.classList.add('accordion__item--active');
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });
}

/* ============================================
   CONTACT FORM (DEMO ONLY - NO EMAIL)
   ============================================ */
function initContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;

  const successMessage = document.getElementById('formSuccess');

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    let isValid = true;
    const requiredFields = form.querySelectorAll('[required]');

    requiredFields.forEach(field => {
      const errorEl = field.parentElement.querySelector('.form-error');
      if (errorEl) errorEl.remove();
      field.style.borderColor = '';

      if (!field.value.trim()) {
        isValid = false;
        field.style.borderColor = 'var(--color-error)';
        const error = document.createElement('span');
        error.className = 'form-error';
        error.style.cssText = 'display:block;font-size:0.75rem;color:var(--color-error);margin-top:4px;';
        error.textContent = 'This field is required';
        field.parentElement.appendChild(error);
      }
    });

    const emailField = form.querySelector('input[type="email"]');
    if (emailField && emailField.value.trim()) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailField.value)) {
        isValid = false;
        emailField.style.borderColor = 'var(--color-error)';
        const error = document.createElement('span');
        error.className = 'form-error';
        error.style.cssText = 'display:block;font-size:0.75rem;color:var(--color-error);margin-top:4px;';
        error.textContent = 'Please enter a valid email address';
        emailField.parentElement.appendChild(error);
      }
    }

    if (isValid) {
      form.style.display = 'none';
      if (successMessage) {
        successMessage.style.display = 'block';
      }

      setTimeout(() => {
        form.reset();
        form.style.display = '';
        if (successMessage) successMessage.style.display = 'none';
      }, 5000);
    }
  });
}

/* ============================================
   NEWS MODAL (DEMO ONLY)
   ============================================ */
function initNewsModal() {
  const modal = document.getElementById('newsModal');
  if (!modal) return;

  const overlay = modal.querySelector('.news-modal__overlay');
  const closeBtn = modal.querySelector('.news-modal__close');
  const modalCategory = modal.querySelector('.news-modal__category');
  const modalTitle = modal.querySelector('.news-modal__title');
  const modalDate = modal.querySelector('.news-modal__date');
  const modalBody = modal.querySelector('.news-modal__body');

  function openModal(data) {
    if (modalCategory) modalCategory.textContent = data.category || '';
    if (modalTitle) modalTitle.textContent = data.title || '';
    if (modalDate) modalDate.textContent = data.date || '';
    if (modalBody) modalBody.innerHTML = data.content || '';
    modal.classList.add('news-modal--open');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.classList.remove('news-modal--open');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('[data-news-trigger]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal({
        category: btn.dataset.newsCategory || 'News',
        title: btn.dataset.newsTitle || 'Article Title',
        date: btn.dataset.newsDate || '',
        content: btn.dataset.newsContent || '<p>Article content goes here.</p>'
      });
    });
  });

  if (overlay) overlay.addEventListener('click', closeModal);
  if (closeBtn) closeBtn.addEventListener('click', closeModal);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('news-modal--open')) {
      closeModal();
    }
  });
}

/* ============================================
   ENQUIRY MODAL (DEMO ONLY - NO EMAIL)
   ============================================ */
function initEnquiryModal() {
  var btn = document.getElementById('enquiryBtn');
  var headerBtn = document.getElementById('headerEnquiryBtn');
  var modal = document.getElementById('enquiryModal');
  if (!modal) return;

  var overlay = modal.querySelector('.enquiry-modal__overlay');
  var closeBtn = modal.querySelector('.enquiry-modal__close');
  var form = document.getElementById('enquiryForm');
  var success = document.getElementById('enquirySuccess');

  function openModal() {
    modal.classList.add('enquiry-modal--open');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.classList.remove('enquiry-modal--open');
    document.body.style.overflow = '';
  }

  if (btn) btn.addEventListener('click', openModal);
  if (headerBtn) headerBtn.addEventListener('click', openModal);

  if (overlay) overlay.addEventListener('click', closeModal);
  if (closeBtn) closeBtn.addEventListener('click', closeModal);

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.classList.contains('enquiry-modal--open')) {
      closeModal();
    }
  });

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var isValid = true;
      var fields = form.querySelectorAll('[required]');
      fields.forEach(function(field) {
        if (!field.value.trim()) {
          isValid = false;
          field.style.borderColor = 'var(--color-error)';
        } else {
          field.style.borderColor = '';
        }
      });
      if (isValid) {
        form.style.display = 'none';
        if (success) success.style.display = 'block';
        setTimeout(function() {
          form.reset();
          form.style.display = '';
          if (success) success.style.display = 'none';
          closeModal();
        }, 4000);
      }
    });
  }
}

/* ============================================
   HERO SLIDER
   ============================================ */
function initHeroSlider() {
  const slider = document.getElementById('heroSlider');
  if (!slider) return;

  const slides = slider.querySelectorAll('.hero-slider__slide');
  let current = 0;

  function goToSlide(index) {
    slides[current].classList.remove('hero-slider__slide--active');
    current = index;
    slides[current].classList.add('hero-slider__slide--active');
  }

  function nextSlide() {
    goToSlide((current + 1) % slides.length);
  }

  setInterval(nextSlide, 4000);
}
function initOurProductsSlider() {
  const slider = document.querySelector('.our-products-slider');
  if (!slider) return;

  const track = slider.querySelector('.our-products-track');
  const prevBtn = slider.querySelector('.our-products-nav--prev');
  const nextBtn = slider.querySelector('.our-products-nav--next');
  if (!track || !prevBtn || !nextBtn) return;

  const scrollAmount = 280;

  prevBtn.addEventListener('click', () => {
    track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', () => {
    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });
}

/* ============================================
   CAREER STEPS SLIDER
   ============================================ */
function initCareerStepsSlider() {
  const stepsContainer = document.getElementById('careerSteps');
  if (!stepsContainer) return;

  const section = stepsContainer.closest('.career-process');
  if (!section) return;

  const prevBtn = section.querySelector('.career-process__nav-btn:first-child');
  const nextBtn = section.querySelector('.career-process__nav-btn:last-child');
  if (!prevBtn || !nextBtn) return;

  const card = stepsContainer.querySelector('.career-step-card');
  if (!card) return;

  function getScrollAmount() {
    return card.offsetWidth + 32;
  }

  prevBtn.addEventListener('click', () => {
    stepsContainer.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', () => {
    stepsContainer.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
  });
}
