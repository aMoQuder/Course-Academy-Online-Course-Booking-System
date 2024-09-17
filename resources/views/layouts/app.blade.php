<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="Kian">
    <meta name="keywords" content="Kian" />
    <meta name="author" content="Kian" />
    <meta name="robots" content="Kian" />

    <!-- DESCRIPTION -->
    <meta name="description" content="Kian" />

    <!-- OG -->
    <meta property="og:title" content="Kian" />
    <meta property="og:description" content="Kian" />
    <meta property="og:image" content="Kian" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href={{ asset('img/11.2.jpg') }} type={{ asset('img/11.2.jpg') }} />
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('img/11.2.jpg') }} />
    <title>Kian academy</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.min.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/assets.css") }}>

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/typography.css") }}>

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/shortcodes/shortcodes.css") }}>

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/style.css") }}>
    <link class="skin" rel="stylesheet" type="text/css" href={{ asset("assets/css/color/color-1.css") }}>

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendors/revolution/css/layers.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendors/revolution/css/settings.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendors/revolution/css/navigation.css") }}>
    <!-- REVOLUTION SLIDER END -->
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>





    <!-- External JavaScripts -->
    <script src={{ asset("assets/js/jquery.min.js") }}></script>
    <script src={{ asset("assets/vendors/bootstrap/js/popper.min.js") }}></script>
    <script src={{ asset("assets/vendors/bootstrap/js/bootstrap.min.js") }}></script>
    <script src={{ asset("assets/vendors/bootstrap-select/bootstrap-select.min.js") }}></script>
    <script src={{ asset("assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js") }}></script>
    <script src={{ asset("assets/vendors/magnific-popup/magnific-popup.js") }}></script>
    <script src={{ asset("assets/vendors/counter/waypoints-min.js") }}></script>
    <script src={{ asset("assets/vendors/counter/counterup.min.js") }}></script>
    <script src={{ asset("assets/vendors/imagesloaded/imagesloaded.js") }}></script>
    <script src={{ asset("assets/vendors/masonry/masonry.js") }}></script>
    <script src={{ asset("assets/vendors/masonry/filter.js") }}></script>
    <script src={{ asset("assets/vendors/owl-carousel/owl.carousel.js") }}></script>
    <script src={{ asset("assets/js/functions.js") }}></script>
    <script src={{ asset("assets/js/contact.js") }}></script>
    <script src={{ asset("assets/js/fuse.min.js") }}></script>
    <script src={{ asset('assets/vendors/switcher/switcher.js') }}></script>
    <!-- Revolution JavaScripts Files -->
    <script src={{ asset("assets/vendors/revolution/js/jquery.themepunch.tools.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/jquery.themepunch.revolution.min.js") }}></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js") }}></script>
    <script src={{ asset("assets/vendors/revolution/js/extensions/revolution.extension.video.min.js") }}></script>

  <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/vendors/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
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
            }
        });
    </script>

        <script>
            function openFullscreen() {
                var cardVideo = document.getElementById('cardVideo');
                var fullscreenVideo = document.getElementById('fullscreenVideo');
                var fullscreenVideoElement = document.getElementById('fullscreenVideoElement');

                fullscreenVideo.style.display = 'flex';
                if (fullscreenVideoElement.src !== cardVideo.querySelector('source').src) {
                    fullscreenVideoElement.src = cardVideo.querySelector('source').src;
                }
                fullscreenVideoElement.play();
            }

            function closeFullscreen() {
                var fullscreenVideo = document.getElementById('fullscreenVideo');
                var fullscreenVideoElement = document.getElementById('fullscreenVideoElement');

                fullscreenVideoElement.pause();
                fullscreenVideoElement.currentTime = 0; // Reset the video to the beginning
                fullscreenVideo.style.display = 'none';
            }
        </script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const searchForm = document.getElementById('searchForm');
        const searchQuery = document.getElementById('searchQuery');
        const resultsDiv = document.getElementById('results');

        fetch('/course')
            .then(response => response.json())
            .then(data => {
                const fuse = new Fuse(data, {
                    keys: ['name'],
                    threshold: 0.3
                });

                searchQuery.addEventListener('input', () => {
                    const query = searchQuery.value;
                    const results = fuse.search(query);

                    resultsDiv.innerHTML = '';
                    if (results.length > 0) {
                        results.forEach(result => {
                            resultsDiv.innerHTML += <div>${result.item.name}</div>;
                        });
                    } else {
                        resultsDiv.innerHTML = '<p>No courses found</p>';
                    }
                });
            })
            .catch(error => console.error('Error fetching courses:', error));
    });
</script>
</body>

</html>
