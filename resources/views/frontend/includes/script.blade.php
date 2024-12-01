<script type='text/javascript'>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<link rel='stylesheet' id='jeg-dynamic-style-css'
    href='{{ url('/assets/') }}/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles6f3e.css?ver=1.3.0'
    media='all' />
<link rel='stylesheet' id='xltab1-css'
    href='{{ url('/assets/') }}/wp-content/plugins/xl-tab/widgets/tab1/style9704.css?ver=6.7.1'
    media='all' />
<link rel='stylesheet' id='xlvtab1-css'
    href='{{ url('/assets/') }}/wp-content/plugins/xl-tab/widgets/tab-vertical/style9704.css?ver=6.7.1'
    media='all' />
<link rel='stylesheet' id='xlacrdn1-css'
    href='{{ url('/assets/') }}/wp-content/plugins/xl-tab/widgets/accordion/style9704.css?ver=6.7.1'
    media='all' />
<link rel='stylesheet' id='widget-image-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-image.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-icon-box-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-icon-box.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-image-box-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-image-box.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-heading-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-heading.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-spacer-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-spacer.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-counter-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-counter.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-divider-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-divider.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-text-editor-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-text-editor.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='elementor-post-1247-css'
    href='{{ url('/assets/') }}/wp-content/uploads/elementor/css/post-1247f939.css?ver=1719916606'
    media='all' />
<link rel='stylesheet' id='elementor-post-1256-css'
    href='{{ url('/assets/') }}/wp-content/uploads/elementor/css/post-1256f939.css?ver=1719916606'
    media='all' />
<link rel='stylesheet' id='widget-social-icons-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-social-icons.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='e-apple-webkit-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='widget-icon-list-css'
    href='{{ url('/assets/') }}/wp-content/plugins/elementor/assets/css/widget-icon-list.min5422.css?ver=3.25.9'
    media='all' />
<link rel='stylesheet' id='elementor-post-1959-css'
    href='{{ url('/assets/') }}/wp-content/uploads/elementor/css/post-19593bbc.css?ver=1719889950'
    media='all' />
<link rel='stylesheet' id='metform-ui-css'
    href='{{ url('/assets/') }}/wp-content/plugins/metform/public/assets/css/metform-ui6f61.css?ver=3.8.9'
    media='all' />
<link rel='stylesheet' id='metform-style-css'
    href='{{ url('/assets/') }}/wp-content/plugins/metform/public/assets/css/style6f61.css?ver=3.8.9'
    media='all' />
<script src="{{ url('/assets/') }}/wp-content/plugins/xl-tab/assets/js/xltab-lib9704.js?ver=6.7.1" id="xltablib-js">
</script>
<script src="{{ url('/assets/') }}/wp-content/plugins/xl-tab/assets/js/xltab9704.js?ver=6.7.1" id="xltab-js"></script>
<script src="{{ url('/assets/') }}/wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alert6f61.js?ver=3.8.9"
    id="cute-alert-js"></script>
<script src="{{ url('/assets/') }}/wp-content/themes/hello-elementor/assets/js/hello-frontend.min324d.js?ver=3.1.0"
    id="hello-theme-frontend-js"></script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-scriptd617.js?ver=3.3.2"
    id="elementskit-framework-js-frontend-js"></script>
<script id="elementskit-framework-js-frontend-js-after">
    var elementskit = {
        resturl: 'https://golink.1onestrong.com/wp-json/elementskit/v1/',
    }
</script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scriptsd617.js?ver=3.3.2"
    id="ekit-widget-scripts-js"></script>
<script src="{{ url('/assets/') }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min5422.js?ver=3.25.9"
    id="elementor-webpack-runtime-js"></script>
<script src="{{ url('/assets/') }}/wp-content/plugins/elementor/assets/js/frontend-modules.min5422.js?ver=3.25.9"
    id="elementor-frontend-modules-js"></script>
<script src="{{ url('/assets/') }}/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js">
</script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": false
        },
        "version": "3.25.9",
        "is_static": false,
        "experimentalFeatures": {
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "e_nested_atomic_repeaters": true,
            "e_optimized_control_loading": true,
            "e_onboarding": true,
            "e_css_smooth_scroll": true,
            "hello-theme-header-footer": true,
            "home_screen": true,
            "landing-pages": true,
            "nested-elements": true,
            "editor_v2": true,
            "link-in-bio": true,
            "floating-buttons": true
        },
        "urls": {
            "assets": "https:\/\/golink.1onestrong.com\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/golink.1onestrong.com\/wp-admin\/admin-ajax.php",
            "uploadUrl": "https:\/\/golink.1onestrong.com\/wp-content\/uploads"
        },
        "nonces": {
            "floatingButtonsClickTracking": "4c9f4b15c4"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "hello_header_logo_type": "logo",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {
            "id": 2108,
            "title": "Home%2002%20%E2%80%93%20Golink",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script src="{{ url('/assets/') }}/wp-content/plugins/elementor/assets/js/frontend.min5422.js?ver=3.25.9"
    id="elementor-frontend-js"></script>
<script id="elementor-frontend-js-after">
    var jkit_ajax_url = "../indexe2f2.html?jkit-ajax-request=jkit_elements",
        jkit_nonce = "1f80281eab";
</script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-elementd047.js?ver=2.6.7"
    id="jkit-sticky-element-js"></script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1"
    id="jquery-numerator-js"></script>
<script src="{{ url('/assets/') }}/wp-content/plugins/metform/public/assets/js/htm6f61.js?ver=3.8.9" id="htm-js">
</script>
<script src="{{ url('/assets/') }}/wp-includes/js/dist/vendor/react.mincb06.js?ver=18.3.1" id="react-js"></script>
<script src="{{ url('/assets/') }}/wp-includes/js/dist/vendor/react-dom.mincb06.js?ver=18.3.1" id="react-dom-js">
</script>
<script src="{{ url('/assets/') }}/wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2"
    id="wp-escape-html-js"></script>
<script src="{{ url('/assets/') }}/wp-includes/js/dist/element.min1596.js?ver=cb762d190aebbec25b27" id="wp-element-js">
</script>
<script id="metform-app-js-extra">
    var mf = {
        "postType": "page",
        "restURI": "https:\/\/golink.1onestrong.com\/wp-json\/metform\/v1\/forms\/views\/",
        "minMsg1": "Minimum length should be ",
        "Msg2": " character long.",
        "maxMsg1": "Maximum length should be ",
        "maxNum": "Maximum number should be ",
        "minNum": "Minimum number should be "
    };
</script>
<script src="{{ url('/assets/') }}/wp-content/plugins/metform/public/assets/js/app6f61.js?ver=3.8.9"
    id="metform-app-js"></script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.mind617.js?ver=3.3.2"
    id="animate-circle-js"></script>
<script id="elementskit-elementor-js-extra">
    var ekit_config = {
        "ajaxurl": "https:\/\/golink.1onestrong.com\/wp-admin\/admin-ajax.php",
        "nonce": "2efc344875"
    };
</script>
<script
    src="{{ url('/assets/') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementord617.js?ver=3.3.2"
    id="elementskit-elementor-js"></script>