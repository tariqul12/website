@extends('frontend.layouts.master')

@section('body')
    <section class="page_slider">

        <div class="flexslider">
            <ul class="slides">
                {{-- @foreach ($banners as $key => $banner) --}}
                <li class="ds cover-image flex-slide">
                    <img src="{{ asset($banner_index->image) }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInRight">
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h4 class="special-heading">
                                                <span>{{ $banner_index->title }}</span>
                                            </h4>
                                        </div>

                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <div class="price-wrap ">
                                                <span class="plan-sign">$</span>
                                                <span class="plan-price">39</span>
                                                <span class="plan-decimals">.99/mo</span>
                                            </div>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <a class="btn btn-maincolor" href="{{ route('contact') }}">Request A
                                                Quote</a><span>or Call Now {{ $contact_home->phone }}</span>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container-fluid -->
                </li>
                {{-- @endforeach --}}

            </ul>
        </div> <!-- eof flexslider -->
    </section>


    <section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-md-12 text-center">
                    {{-- <h6 class="special-heading">
                        <span class="above">jellynet broadband internet</span>
                    </h6> --}}
                    <h4 class="special-heading">
                        <span>Category</span>
                    </h4>
                </div>
                @foreach ($categories as $key => $category)
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center py-5">
                        <div class="icon-box text-center home-style">
                            <div class="icon-styled color-main">
                                <img src="{{ $category->image }}" height="50" width="50" alt="">
                            </div>
                            <h5><a href="#">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <div class="divider-30 divider-sm-60"></div>
                    <a class="btn btn-outline-secondary" href="{{ route('contact') }}">Request a Quote</a>
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
                        <span>Packages</span>
                    </h4>
                    <div class="divider-30 divider-sm-50"></div>
                </div>
                @foreach ($pakages as $k => $package)
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-plan box-shadow color_style1">
                            <!-- Plan Name -->
                            <div class="plan-name text-center">
                                <h3>{{ $package->title }}</h3>
                            </div>

                            <!-- Plan Details -->
                            <div class="plan-header">
                                <ul class="list-unstyled text-center m-auto">
                                    <li>
                                        <p class="plan-header-title">Internet Speed</p>
                                        <p class="plan-header-value">{{ $package->speed }} Mbps</p>
                                        <p class="plan-header-text">Download Speeds</p>
                                    </li>
                                    <li>
                                        <p class="plan-header-title">Upload Speed</p>
                                        <p class="plan-header-value">{{ $package->up_speed }} Mbps</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- Plan Features -->
                            <div class="plan-features text-center">
                                <p>{{ $package->description }}</p>
                            </div>

                            <!-- Pricing -->
                            <div class="price-wrap text-center pb-4">
                                <span class="plan-price">Taka {{ $package->price }}</span>
                                <span class="plan-decimals">/mo</span>
                            </div>

                            <!-- Optional Button -->
                            <div class="text-center py-4">
                                <button type="button" class="btn transparent-btn editCatBtn"
                                    data-title="{{ $package->title }}"
                                    data-route="{{ route('package.order', $package->id) }}">Get
                                    Started</button>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-md-12 text-center">
                    <div class="divider-30 divider-sm-50"></div>
                    <a class="btn btn-outline-secondary" href="{{ route('package') }}">View All Offers</a>
                </div>
            </div>
        </div>
    </section>
    {{-- 
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
    </section> --}}

    <section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-12 col-md-6">
                    <img src="{{ asset($about->image) }}" alt="">
                </div>
                <div class="divider-30 d-md-none"></div>
                <div class="col-12 col-md-6">
                    {{-- <h6 class="special-heading">
                        <span class="above">jellynet benefits</span>
                    </h6> --}}
                    <h4 class="special-heading">
                        <span>{{ $about->title }}</span>
                    </h4>
                    <div class="divider-30"></div>
                    <p>{{ $about->sub_title }}</p>
                    <div class="divider-40"></div>
                    <a class="btn btn-maincolor" href="{{ route('contact') }}">Request A
                        Quote</a>
                </div>

            </div>

        </div>
    </section>

    {{-- <section id="" class="s-pb-60 s-pb-md-80 s-pb-xl-150 s-pt-30 s-pt-md-50 s-pt-xl-115 ds">

        <iframe src="{{ $contact_home->map }}" width="100%" height="450" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section> --}}

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
                            <i class="fa fa-envelope fs-40" aria-hidden="true"></i>
                        </div>
                        <h5><a href="#">Email</a></h5>
                        <p>
                            {{ $contact_home->email }}
                        </p>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-md-4">
                    <div class="icon-box text-center bordered p-30">
                        <div class="icon-styled color-darkgrey icon-bordered">
                            <i class="fa fa-map-marker fs-40" aria-hidden="true"></i>
                        </div>
                        <h5><a href="#">Address</a></h5>
                        <p>
                            {{ $contact_home->address }}
                        </p>
                    </div>
                </div>
                <div class="divider-40 d-md-none"></div>
                <div class="col-md-4">
                    <div class="icon-box text-center bordered p-30">
                        <div class="icon-styled color-main3 icon-bordered">
                            <i class="fa fa-mobile fs-40" aria-hidden="true"></i>
                        </div>
                        <h5><a href="#">Contact Number</a></h5>
                        <p>
                            {{ $contact_home->phone }}
                        </p>
                    </div>
                </div>
                <div class="divider-60 divider-md-80 divider-xl-150"></div>
            </div>
        </div>
    </section>
    <!-- Edit Modal -->
    <div id="editCatModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 id="title_name">Order for</h4>
                </div>
                <form id="editForm" class="px-3" action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" required
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" required
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input class="form-control" type="number" id="mobile" name="mobile" required
                            placeholder="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" required placeholder="address"></textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <button class="btn btn-primary" type="submit">Order</button>
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
