<div class="vc_row-full-width vc_clearfix"></div>
                        
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="footer-sidebar-wrapper footer-sidebar-style-dark" data-style="">
                <div class="footer-sidebar sidebar container footer-sidebar-col-4">
                    <ul id="footer-sidebar" class="clearfix">
                        <li id="text-3" class="widget widget_text">
                            <h2 class="widgettitle">{{ __('footer.contact') }}</h2>
                            <div class="textwidget">
                                <p>{{ __('footer.contant1') }}</p>
                                <p>{{ __('footer.contant2') }}</p>
                                <p>{{ __('footer.contant3') }}</p>
                                <p>{{ __('footer.contant4') }}</p>
                                
                            </div>
                        </li>
                        <li id="text-3" class="widget widget_text">
                            <h2 class="widgettitle">{{ __('footer.address') }}</h2>
                            <div class="textwidget">
                                <p>{{ __('footer.address1') }}</p>
                                <p>{{ __('footer.address2') }}</p>
                            </div>
                        </li>
                        <li id="nav_menu-2" class="widget widget_nav_menu">
                            <h2 class="widgettitle">{{ __('index.about us') }}</h2>
                            <div class="menu-footermenu-1-container">
                                <ul id="menu-footermenu-1" class="menu">
                                    <li class="menu-item"><a href="http://127.0.0.1:8000/">{{ __('index.home') }}</a></li>
                                    <li class="menu-item"><a href="http://127.0.0.1:8000/about-us">{{ __('index.about') }}</a></li>
                                    <li class="menu-item"><a href="http://127.0.0.1:8000/offer">{{ __('index.offer') }}</a></li>
                                    <li class="menu-item"><a href="http://127.0.0.1:8000/team">{{ __('index.team') }}</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="widget_barrel_social_icons shortcode_barrel_social_icons">
                                    <div class="social-icons-wrapper">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/sarayi.restaurant" target="_blank" class="a-facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/sarayi.eg/" target="_blank" class="a-twitter"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://mobile.twitter.com/sarayturki" target="_blank" class="a-twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <footer class="footer-style-dark footer-col-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">{{ __('footer.footer') }}</a></div>
                        
                    </div>
                </div>
                <a class="scroll-to-top bg-light" href="#top"><img src="upload/Saraylogo.png"></a>
            </footer>
        </div>
    </div>



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('js/plugins/responsive-lightbox/assets/nivo/nivo-lightbox.min.js')}}"></script>
    <script>
        /* <![CDATA[ */
        var rlArgs = {
            script: "nivo",
            selector: "lightbox",
            customEvents: "",
            activeGalleries: "1",
            effect: "fade",
            clickOverlayToClose: "1",
            keyboardNav: "1",
            errorMessage: "The requested content cannot be loaded. Please try again later.",
        };
        /* ]]> */
    </script>
    <script src="{{asset('js/plugins/responsive-lightbox/js/frontd.js')}}"></script>
    <script src="{{asset('js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>    
    <script src="{{asset('js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js')}}"></script>

    <script>
        (function ($) {
            $(document).ready(function () {
                $("body").addClass("transparent-header");
            });
        })(jQuery);
    </script>

    <script src="{{asset('js/plugins/js-skin.js')}}"></script>
    <script>
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (
                    (e.responsiveLevels &&
                        (jQuery.each(e.responsiveLevels, function (e, f) {
                            f > i && ((t = r = f), (l = e)), i > f && f > r && ((r = f), (n = e));
                        }),
                        t > r && (l = n)),
                    (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
                    (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
                    (h = i / s),
                    (h = h > 1 ? 1 : h),
                    (f = Math.round(h * f)),
                    "fullscreen" == e.sliderLayout)
                ) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c)
                            jQuery.each(c, function (e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
                            }),
                                e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0
                                    ? (u -= (jQuery(window).height() * parseInt(e.fullScreenOffset, 0)) / 100)
                                    : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0));
                    }
                    f = u;
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({ height: f });
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d);
            }
        }
    </script>

    <script>
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>

    <script>
        /* <![CDATA[ */
        var thickboxL10n = {
            next: "Next >",
            prev: "< Prev",
            image: "Image",
            of: "of",
            close: "Close",
            noiframes: "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
            loadingAnimation: "http:\/\/wp.magnium-themes.com\/barrel\/barrel-1\/wp-includes\/js\/thickbox\/loadingAnimation.gif",
        };
        /* ]]> */
    </script>
    <script src="{{asset('js/plugins/thickbox/thickbox.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/easing.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/plugins/TweenMax.min.js')}}"></script>
    <script src="{{asset('js/plugins/template.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/js/dist/js_composer_front.min.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.appear.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min.js')}}"></script>
    <script src="{{asset('js/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min.js')}}"></script>
    <script src="{{asset('js/plugins/slick.min.js')}}"></script>



    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        setREVStartSize({
            c: jQuery("#rev_slider_2_1"),
            responsiveLevels: [1240, 1240, 1240, 480],
            gridwidth: [1240, 1240, 1240, 480],
            gridheight: [868, 868, 868, 720],
            sliderLayout: "fullscreen",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
        });

        var revapi2,
            tpj = jQuery;

        tpj(document).ready(function () {
            if (tpj("#rev_slider_2_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            } else {
                revapi2 = tpj("#rev_slider_2_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/plugins/revslider/public/assets/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false,
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 750,
                                style: "uranus",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 50,
                                v_offset: 50,
                                space: 10,
                                tmp: '<span class="tp-bullet-inner"></span>',
                            },
                        },
                        responsiveLevels: [1240, 1240, 1240, 480],
                        visibilityLevels: [1240, 1240, 1240, 480],
                        gridwidth: [1240, 1240, 1240, 480],
                        gridheight: [868, 868, 868, 720],
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner0",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "on",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = unescape(
            "%23rev_slider_2_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_2_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_2_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_2_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_2_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_2_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A"
        );
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        (function ($) {
            $(document).ready(function () {
                function initPortfolioCarousel() {
                    $("#portfolio-list-76440791").owlCarousel({
                        items: 1,
                        slideSpeed: 200,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [979, 1],
                        itemsTablet: [768, 1],
                        itemsMobile: [479, 1],
                        autoPlay: true,
                        navigation: true,
                        navigationText: false,
                        pagination: false,
                        afterInit: function (elem) {
                            $(this).css("display", "block");
                        },
                    });
                }

                setTimeout(initPortfolioCarousel, 1000);
            });
        })(jQuery);
    </script>




</body>
</html>
