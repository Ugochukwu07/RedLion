<!--=================================
 jquery -->

    <!-- jquery -->
    <script src="<?php echo BASE_URL;?>/assets/open/js/jquery-3.4.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="<?php echo BASE_URL;?>/assets/open/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = '<?php echo BASE_URL;?>/assets/open/js/';
    </script>

    <!-- Google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Raindrops JS -->
    <script src="<?php echo BASE_URL;?>/assets/open/js/raindrops/raindrops.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/revolution.addon.slicey.min.js"></script>

    <!-- revolution custom -->
    <script src="<?php echo BASE_URL;?>/assets/open/revolution/js/revolution-custom.js"></script>

    <!-- custom -->
    <script src="<?php echo BASE_URL;?>/assets/open/js/custom.js"></script>

    <script type="text/javascript">
        var revapi16,
            tpj = jQuery;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_16_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_16_1");
            } else {
                revapi16 = tpj("#rev_slider_16_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
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
                            drag_block_vertical: false
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 960,
                            style: "zeus",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 80,
                            v_offset: 50,
                            space: 5,
                            tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>'
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1920, 1024, 778, 480],
                    gridheight: [900, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        speedbg: 0,
                        speedls: 0,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
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
                    }
                });
                var newCall = new Object(),
                    cslide;

                newCall.callback = function() {
                    var proc = revapi16.revgetparallaxproc(),
                        fade = 1 + proc,
                        scale = 1 + (Math.abs(proc) / 10);

                    punchgs.TweenLite.set(revapi16.find('.slotholder, .rs-background-video-layer'), {
                        opacity: fade,
                        scale: scale
                    });
                }
                newCall.inmodule = "parallax";
                newCall.atposition = "start";

                revapi16.bind("revolution.slide.onloaded", function(e) {
                    revapi16.revaddcallback(newCall);
                });
            }
        }); /*ready*/
    </script>
