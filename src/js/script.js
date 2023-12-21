
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    // ヘッダー背景色変更
    $(function () {
        const headerHeight = $(".js-header").height();
        $('a[href^="#"]').click(function () {
            const speed = 600;
            let href = $(this).attr("href");
            let target = $(href == "#" || href == "" ? "html" : href);
            // ヘッダーの高さ分下げる
            let position = target.offset().top - headerHeight;
            $("body,html").animate({ scrollTop: position }, speed, "swing");
            return false;
        });
    });

    jQuery(window).on('scroll', function () {
        if (jQuery('.js-mv').height() < jQuery(this).scrollTop()) {
            jQuery('.js-header').addClass('transform');
        } else {
            jQuery('.js-header').removeClass('transform');
        }
    });


    // ハンバーガーメニュー
    $(".js-hamburger").on("click", function () {
        $(this).toggleClass("is-open");
        if ($(this).hasClass("is-open")) {
            openDrawer();
        } else {
            closeDrawer();
        }
    });

    // backgroundまたはページ内リンクをクリックで閉じる
    $(".js-drawer a[href]").on("click", function () {
        closeDrawer();
    });

    // resizeイベント
    $(window).on('resize', function () {
        if (window.matchMedia("(min-width: 768px)").matches) {
            closeDrawer();
        }
    });

    function openDrawer() {
        $(".js-drawer").fadeIn();
        $(".js-hamburger").addClass("is-open");
    }

    function closeDrawer() {
        $(".js-drawer").fadeOut();
        $(".js-hamburger").removeClass("is-open");
    }

    // MVスライダー
    const mv_swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 2000,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // キャンペーンスライダー
    new Swiper('.js-top-campaign-swiper', {
        loop: true,
        loopedSlides: 4,
        speed: 500,
        spaceBetween: 24,
        width: 280,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            waitForTransition: false,
        },
        navigation: {
            prevEl: '.swiper-button-next',
            nextEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                spaceBetween: 40,
                width: 333,
            },
        },
    });

    // 画像の色スライド
    $('.js-color-box').each(function () {
        $(this).append('<div class="color"></div>');
        const color = $(this).find($('.color'));
        const image = $(this).find('img');
        let speed = 700;
        let counter = 0;

        image.css('opacity', '0');
        color.css('width', '0%');

        color.on('inview', function () {
            if (counter == 0) {
                $(this).delay(200).animate({
                    'width': '100%'
                },
                    speed,
                    function () {
                        image.css('opacity', '1');
                        $(this).css({
                            'left': '0',
                            'right': 'auto'
                        });
                        $(this).animate({
                            'width': '0%'
                        },
                            speed
                        );
                    });
                counter = 1;
            }
        });
    });

    // トップに戻るボタン
    $(document).ready(function () {
        $(".js-top-button").hide();
        $(window).on("scroll", function () {
            let scrollPositionFromTop = $(window).scrollTop();
            let windowHeight = $(window).height();
            let footerTop = $(".js-footer").offset().top;
            let triggerOffset = 200;

            // ボタンの表示・非表示
            if (scrollPositionFromTop > triggerOffset && scrollPositionFromTop + windowHeight < footerTop) {
                $(".js-top-button").fadeIn();
            } else {
                $(".js-top-button").fadeOut();
            }
        });
        // ボタンクリックでトップに戻る
        $(".js-top-button").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
    });
});