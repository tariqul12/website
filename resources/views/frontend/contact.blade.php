@extends('frontend.layouts.master')

@section('body')
    <section  style="background-image:url('{{$banner_image->image}}')" class="page_title padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <h1 class="bold">Contact 2 Page</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Contact
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>


    <!--eof topline-->


    <section class="ls s-pt-60 s-pt-md-80 s-pt-xl-150 s-pb-60 s-pb-md-100">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
                    <div class="icon-box text-center">
                        <div class="icon-styled color-main">
                            <i class="fa fa-mobile fs-40" aria-hidden="true"></i>
                        </div>
                        <h6>Phone</h6>
                        <p>
                            {{ $contact_home->phone }}<br>
                        </p>
                    </div>
                </div>
                <div class="divider-30  d-block d-md-none"></div>
                <div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
                    <div class="icon-box text-center">
                        <div class="icon-styled color-main">
                            <i class="fa fa-map-marker fs-40" aria-hidden="true"></i>
                        </div>
                        <h6>Location</h6>
                        <p>
                            {{ $contact_home->address }}
                        </p>
                    </div>
                </div>
                <div class="divider-30 d-block d-md-none"></div>
                <div class="col-sm-12 col-md-4 animate" data-animation="pullDown">
                    <div class="icon-box text-center">
                        <div class="icon-styled color-main">
                            <i class="fa fa-envelope fs-40" aria-hidden="true"></i>
                        </div>
                        <h6>Email</h6>
                        <p>

                            {{ $contact_home->email }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-pb-60 s-pb-md-80 s-pb-xl-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="divider-0 divider-lg-50"></div>
                    <form class="contact-form c-mb-10 c-gutter-10" method="post"
                        action="https://html.modernwebtemplates.com/">

                        <div class="row">

                            <div class="col-sm-12">
                                <h5 class="title_block color-main">Contact Form</h5>
                                <div class="divider-10 divider-md-20 divider-xl-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name"
                                        id="name" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email"
                                        id="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="contact_submit"
                                        class="btn btn-maincolor">Send</button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="divider-60 divider-lg-0"></div>
                </div>
                <!--.col-* -->
                <div class="col-lg-7">
                    <iframe src="{{ $contact_home->map }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>
@endsection
