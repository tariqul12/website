@extends('frontend.layouts.master')

@section('body')
    <section style="background-image:url('{{ $banner_image->image }}')"
        class="page_title padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="bold">About Us</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            About Us
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>


    <!--eof topline-->
    <section class="s-pt-50 s-pt-md-70 s-pt-xl-80 s-pb-60 s-pb-md-80 s-pb-xl-90">
        <div class="container">
            <div class="row c-gutter-30 vertical-center">
                <div class="col-12 col-md-6">
                    <img src="{{ asset($about->image) }}" alt="">
                </div>
                <div class="divider-30 d-md-none"></div>
                <div class="col-12 col-md-6">
                    {{-- <h6 class="special-heading">
                        <span class="above">{{ $about->sub_title }}</span>
                    </h6> --}}
                    <h4 class="special-heading">
                        <span>{{ $about->title }}</span>
                    </h4>
                    <div class="divider-30"></div>
                    <p>{{ $about->sub_title }}</p>
                    <div class="divider-40"></div>
                    <a class="btn btn-maincolor" href="{{ route('contact') }}">Request A Quote</a>
                </div>

            </div>

        </div>
    </section>

    <section id="icon-bg-gradient" class="ds">
        <div class="container-fluid">
            <div class="row">
                @foreach ($categories as $key => $category)
                    <div class="col-lg-3 col-md-6 col-sm-12 py-5">
                        <div class="icon-box text-center bordered p-30">
                            <div class="icon-styled icon-bordered">
                                <img src="{{ $category->image }}" height="100" width="100" alt="">
                            </div>
                            <h5><a href="#">{{ $category->name }}</a></h5>
                            {{-- <p>
                                Lorem ipsum Dolor sit amet, consectetur adipiscing
                            </p> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="section_testimonials" class="ls s-py-60 s-py-md-80 s-py-xl-150">
        <div class="container">
            <div class="row c-gutter-50 mobile-padding-normal">

                <div class="col-md-12">
                    <div class="testimonials-slider style2 owl-carousel" data-autoplay="true" data-loop="true"
                        data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1"
                        data-nav="true" data-dots="false" data-margin="30"
                        data-nav-Prev='<i class="fa fa-angle-left" aria-hidden="true"></i>Prev'
                        data-nav-Next='Next<i class="fa fa-angle-right" aria-hidden="true"></i>'>

                        @foreach ($clients as $k => $client)
                            <div class="quote-item">
                                <div class="quote-image">
                                    <img src="{{ asset($client->image) }}" alt="">

                                </div>
                                <p>
                                    {{ $client->email }}
                                </p>
                                <footer>
                                    <cite>{{ $client->name }}</cite>
                                    <p class="author_job">JellyNet Customer</p>
                                </footer>
                            </div>
                        @endforeach

                    </div><!-- .testimonials-slider -->

                </div>

            </div>
        </div>
    </section>
@endsection
