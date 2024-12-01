@extends('frontend.layouts.master')

@section('body')
    <section class="page_slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="ds cover-image flex-slide">
                    <img src="{{ asset('/') }}frontend/images/slider/slide01.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h6 class="special-heading">
                                                <span class="above">jellynet broadband internet</span>
                                            </h6>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h4 class="special-heading">
                                                <span>Our Plans Give You More Than Ever</span>
                                            </h4>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <p>Surf, stream, chat and game with fast speeds. Equipment included
                                                and no extra monthly fees.</p>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="price-wrap ">
                                                <span class="plan-sign">$</span>
                                                <span class="plan-price">39</span>
                                                <span class="plan-decimals">.99/mo</span>
                                            </div>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <a class="btn btn-maincolor"
                                                href="https://html.modernwebtemplates.com/contact">Request A
                                                Quote</a><span>or Call Now 800.567.1234</span>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>

                <li class="ds cover-image flex-slide">
                    <img src="{{ asset('/') }}frontend/images/slider/slide01.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h6 class="special-heading">
                                                <span class="above">jellynet broadband internet</span>
                                            </h6>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h4 class="special-heading">
                                                <span>Our Plans Give You More Than Ever</span>
                                            </h4>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <p>Surf, stream, chat and game with fast speeds. Equipment included
                                                and no extra monthly fees.</p>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="price-wrap ">
                                                <span class="plan-sign">$</span>
                                                <span class="plan-price">39</span>
                                                <span class="plan-decimals">.99/mo</span>
                                            </div>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <a class="btn btn-maincolor"
                                                href="https://html.modernwebtemplates.com/contact">Request A
                                                Quote</a><span>or Call Now 800.567.1234</span>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>


            </ul>
        </div> <!-- eof flexslider -->
    </section>


    <section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-md-12 text-center">
                    <h6 class="special-heading">
                        <span class="above">jellynet broadband internet</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Network Solutions from Jellynet</span>
                    </h4>
                    <div class="divider-30 divider-sm-50"></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="icon-box text-center home-style">
                        <div class="icon-styled color-main">
                            <i class="ico icon-upload"></i>
                        </div>
                        <h5><a href="#">Cloud</a></h5>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="icon-box text-center home-style">
                        <div class="icon-styled color-main">
                            <i class="ico icon-worldwide"></i>
                        </div>
                        <h5><a href="#">Networking</a></h5>
                    </div>
                </div>
                <div class="divider-40 d-lg-none"></div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="icon-box text-center home-style">
                        <div class="icon-styled color-main">
                            <i class="ico icon-icon1"></i>
                        </div>
                        <h5><a href="#">Mobility</a></h5>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                    <div class="icon-box text-center home-style">
                        <div class="icon-styled color-main">
                            <i class="ico icon-shield2"></i>
                        </div>
                        <h5><a href="#">Cybersecurity</a></h5>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="divider-30 divider-sm-60"></div>
                    <a class="btn btn-outline-secondary" href="#">Request a Quote</a>
                </div>
                <div class="col-md-12 text-center">
                    <div class="divider-30 divider-sm-50"></div>
                    <p class="text-dark">For more information call us at <a href="#">800.567.1234 </a>
                        or <a href="#">chat live</a> with Jellynet representative. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="internet-service" class="s-pt-100 s-pt-md-70 s-pt-xl-230 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="divider-30 divider-sm-50 divider-md-190"></div>
                <div class="col-xl-8 offset-xl-2 text-center">
                    <h6 class="special-heading">
                        <span class="above">jellynet internet services</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Why Jellynet ISP is Right for You?</span>
                    </h4>
                    <div class="divider-30"></div>
                    <p>The speed of data, as it travels from the Internet to your computer, is measured in
                        megabits per second (Mbps). Different activities require different speeds.</p>
                    <div class="divider-40"></div>
                    <a class="btn btn-maincolor" href="#">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls ms">
        <div class="container">
            <div class="row c-gutter-30">
                <div class="col-md-12 text-center">
                    <h6 class="special-heading">
                        <span class="above">NEW INTERNET PACKAGES ARE HERE!</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Better-than-ever Offers </span>
                    </h4>
                    <div class="divider-30 divider-sm-50"></div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-plan box-shadow color_style1">
                        <div class="plan-name">
                            <h3>
                                basic
                            </h3>
                        </div>
                        <div class="plan-header">
                            <ul>
                                <li>
                                    <p class="plan-header-title">internet</p>
                                    <p class="plan-header-aftertitle">80 Mbps</p>
                                    <p class="plan-header-text">Download Speeds</p>
                                </li>
                                <li>
                                    <p class="plan-header-title">TV</p>
                                    <p class="plan-header-aftertitle">125+</p>
                                    <p class="plan-header-text">Chanels</p>
                                </li>
                            </ul>
                            <img alt="" src="{{ asset('/') }}frontend/images/price-img1.png">
                        </div>

                        <div class="plan-features">
                            <ul class="list-styled-circle">
                                <li>Multi-device streaming</li>
                                <li>Download shows quickly</li>
                                <li>Download large files</li>
                            </ul>
                        </div>
                        <div class="price-wrap ">
                            <span class="plan-sign">$</span>
                            <span class="plan-price">39</span>
                            <span class="plan-decimals">.99/mo</span>
                        </div>

                        <div class="plan-button">
                            <a href="#" class="btn btn-maincolor">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="divider-30 d-md-none"></div>
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-plan box-shadow color_style2">
                        <div class="plan-name">
                            <h3>
                                premium
                            </h3>
                        </div>
                        <div class="plan-header">
                            <ul>
                                <li>
                                    <p class="plan-header-title">internet</p>
                                    <p class="plan-header-aftertitle">160 Mbps</p>
                                    <p class="plan-header-text">Download Speeds</p>
                                </li>
                                <li>
                                    <p class="plan-header-title">TV</p>
                                    <p class="plan-header-aftertitle">200+</p>
                                    <p class="plan-header-text">Chanels</p>
                                </li>
                            </ul>
                            <img alt="" src="{{ asset('/') }}frontend/images/price-img2.png">
                        </div>

                        <div class="plan-features">
                            <ul class="list-styled-circle">
                                <li>Multi-device streaming</li>
                                <li>Download shows quickly</li>
                                <li>Download large files</li>
                            </ul>
                        </div>
                        <div class="price-wrap ">
                            <span class="plan-sign">$</span>
                            <span class="plan-price">89</span>
                            <span class="plan-decimals">.99/mo</span>
                        </div>

                        <div class="plan-button">
                            <a href="#" class="btn btn-maincolor">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="divider-30 d-md-none"></div>
                <div class="col-lg-4 col-md-4">
                    <div class="pricing-plan box-shadow color_style3">
                        <div class="plan-name">
                            <h3>
                                premium
                            </h3>
                        </div>
                        <div class="plan-header">
                            <ul>
                                <li>
                                    <p class="plan-header-title">internet</p>
                                    <p class="plan-header-aftertitle">300 Mbps</p>
                                    <p class="plan-header-text">Download Speeds</p>
                                </li>
                                <li>
                                    <p class="plan-header-title">TV</p>
                                    <p class="plan-header-aftertitle">280+</p>
                                    <p class="plan-header-text">Chanels</p>
                                </li>
                            </ul>
                            <img alt="" src="{{ asset('/') }}frontend/images/price-img3.png">
                        </div>

                        <div class="plan-features">
                            <ul class="list-styled-circle">
                                <li>Multi-device streaming</li>
                                <li>Download shows quickly</li>
                                <li>Download large files</li>
                            </ul>
                        </div>
                        <div class="price-wrap ">
                            <span class="plan-sign">$</span>
                            <span class="plan-price">139</span>
                            <span class="plan-decimals">.99/mo</span>
                        </div>

                        <div class="plan-button">
                            <a href="#" class="btn btn-maincolor">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="divider-30 divider-sm-50"></div>
                    <a class="btn btn-outline-secondary" href="#">View All Offers</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-gallery ls">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row isotope-wrapper masonry-layout c-gutter-0">
                        <div class="col-md-4 col-sm-12">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="{{ asset('/') }}frontend/images/gallery/home/home-gallery1.jpg"
                                        alt="">
                                </div>
                                <div class="item-content">
                                    <h4>
                                        <a href="gallery-single.html">Fast Internet Speeds</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="{{ asset('/') }}frontend/images/gallery/home/home-gallery2.jpg"
                                        alt="">
                                </div>
                                <div class="item-content">
                                    <h4>
                                        <a href="gallery-single.html">Channel Lineups</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="{{ asset('/') }}frontend/images/gallery/home/home-gallery3.jpg"
                                        alt="">
                                </div>
                                <div class="item-content">
                                    <h4>
                                        <a href="gallery-single.html">Our Ultimate TV Experience</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('/') }}frontend/images/about-img.png" alt="">
                </div>
                <div class="divider-30 d-md-none"></div>
                <div class="col-12 col-md-6">
                    <h6 class="special-heading">
                        <span class="above">jellynet benefits</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Want to go faster? You got it.</span>
                    </h4>
                    <div class="divider-30"></div>
                    <p>The speed of data, as it travels from the Internet to your computer, is measured in
                        megabits per second (Mbps). Different activities require different speeds.</p>
                    <div class="divider-25"></div>
                    <ul class="list-styled-circle">
                        <li>50% off on professional installation</li>
                        <li>10 hours of cloud DVR service</li>
                        <li>HD included</li>
                        <li>Speed good for 6-8 devices at the same time</li>
                    </ul>
                    <div class="divider-40"></div>
                    <a class="btn btn-maincolor" href="https://html.modernwebtemplates.com/contact">Request A
                        Quote</a>
                </div>

            </div>

        </div>
    </section>

    <section id="coverage-map" class="s-pb-60 s-pb-md-80 s-pb-xl-150 s-pt-30 s-pt-md-50 s-pt-xl-115 ds">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-xl-8 offset-xl-2 text-center">
                    <div class="icon-box text-center">
                        <div class="icon-styled color-light fs-60">
                            <i class="ico icon-wifi1"></i>
                        </div>
                    </div>
                    <h6 class="special-heading">
                        <span class="above">jellynet network coverage</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Coverage Map & Locations</span>
                    </h4>
                    <div class="divider-30"></div>
                    <p>The speed of data, as it travels from the Internet to your computer, is measured in
                        megabits per second (Mbps). Different activities require different speeds.</p>
                    <div class="divider-40"></div>
                    <a class="btn btn-maincolor" href="#">Check Coverage</a>
                </div>
            </div>
        </div>
    </section>

    <section id="icon-bg-gradient" class="ds">
        <div class="container">
            <div class="row">
                <div class="divider-50 divider-md-70 divider-xl-140"></div>
                <div class="col-sm-12">
                    <h6 class="special-heading text-center">
                        <span class="above">have you any questions</span>
                    </h6>
                    <h4 class="special-heading text-center">
                        <span>Will you want know more?</span>
                    </h4>
                </div>
                <div class="divider-40"></div>
                <div class="col-md-4">
                    <div class="icon-box text-center bordered p-30">
                        <div class="icon-styled color-darkgrey icon-bordered">
                            <i class="ico icon-headphones fs-36"></i>
                        </div>
                        <h5><a href="#">Talk to an Agent</a></h5>
                        <p>
                            Get a Call
                        </p>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-md-4">
                    <div class="icon-box text-center bordered p-30">
                        <div class="icon-styled color-darkgrey icon-bordered">
                            <i class="ico icon-chat fs-36"></i>
                        </div>
                        <h5><a href="#">Chat with an Agent</a></h5>
                        <p>
                            Chat Now
                        </p>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-md-4">
                    <div class="icon-box text-center bordered p-30">
                        <div class="icon-styled color-main3 icon-bordered">
                            <i class="ico icon-map fs-36" aria-hidden="true"></i>
                        </div>
                        <h5><a href="#">Visit Jellynet Store</a></h5>
                        <p>
                            Find a Service Center
                        </p>
                    </div>
                </div>
                <div class="divider-60 divider-md-80 divider-xl-150"></div>
            </div>
        </div>
    </section>
@endsection
