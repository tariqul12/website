@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="row">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Add New contacts</span>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('abouts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6"></div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Sub Title</label>
                                    <input type="text" id="sub_title" name="sub_title" class="form-control">
                                </div>
                                    <div class="form-group">
                                        <label for="broadband_customer">Broadband Customer</label>
                                        <input type="text" class="form-control" name="broadband_customer" id="support">
                                    </div>

                                    <div class="form-group">
                                        <label for="service_award">Service Award</label>
                                        <input type="text" class="form-control" name="service_award" id="support">
                                    </div>

                                    <div class="form-group">
                                        <label for="call_centre">Service Award</label>
                                        <input type="text" class="form-control" name="call_centre" id="call_centre">
                                    </div>

                                    <div class="form-group">
                                        <label for="helping_customer">Helping Customer</label>
                                        <input type="text" class="form-control" name="helping_customer" id="helping_customer">
                                    </div>

                                    <div class="form-group">
                                        <label for="future_title">Future title</label>
                                        <input type="text" class="form-control" name="future_title" id="future_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="future_sub_title">Future Subtitle</label>
                                        <input type="text" class="form-control" name="future_sub_title" id="future_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="customer_satisfaction">Customer satisfaction</label>
                                        <input type="text" class="form-control" name="customer_satisfaction" id="customer_satisfaction">
                                    </div>

                                    <div class="form-group">
                                        <label for="trustpilot_image_title">trustpilot title</label>
                                        <input type="text" class="form-control" name="trustpilot_image_title" id="future_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="trustpilot_image_sub_title">Trustpilot Subtitle</label>
                                        <input type="text" class="form-control" name="trustpilot_image_sub_title" id="future_title">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="photo">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Customer satisfactio Image</label>
                                        <input type="file" class="form-control" name="customer_satisfaction_image" id="photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Trustpilot Image</label>
                                        <input type="file" class="form-control" name="trustpilot_image" id="photo">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Future Image</label>
                                        <input type="file" class="form-control" name="future_image" id="photo">
                                    </div>

                                <div class="col-md-1 mt-3 text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light btn-lg">Save</button>
                                </div>
                        </form>
                    </div>
                </div>

        </div>
    </section>
@endsection
