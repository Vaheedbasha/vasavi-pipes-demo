/**
 * Vasavi Pipes Private Limited - Main JavaScript
 * Vanilla JS Implementation:
 * 1. Sticky Navigation & Glassmorphic Elevation
 * 2. Accessible Mobile Drawer
 * 3. Smooth Anchor Scrolling & Accessibility Focus
 * 4. Navigation Scrollspy
 * 5. Synchronized Product Category Filtering (Desktop Tabs + Mobile Native Select)
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
        initEnquiryModal();
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
     * 5. Synchronized Product Category Filtering (Desktop Tabs + Mobile Native Select)
     */
    function initProductFilters() {
        var filterBtns = document.querySelectorAll('.filter-tab-btn');
        var mobileSelect = document.getElementById('mobileProductFilter');
        var productCards = document.querySelectorAll('#productsGrid .product-card');

        if (!productCards.length) return;

        var currentFilter = 'all';

        function applyFilter(targetGroup) {
            currentFilter = targetGroup;

            // 1. Synchronize Desktop Tab Buttons
            if (filterBtns.length) {
                filterBtns.forEach(function (btn) {
                    var btnFilter = btn.getAttribute('data-filter');
                    if (btnFilter === targetGroup) {
                        btn.classList.add('active');
                        btn.setAttribute('aria-selected', 'true');
                    } else {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-selected', 'false');
                    }
                });
            }

            // 2. Synchronize Mobile Select Dropdown
            if (mobileSelect && mobileSelect.value !== targetGroup) {
                mobileSelect.value = targetGroup;
            }

            // 3. Smooth Card Filtering
            productCards.forEach(function (card) {
                var cardCategory = card.getAttribute('data-category');

                if (targetGroup === 'all' || cardCategory === targetGroup) {
                    card.style.display = 'flex';
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
        }

        // Desktop Button Click Handler
        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetGroup = btn.getAttribute('data-filter');
                applyFilter(targetGroup);
            });
        });

        // Mobile Select Change Handler
        if (mobileSelect) {
            mobileSelect.addEventListener('change', function (e) {
                applyFilter(e.target.value);
            });
        }
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

    /**
     * 9. Frontend Direct Factory RFQ & Enquiry Modal
     */
    function initEnquiryModal() {
        var modal = document.getElementById('enquiryModal');
        var backdrop = document.getElementById('enquiryModalBackdrop');
        var formView = document.getElementById('modalFormView');
        var successView = document.getElementById('modalSuccessView');
        var closeBtn = document.getElementById('modalCloseBtn');
        var successCloseBtn = document.getElementById('modalSuccessCloseBtn');
        var resetBtn = document.getElementById('modalResetBtn');
        var form = document.getElementById('enquiryForm');
        var productSelect = document.getElementById('enquiryProduct');
        var nameInput = document.getElementById('enquiryName');
        var phoneInput = document.getElementById('enquiryPhone');
        var locationInput = document.getElementById('enquiryLocation');
        var requirementInput = document.getElementById('enquiryRequirement');
        var whatsappBtn = document.getElementById('modalWhatsappBtn');

        if (!modal || !backdrop || !form) return;

        function openModal(prefillProduct) {
            // Close mobile menu if open
            var drawer = document.getElementById('mobileNavDrawer');
            var menuToggle = document.getElementById('mobileNavToggle');
            var navBackdrop = document.getElementById('mobileNavBackdrop');
            if (drawer && drawer.classList.contains('is-open')) {
                drawer.classList.remove('is-open');
                drawer.setAttribute('aria-hidden', 'true');
                if (menuToggle) {
                    menuToggle.classList.remove('is-active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
                if (navBackdrop) {
                    navBackdrop.classList.remove('is-visible');
                    navBackdrop.setAttribute('aria-hidden', 'true');
                }
            }

            // Pre-select product in dropdown
            if (prefillProduct && productSelect) {
                var found = false;
                for (var i = 0; i < productSelect.options.length; i++) {
                    var optText = productSelect.options[i].text.toLowerCase();
                    var optVal = productSelect.options[i].value.toLowerCase();
                    var target = prefillProduct.toLowerCase();
                    if (optText.indexOf(target) !== -1 || optVal.indexOf(target) !== -1 || target.indexOf(optVal) !== -1) {
                        productSelect.selectedIndex = i;
                        found = true;
                        break;
                    }
                }
                if (!found && prefillProduct.toLowerCase().indexOf('dealership') !== -1) {
                    productSelect.value = 'Dealership & Wholesale Supply';
                }
            }

            // Ensure form view is visible
            if (formView) formView.style.display = 'block';
            if (successView) successView.style.display = 'none';

            // Show modal and backdrop
            modal.classList.add('is-active');
            modal.setAttribute('aria-hidden', 'false');
            backdrop.classList.add('is-active');
            backdrop.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';

            // Focus on first input
            setTimeout(function () {
                if (nameInput) nameInput.focus();
            }, 100);
        }

        function closeModal() {
            modal.classList.remove('is-active');
            modal.setAttribute('aria-hidden', 'true');
            backdrop.classList.remove('is-active');
            backdrop.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            clearErrors();
        }

        function clearErrors() {
            var errorGroups = form.querySelectorAll('.form-group.has-error');
            errorGroups.forEach(function (grp) {
                grp.classList.remove('has-error');
            });
        }

        function validateForm() {
            clearErrors();
            var isValid = true;

            var nameVal = nameInput ? nameInput.value.trim() : '';
            if (!nameVal || nameVal.length < 2) {
                if (nameInput && nameInput.closest('.form-group')) {
                    nameInput.closest('.form-group').classList.add('has-error');
                }
                isValid = false;
            }

            var phoneVal = phoneInput ? phoneInput.value.trim().replace(/[\s\-\(\)\+]/g, '') : '';
            if (!phoneVal || phoneVal.length < 10) {
                if (phoneInput && phoneInput.closest('.form-group')) {
                    phoneInput.closest('.form-group').classList.add('has-error');
                }
                isValid = false;
            }

            return isValid;
        }

        // Form Submit Handler (Frontend Simulated Logging)
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!validateForm()) return;

            var name = nameInput.value.trim();
            var phone = phoneInput.value.trim();
            var product = productSelect.options[productSelect.selectedIndex].text;
            var refId = 'VAS-' + new Date().getFullYear() + '-' + Math.floor(1000 + Math.random() * 9000);

            // Populate success details
            var nameSpan = document.getElementById('successCustomerName');
            var prodSpan = document.getElementById('successProductName');
            var phoneSpan = document.getElementById('successCustomerPhone');
            var refSpan = document.getElementById('successRefId');

            if (nameSpan) nameSpan.textContent = name;
            if (prodSpan) prodSpan.textContent = product;
            if (phoneSpan) phoneSpan.textContent = phone;
            if (refSpan) refSpan.textContent = refId;

            // Switch to success view
            if (formView) formView.style.display = 'none';
            if (successView) successView.style.display = 'block';
        });

        // WhatsApp Direct Quick RFQ
        if (whatsappBtn) {
            whatsappBtn.addEventListener('click', function (e) {
                e.preventDefault();

                var name = nameInput ? nameInput.value.trim() : '';
                var phone = phoneInput ? phoneInput.value.trim() : '';
                var product = productSelect ? productSelect.options[productSelect.selectedIndex].text : 'Vasavi Piping Systems';
                var location = locationInput ? locationInput.value.trim() : '';
                var requirement = requirementInput ? requirementInput.value.trim() : '';

                var message = 'Hi Vasavi Pipes, I would like to enquire about:\n' +
                    '*Product:* ' + product;

                if (name) message += '\n*Name / Firm:* ' + name;
                if (phone) message += '\n*Contact:* ' + phone;
                if (location) message += '\n*Location:* ' + location;
                if (requirement) message += '\n*Requirement Details:* ' + requirement;

                var waUrl = 'https://wa.me/919948312666?text=' + encodeURIComponent(message);
                window.open(waUrl, '_blank', 'noopener,noreferrer');

                // Close the modal directly without triggering the submitted confirmation screen
                closeModal();
            });
        }

        // Reset and submit another
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                form.reset();
                clearErrors();
                if (formView) formView.style.display = 'block';
                if (successView) successView.style.display = 'none';
                if (nameInput) nameInput.focus();
            });
        }

        // Close triggers
        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (successCloseBtn) successCloseBtn.addEventListener('click', closeModal);
        if (backdrop) backdrop.addEventListener('click', closeModal);

        // ESC key to close
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('is-active')) {
                closeModal();
            }
        });

        // Attach to all trigger buttons
        var triggers = document.querySelectorAll('[data-open-modal="enquiryModal"], .btn-product-enquire');
        triggers.forEach(function (trigger) {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                var prodName = trigger.getAttribute('data-product') || '';
                openModal(prodName);
            });
        });
    }

})();
