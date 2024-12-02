@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Donner</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('abouts.update', $about->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Title</label>
                                    <input type="text" id="title" name="title" value="{{ $about->title }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Sub Title</label>
                                    <input type="text" id="sub_title" name="sub_title" value="{{ $about->sub_title }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="support">Support</label>
                                        <input class="form-control" type="text" name="support"
                                            value="{{ $about->support }}" id="support">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="broadband_customer">Broadband Customer</label>
                                        <input class="form-control" type="text" name="broadband_customer"
                                            value="{{ $about->broadband_customer }}" id="support">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="service_award">Service Award</label>
                                        <input class="form-control" type="text" name="service_award"
                                            value="{{ $about->service_award }}" id="support">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="call_centre">Service Award</label>
                                        <input class="form-control" type="text" name="call_centre"
                                            value="{{ $about->call_centre }}" id="call_centre">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="helping_customer">Helping Customer</label>
                                        <input class="form-control" type="text" name="helping_customer"
                                            value="{{ $about->helping_customer }}" id="helping_customer">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="future_title">Future title</label>
                                        <input class="form-control" type="text" name="future_title"
                                            value="{{ $about->future_title }}" id="future_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="future_sub_title">Future Subtitle</label>
                                        <input class="form-control" type="text" name="future_sub_title"
                                            value="{{ $about->future_sub_title }}" id="future_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="customer_satisfaction">Customer satisfaction</label>
                                        <input class="form-control" type="text" name="customer_satisfaction"
                                            value="{{ $about->customer_satisfaction }}" id="customer_satisfaction">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="trustpilot_image_title">trustpilot title</label>
                                        <input class="form-control" type="text" name="trustpilot_image_title"
                                            value="{{ $about->trustpilot_image_title }}" id="future_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="trustpilot_image_sub_title">Trustpilot Subtitle</label>
                                        <input class="form-control" type="text" name="trustpilot_image_sub_title"
                                            value="{{ $about->trustpilot_image_sub_title }}" id="future_title">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input class="form-control" type="file" name="image" id="photo">
                                        <img src="{{ asset($about->image) }}" height="100" width="100"
                                            alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Future Image</label>
                                        <input class="form-control" type="file" name="future_image" id="photo">
                                        <img src="{{ asset($about->future_image) }}" height="100" width="100"
                                            alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Customer satisfactio Image</label>
                                        <input class="form-control" type="file" name="customer_satisfaction_image"
                                            id="photo">
                                        <img src="{{ asset($about->customer_satisfaction_image) }}" height="100"
                                            width="100" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">trustpilot Image</label>
                                        <input class="form-control" type="file" name="trustpilot_image"
                                            id="photo">
                                        <img src="{{ asset($about->trustpilot_image) }}" height="100" width="100"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light btn-lg">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
