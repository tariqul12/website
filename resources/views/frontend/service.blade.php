@extends('frontend.layouts.master')

@section('body')
    <section  style="background-image:url('{{$banner_image->image}}')" class="page_title padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <h1 class="bold">Services</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Services
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>


    <!--eof topline-->


    <section class="ls s-pt-60 s-pt-md-80 s-pt-xl-150 s-pb-30 s-pb-md-50 s-pb-xl-120 c-mb-30 service-isotope">
        <div class="container">
            <div class="row">

                @foreach ($services as $k => $service)
                    <div class="col-md-4 col-sm-6">

                        <div class="vertical-item text-center box-shadow">
                            <div class="item-media">
                                <img src="{{ asset($service->image) }}" alt="">
                                <div class="media-links">
                                    <a class="abs-link" title="" href=""></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="service-title">
                                    <a href="service-single.html">{{ $service->title }}</a>
                                </h6>

                                <p>
                                    {{ $service->description }}
                                </p>

                            </div>
                        </div>
                    </div><!-- .col-* -->
                @endforeach

            </div>

        </div>
    </section>
@endsection
