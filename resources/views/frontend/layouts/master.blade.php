<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    <title>JellyNet - Bootstrap 4 HTML template</title>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.includes.style')

</head>

<body>

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


    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <!--topline section visible only on small screens|-->

            <!--eof topline-->

            @include('frontend.includes.header')

            @yield('body')
            @include('frontend.includes.footer')



        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->

    <script src="{{ asset('/') }}frontend/js/compressed.js"></script>
    <script src="{{ asset('/') }}frontend/js/main.js"></script>

</body>


</html>
