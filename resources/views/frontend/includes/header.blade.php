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
                        <p class="phone_number"> <i class="ico icon-icon"></i><a href="tel:805671234">800.567.1234</a>
                        </p>
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
                                <a href="{{ route('frontend') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('package') }}">Package</a>
                            </li>
                            <li>
                                <a href="{{ route('service') }}">Service</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <!-- eof pages -->


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
