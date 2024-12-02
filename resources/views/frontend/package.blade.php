@extends('frontend.layouts.master')

@section('body')
    <section class="page_title cover-background padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="bold">PACKAGES</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Packages
                        </li>
                    </ul>
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
                @foreach ($pakages as $k => $package)
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-plan box-shadow color_style1">
                            <div class="plan-name">
                                <h3>
                                    {{ $package->title }}
                                </h3>
                            </div>
                            <div class="plan-header">
                                <ul>
                                    <li>
                                        <p class="plan-header-title">internet</p>
                                        <p class="plan-header-aftertitle">{{ $package->speed }} Mbps</p>
                                        <p class="plan-header-text">Download Speeds</p>
                                    </li>
                                    <li>
                                        <p class="plan-header-title">Speed Up</p>
                                        <p class="plan-header-aftertitle">{{ $package->up_speed }} Mbps</p>
                                    </li>
                                </ul>
                                <img alt="" src="{{ asset('/') }}frontend/images/price-img1.png">
                            </div>

                            <div class="plan-features">
                                {{ $package->description }}

                            </div>

                            <div class="price-wrap pb-5">
                                <span class="plan-sign">$</span>
                                <span class="plan-price">{{ $package->price }}</span>
                                <span class="plan-decimals">/mo</span>
                            </div>

                            {{-- <div class="plan-button">
                            <a href="#" class="btn btn-maincolor">Read</a>
                        </div> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
