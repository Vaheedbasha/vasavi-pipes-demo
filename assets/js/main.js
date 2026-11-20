/**
 * Vasavi Plast Industries - Main JavaScript
 * Vanilla JS Implementation:
 * 1. Sticky Navigation & Glassmorphic Elevation
 * 2. Accessible Mobile Drawer
 * 3. Smooth Anchor Scrolling & Accessibility Focus
 * 4. Navigation Scrollspy
 * 5. Interactive Product Category Tabs Filtering
 * 6. IntersectionObserver Scroll Reveal Animations
 * 7. Back-to-Top Button Handler
 * 8. Floating WhatsApp Button Visibility Trigger
 */

(function () {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', initApp);

    function initApp() {
        initStickyHeader();
        initMobileMenu();
        initSmoothScroll();
        initScrollspy();
        initProductFilters();
        initScrollReveal();
        initBackToTop();
        initFloatingWhatsapp();
    }

    /**
     * 1. Sticky Header Elevation on Scroll
     */
    function initStickyHeader() {
        var header = document.getElementById('siteHeader');
        if (!header) return;

        function updateHeaderState() {
            var scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY > 20) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        }

        window.addEventListener('scroll', updateHeaderState, { passive: true });
        updateHeaderState();
    }

    /**
     * 2. Accessible Mobile Navigation Drawer
     */
    function initMobileMenu() {
        var toggle = document.getElementById('mobileNavToggle');
        var drawer = document.getElementById('mobileNavDrawer');
        var backdrop = document.getElementById('mobileNavBackdrop');

        if (!toggle || !drawer || !backdrop) return;

        function openMenu() {
            toggle.classList.add('is-active');
            toggle.setAttribute('aria-expanded', 'true');
            drawer.classList.add('is-open');
            drawer.setAttribute('aria-hidden', 'false');
            backdrop.classList.add('is-visible');
            backdrop.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            toggle.classList.remove('is-active');
            toggle.setAttribute('aria-expanded', 'false');
            drawer.classList.remove('is-open');
            drawer.setAttribute('aria-hidden', 'true');
            backdrop.classList.remove('is-visible');
            backdrop.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            var isOpen = drawer.classList.contains('is-open');
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        backdrop.addEventListener('click', closeMenu);

        var closeBtn = document.getElementById('mobileDrawerClose');
        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        // Close on ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
                closeMenu();
                toggle.focus();
            }
        });

        // Close drawer when any mobile nav link or CTA is clicked
        var mobileLinks = drawer.querySelectorAll('a[href^="#"]');
        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                closeMenu();
            });
        });
    }

    /**
     * 3. Accessible Offset Smooth Scrolling for Anchor Links
     */
    function initSmoothScroll() {
        var anchorLinks = document.querySelectorAll('a[href^="#"]');
        var header = document.getElementById('siteHeader');

        anchorLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                var targetId = link.getAttribute('href');
                if (!targetId || targetId === '#' || targetId === '#!') return;

                var targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();

                    var headerOffset = header ? header.offsetHeight : 0;
                    var elementPosition = targetElement.getBoundingClientRect().top;
                    var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: Math.max(0, offsetPosition),
                        behavior: 'smooth'
                    });

                    // Update URL hash without jump
                    if (history.pushState) {
                        history.pushState(null, null, targetId);
                    }

                    // Accessibility focus management
                    targetElement.setAttribute('tabindex', '-1');
                    targetElement.focus({ preventScroll: true });
                }
            });
        });
    }

    /**
     * 4. Navigation Scrollspy
     */
    function initScrollspy() {
        var sections = document.querySelectorAll('section[id], header[id]');
        var navLinks = document.querySelectorAll('.desktop-nav-wrapper .nav-link');
        var header = document.getElementById('siteHeader');

        if (!sections.length || !navLinks.length) return;

        function checkActiveSection() {
            var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            var headerHeight = header ? header.offsetHeight : 70;
            var activeId = '';

            sections.forEach(function (section) {
                var sectionTop = section.offsetTop - headerHeight - 120;
                var sectionHeight = section.offsetHeight;
                var sectionId = section.getAttribute('id');

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    activeId = sectionId;
                }
            });

            // If at the very bottom of the page, activate contact
            if ((window.innerHeight + scrollPosition) >= document.documentElement.scrollHeight - 60) {
                activeId = 'contact';
            }

            navLinks.forEach(function (link) {
                var href = link.getAttribute('href');
                if (href === '#' + activeId) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', checkActiveSection, { passive: true });
        checkActiveSection();
    }

    /**
     * 5. Interactive Product Category Tabs Filtering
     */
    function initProductFilters() {
        var filterBtns = document.querySelectorAll('.filter-tab-btn');
        var productCards = document.querySelectorAll('#productsGrid .product-card');

        if (!filterBtns.length || !productCards.length) return;

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetGroup = btn.getAttribute('data-filter');

                // Update active tab button
                filterBtns.forEach(function (b) {
                    b.classList.remove('active');
                    b.setAttribute('aria-selected', 'false');
                });
                btn.classList.add('active');
                btn.setAttribute('aria-selected', 'true');

                // Filter cards with smooth entrance
                productCards.forEach(function (card) {
                    var cardCategory = card.getAttribute('data-category');

                    if (targetGroup === 'all' || cardCategory === targetGroup) {
                        card.style.display = 'flex';
                        // Re-trigger animation
                        requestAnimationFrame(function () {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        });
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.96)';
                        setTimeout(function () {
                            if (card.style.opacity === '0') {
                                card.style.display = 'none';
                            }
                        }, 250);
                    }
                });
            });
        });
    }

    /**
     * 6. Scroll Reveal Animations (IntersectionObserver)
     */
    function initScrollReveal() {
        var revealElements = document.querySelectorAll('.reveal-on-scroll');
        if (!revealElements.length) return;

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                rootMargin: '0px 0px -40px 0px',
                threshold: 0.1
            });

            revealElements.forEach(function (el) {
                observer.observe(el);
            });
        } else {
            // Fallback for older browsers
            revealElements.forEach(function (el) {
                el.classList.add('is-revealed');
            });
        }
    }

    /**
     * 7. Back-to-Top Button Handler
     */
    function initBackToTop() {
        var btt = document.getElementById('backToTop');
        if (!btt) return;

        btt.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * 8. Floating WhatsApp Button Visibility Trigger
     */
    function initFloatingWhatsapp() {
        var floatBtn = document.getElementById('floatingWhatsappBtn');
        if (!floatBtn) return;

        function checkVisibility() {
            var scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY > 300) {
                floatBtn.classList.add('is-visible');
            } else {
                floatBtn.classList.remove('is-visible');
            }
        }

        window.addEventListener('scroll', checkVisibility, { passive: true });
        checkVisibility();
    }

})();
