<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/jellynet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 06:39:08 GMT -->

<head>
    <title>JellyNet - Bootstrap 4 HTML template</title>
    <meta charset="utf-8">
    <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/animations.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/regular.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/brands.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/solid.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/shop.css" class="color-switcher-link">
    <script src="{{ asset('/') }}frontend/js/vendor/modernizr-custom.js"></script>

    <!--[if lt IE 9]>
  <script src="{{ asset('/') }}frontend/js/vendor/html5shiv.min.js"></script>
  <script src="{{ asset('/') }}frontend/js/vendor/respond.min.js"></script>
  <script src="{{ asset('/') }}frontend/js/vendor/jquery-1.12.4.min.js"></script>
 <![endif]-->

</head>

<body>
    <!--[if lt IE 9]>
  <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
 <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control"
                        placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="register_modal">
        <div class="container">
            <div class="row c-gutter-0 modal_register_form align-items-center">
                <div class="ls col-12 col-sm-6 menu-left">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post"
                        action="https://html.modernwebtemplates.com/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5><span class="color-main">Sign Up</span> / Sign In</h5>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="signupname">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value=""
                                        name="name" id="signupname" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="signuppassword">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value=""
                                        name="password" id="signuppassword" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="signupemail">Email<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value=""
                                        name="email" id="signupemail" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <input type="checkbox" class="checkbox" id="signupcheckbox" />
                                    <label for="signupcheckbox">I agree with all the text in the agreement</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signupform_submit" name="contact_submit"
                                        class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="phone_modal_button register_modal close-modal" data-dismiss="modal"
                                aria-label="Close" href="#sign_in_modal"><span aria-hidden="true">I am already
                                    Member</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block menu-right">
                    <img src="{{ asset('/') }}frontend/images/sing-in-modal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="login_modal">
        <div class="container">
            <div class="row c-gutter-0 modal_login_form align-items-center">
                <div class="ls col-12 col-sm-6 menu-left">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post"
                        action="https://html.modernwebtemplates.com/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5><span class="color-main">Sign In</span> / Sign Up</h5>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="signname">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value=""
                                        name="name" id="signname" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="signpassword">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value=""
                                        name="password" id="signpassword" class="form-control"
                                        placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signinform_submit" name="contact_submit"
                                        class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="register_modal close-modal" data-dismiss="modal" aria-label="Close"
                                href="#register_modal"><span aria-hidden="true">Forgot Password?</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block menu-right">
                    <img src="{{ asset('/') }}frontend/images/sing-in-modal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
  <ul class="list-unstyled">
   <li>Message To User</li>
  </ul>
  -->

        </div>
    </div><!-- eof .modal -->
    <!--noindex--><svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>


            <symbol id="icon-1" viewBox="0 0 226 32">
                <title>1</title>
                <path
                    d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z">
                </path>
            </symbol>


            <symbol id="icon-2" viewBox="0 0 248 32">
                <title>2</title>
                <path
                    d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z">
                </path>
            </symbol>

            <symbol id="icon-aim" viewBox="0 0 32 32">
                <title>aim</title>
                <path
                    d="M29.776 13.776h-1.393c-0.265-6.424-5.442-11.601-11.866-11.866v-1.393c0-0.286-0.232-0.517-0.517-0.517s-0.517 0.232-0.517 0.517v1.393c-6.424 0.265-11.601 5.442-11.866 11.866h-1.393c-0.286 0-0.517 0.232-0.517 0.517s0.232 0.517 0.517 0.517h1.393c0.265 6.424 5.442 11.601 11.866 11.866v4.806c0 0.286 0.232 0.517 0.517 0.517s0.517-0.232 0.517-0.517v-4.806c6.424-0.265 11.601-5.442 11.866-11.866h1.393c0.286 0 0.517-0.232 0.517-0.517s-0.232-0.517-0.517-0.517zM15.483 25.641c-5.853-0.264-10.567-4.977-10.831-10.831h4.53c0.252 3.359 2.942 6.049 6.301 6.301v4.53zM15.483 20.072c-2.788-0.247-5.014-2.474-5.262-5.262h2.979c0.213 1.156 1.126 2.070 2.283 2.283v2.979zM15.483 16.031c-0.585-0.174-1.046-0.636-1.221-1.221h1.221v1.221zM14.262 13.776c0.174-0.585 0.636-1.046 1.221-1.221v1.221h-1.221zM13.2 13.776h-2.979c0.248-2.788 2.474-5.014 5.262-5.262v2.979h0c-1.156 0.213-2.069 1.126-2.283 2.283zM15.483 7.475c-3.359 0.252-6.049 2.942-6.301 6.301h-4.53c0.264-5.853 4.977-10.567 10.831-10.831v4.53zM16.517 8.514c2.788 0.248 5.014 2.474 5.262 5.262l-2.979 0c-0.213-1.156-1.126-2.070-2.283-2.283v-2.979zM16.517 12.555c0.585 0.174 1.046 0.636 1.221 1.221h-1.221v-1.221zM16.517 14.81h1.221c-0.174 0.585-0.636 1.046-1.221 1.221v-1.221zM18.8 14.81h2.979c-0.247 2.788-2.474 5.014-5.262 5.262v-2.979h-0c1.156-0.213 2.070-1.126 2.283-2.283zM16.517 25.641v-4.53c3.359-0.252 6.049-2.942 6.301-6.301h4.53c-0.264 5.853-4.977 10.567-10.831 10.831zM22.818 13.776c-0.252-3.359-2.942-6.049-6.301-6.301v-4.53c5.853 0.264 10.567 4.977 10.831 10.831h-4.53z">
                </path>
            </symbol>

        </defs>
    </svg>
    <!--/noindex-->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <!--topline section visible only on small screens|-->

            <!--eof topline-->

            <section class="page_topline s-border ls s-borderbottom s-overlay">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-xl-3 text-center text-xl-left">
                            <ul>
                                <li>
                                    <p>Connecting Minds Around the World</p>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-12 col-xl-9 text-center text-xl-right">
                            <ul class="top-line-includes-first top-includes">
                                <li>
                                    <p class="address_top"> <i class="ico icon-placeholder"></i> 2231 Johnstown Road
                                        Bensenville, IL 60106 </p>
                                </li>
                                <li>
                                    <p class="email_top"><a
                                            href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#0b6e736a667b676e4b64677c6e6a25686466"><i
                                                class="fa fa-envelope"></i> <span class="__cf_email__"
                                                data-cfemail="0c69746d617c60694c6669606075626978226f6361">[email&#160;protected]</span></a>
                                    </p>
                                </li>
                                <li>
                                    <p class="phone_number"> <i class="ico icon-icon"></i><a
                                            href="tel:805671234">800.567.1234</a></p>
                                </li>
                            </ul>
                            <ul class="top-line-includes-second top-includes">
                                <li>
                                    <span>
                                        <a class="phone_modal_button" href="#sign_in_modal">Login / Sign Up</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
            <header class="page_header ls justify-nav-end">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-11">
                            <a href="index-2.html" class="logo">
                                <img src="{{ asset('/') }}frontend/images/logo_light.png" alt="">
                            </a>
                        </div>
                        <div class="col-xl-10 col-lg-9 col-md-8 col-1">
                            <div class="nav-wrap">

                                <!-- main nav start -->
                                <nav class="top-nav">
                                    <ul class="nav sf-menu">


                                        <li class="active">
                                            <a href="index.html">Home</a>
                                            <ul>
                                                <li>
                                                    <a href="index.html">MultiPage</a>
                                                </li>
                                                <li>
                                                    <a href="index_static.html">Static Intro</a>
                                                </li>
                                                <li>
                                                    <a href="index_singlepage.html">Single Page</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="about.html">Pages</a>
                                            <ul>


                                                <li>
                                                    <a href="about.html">About</a>
                                                </li>


                                                <!-- features -->
                                                <li>
                                                    <a href="shortcodes_iconbox.html">Shortcodes</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shortcodes_typography.html">Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_iconbox.html">Icon Boxes</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_progress.html">Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_animation.html">Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_icons.html">Template Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_socialicons.html">Social Icons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof shortcodes -->

                                                <li>
                                                    <a href="services.html">Our Services</a>
                                                    <ul>
                                                        <li>
                                                            <a href="services.html">Services 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="services2.html">Services 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="services3.html">Services 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-single.html">Single Service</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!-- gallery -->
                                                <li>
                                                    <a href="gallery-image.html">Gallery</a>
                                                    <ul>
                                                        <!-- Gallery image only -->
                                                        <li>
                                                            <a href="gallery-image.html">Image Only</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="gallery-image-2-cols.html">2 columns</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-image.html">3 columns</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-image-4-cols-fullwidth.html">4
                                                                        columns fullwidth</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <!-- eof Gallery image only -->

                                                        <!-- Gallery with title -->
                                                        <li>
                                                            <a href="gallery-title.html">Image With Title</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="gallery-title-2-cols.html">2 columns</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-title.html">3 column</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-title-4-cols-fullwidth.html">4
                                                                        columns fullwidth</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!-- eof Gallery with title -->

                                                        <!-- Gallery with excerpt -->
                                                        <li>
                                                            <a href="gallery-excerpt.html">Image with Excerpt</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="gallery-excerpt-2-cols.html">2 columns</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-excerpt.html">3 column</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-excerpt-4-cols-fullwidth.html">4
                                                                        columns fullwdith</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!-- eof Gallery with excerpt -->

                                                        <li>
                                                            <a href="gallery-tiled.html">Tiled Gallery</a>
                                                        </li>

                                                        <!-- Gallery item -->
                                                        <li>
                                                            <a href="gallery-single.html">Gallery Item</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="gallery-single.html">Style 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="gallery-single2.html">Style 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!-- eof Gallery item -->
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery -->


                                                <li>
                                                    <a href="shortcodes_widgets_default.html">Widgets</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shortcodes_widgets_default.html">Default
                                                                Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_widgets_shop.html">Shop Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_widgets_custom.html">Custom Widgets</a>
                                                        </li>
                                                    </ul>

                                                </li>


                                                <!-- events -->
                                                <li>
                                                    <a href="events-left.html">Events</a>
                                                    <ul>
                                                        <li>
                                                            <a href="events-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-full.html">Full Width</a>
                                                        </li>
                                                        <li>
                                                            <a href="event-single-left.html">Single Event</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="event-single-left.html">Left Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-right.html">Right Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-full.html">Full Width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof events -->

                                                <li>
                                                    <a href="team.html">Team</a>
                                                    <ul>
                                                        <li>
                                                            <a href="team.html">Team List</a>
                                                        </li>
                                                        <li>
                                                            <a href="team-single.html">Team Member</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li>
                                                    <a href="comingsoon.html">Comingsoon</a>
                                                </li>


                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                    <ul>
                                                        <li>
                                                            <a href="faq.html">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <a href="faq2.html">FAQ 2</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="terms-of-use.html">Terms Of Use</a>
                                                </li>
                                                <li>
                                                    <a href="availability-map.html">Availability map</a>
                                                </li>
                                                <li>
                                                    <a href="booking-form.html">Booking form</a>
                                                </li>
                                                <li>
                                                    <a href="internet.html">Internet</a>
                                                </li>
                                                <li>
                                                    <a href="iptv.html">IPTV</a>
                                                </li>
                                                <li>
                                                    <a href="voip.html">VOIP</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- eof pages -->


                                        <li>
                                            <a href="#">Features</a>
                                            <div class="mega-menu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <a href="#">Headers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header1.html">Header Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="header2.html">Header Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="header3.html">Header Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="header4.html">Header Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="header5.html">Header Type 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="header6.html">Header Type 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="#">Side Menus</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header-side.html">Push Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-right.html">Push Right</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-slide.html">Slide Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-slide-right.html">Slide Right</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-sticked.html">Sticked Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-sticked-right.html">Sticked
                                                                    Right</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="title1.html">Title Sections</a>
                                                        <ul>
                                                            <li>
                                                                <a href="title1.html">Title section 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="title2.html">Title section 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="title3.html">Title section 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="title4.html">Title section 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="title5.html">Title section 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="title6.html">Title section 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="footer1.html#footer">Footers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="footer1.html#footer">Footer Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer2.html#footer">Footer Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer3.html#footer">Footer Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer4.html#footer">Footer Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer5.html#footer">Footer Type 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer6.html#footer">Footer Type 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="copyright1.html#copyright">Copyright</a>

                                                        <ul>
                                                            <li>
                                                                <a href="copyright1.html#copyright">Copyright 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright2.html#copyright">Copyright 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright3.html#copyright">Copyright 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright4.html#copyright">Copyright 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright5.html#copyright">Copyright 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright6.html#copyright">Copyright 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div> <!-- eof mega menu -->
                                        </li>
                                        <!-- eof features -->


                                        <!-- blog -->
                                        <li>
                                            <a href="blog-right.html">Blog</a>
                                            <ul>

                                                <li>
                                                    <a href="blog-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-full.html">No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">Blog Grid</a>
                                                </li>

                                                <li>
                                                    <a href="blog-single-right.html">Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="blog-single-video-right.html">Video Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-video-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof blog -->


                                        <!-- shop -->
                                        <li>
                                            <a href="shop-right.html">Shop</a>
                                            <ul>
                                                <li>
                                                    <a href="shop-account-dashboard.html">Account</a>
                                                    <ul>

                                                        <li>
                                                            <a href="shop-account-details.html">Account details</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-addresses.html">Addresses</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-address-edit.html">Edit Address</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-orders.html">Orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-order-single.html">Single Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-downloads.html">Downloads</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-password-reset.html">Password
                                                                Reset</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-login.html">Login/Logout</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-right.html">Product Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-left.html">Product Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-received.html">Order Received</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof shop -->


                                        <!-- contacts -->
                                        <li>
                                            <a href="contact2.html">Contact</a>
                                            <ul>
                                                <li>
                                                    <a href="contact2.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="contact3.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="contact4.html">Contact 3</a>
                                                </li>
                                            </ul>
                                        </li>


                                        <!-- eof contacts -->
                                    </ul>


                                </nav>
                                <!-- eof main nav -->

                                <!--hidding includes on small devices. They are duplicated in topline-->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- header toggler -->
                <span class="toggle_menu"><span></span></span>
            </header>
            @yield('body')
            <div class="footer_before">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 animate" data-animation="fadeInUp">
                            <ul class="bottom-includes">
                                <li>
                                    <img src="{{ asset('/') }}frontend/images/logo_footer.png" alt="">
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter" title="facebook">Find tutorials and
                                        demos</a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-youtube-play" title="youtube-play">Find tutorials
                                        and demos</a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook" title="twitter">Connect on Facebook</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="page_footer ds s-pt-35 s-pb-45">
                <div class="container">
                    <div class="row">
                        <div class="divider-20 d-none d-xl-block"></div>

                        <div class="col-12 col-sm-6 col-md-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_service">

                                <h5 class="widget-title">My services</h5>

                                <ul>
                                    <li>
                                        <a href="service-single.html">Parental Controls</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Check Email</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Check Voicemail </a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Manage Your Plan</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Group Counseling</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="divider-30 divider-md-0"></div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_archive">

                                <h5 class="widget-title">My account</h5>

                                <ul>
                                    <li>
                                        <a href="service-single.html">Pay Bill</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Manage My Account</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Manage Users & Alerts</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Move Services</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Cable Customer Agreement</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="divider-30 divider-sm-0"></div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_archive">

                                <h3 class="widget-title">Support</h3>

                                <ul>
                                    <li>
                                        <a href="service-single.html">Comcast Customer Service</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Bill & Payments </a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Contact Us </a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Support Forums</a>
                                    </li>
                                    <li>
                                        <a href="service-single.html">Comcast Customer Service</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="divider-30 divider-md-0"></div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_mailchimp">

                                <h5 class="widget-title">Subscribe us</h5>

                                <form class="signup" action="https://html.modernwebtemplates.com/">

                                    <input id="mailchimp_email" name="email" type="email"
                                        class="form-control mailchimp_email" placeholder="Your email">

                                    <button type="submit" class="search-submit">
                                        <i class="fa fa-envelope"></i>
                                    </button>
                                    <div class="response"></div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </footer>
            <section class="page_copyright ds s-py-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <p><span class="copyright_year">&copy;</span> Copyright 2019 All Rights</p>
                        </div>
                    </div>
                </div>
            </section>


        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('/') }}frontend/js/compressed.js"></script>
    <script src="{{ asset('/') }}frontend/js/main.js"></script>
    <script src="{{ asset('/') }}frontend/js/switcher.js"></script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/jellynet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 06:39:48 GMT -->

</html>
