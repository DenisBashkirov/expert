$(document).ready(function () {

    AOS.init();


    let breakpoints = {
        xs: 0,
        sm: 375,
        md: 768,
        lg: 1020,
        xl: 1200
    };

    let mobile_xs = window.matchMedia('(max-width: ' + (breakpoints.sm - 1) + 'px)').matches;
    let mobile_sm = window.matchMedia('(min-width: ' + (breakpoints.sm) + 'px) and (max-width: ' + (breakpoints.md - 1) + 'px)').matches;
    let tablet_md = window.matchMedia('(min-width: ' + (breakpoints.md) + 'px) and (max-width: ' + (breakpoints.lg - 1) + 'px)').matches;
    let tablet_lg = window.matchMedia('(min-width: ' + (breakpoints.lg) + 'px) and (max-width: ' + (breakpoints.xl - 1) + 'px)').matches;
    let desktop = window.matchMedia('(min-width: ' + (breakpoints.xl) + 'px)').matches;



    let $hamburger = $('.js-hamburger');
    let $mobileMenu = $('.js-mobile_nav');
    $hamburger.on('click', function () {
        $hamburger.toggleClass('is-active');
        $mobileMenu.fadeToggle();
    });

    if(desktop) {
        let parallaxEl = document.querySelector('.js-parallax-object');
        if(parallaxEl !== null) {
            window.addEventListener('mousemove', function(e) {
                let x = e.clientX / window.innerWidth;
                let y = e.clientY / window.innerHeight;
                parallaxEl.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
            });
        }
    }

    let expertsSwiper = new Swiper('.experts-swiper', {
        spaceBetween: 30,
        watchOverflow: true,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        navigation: {
            nextEl: '.certificates-swiper-navigation .swiper-button_next',
            prevEl: '.certificates-swiper-navigation .swiper-button_prev',
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 'auto',
                centeredSlides: true,
                centeredSlidesBounds: true,
                //loopedSlides: true,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 'auto',
                centeredSlides: false,
                //watchOverflow: false
            },
            // when window width is >= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0
            }
        }
    });


    if(mobile_xs || mobile_sm) {
        let clientsSwiper = new Swiper('.clients-swiper', {
            spaceBetween: 30,
            watchOverflow: true,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            navigation: {
                nextEl: '.certificates-swiper-navigation .swiper-button_next',
                prevEl: '.certificates-swiper-navigation .swiper-button_prev',
            },

            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    centeredSlidesBounds: true,
                    loop: true,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 'auto',
                    centeredSlides: false,
                    //watchOverflow: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    slidesOffsetBefore: 0,
                    slidesOffsetAfter: 0
                }
            }
        });
    }

    if(desktop) {

        let $dropdownButtons = $('.js-dropdown-toggle');
        $dropdownButtons.on('click', function () {
            let $next = $(this).next();
            $next.slideToggle();
        });

        $('.js-nav-dropdown-show').on('mouseenter', function () {
            let $dropdown = $(this).find('.nav__dropdown');
            $dropdown.slideDown('200');
        });

        $('.js-nav-dropdown-show').on('mouseleave', function () {
            let $dropdown = $(this).find('.nav__dropdown');
            $dropdown.slideUp('200');
        });
        
    }



});
