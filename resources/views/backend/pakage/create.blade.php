@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Add New Pakaige</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('packages.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title*</label>
                                    <input type="text" id="title" name="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Sub Title*</label>
                                    <input type="text" id="title" name="sub_title" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="speed" class="form-label">Speed</label>
                                    <input type="text" id="speed" name="speed" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dw_speed">Upload speed</label>
                                        <input type="text" name="up_speed" id="dw_speed" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dw_speed">Downnload speed</label>
                                        <input type="text" name="dw_speed" id="dw_speed" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Price</label>
                                        <input type="text" name="price" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="additional">Additional</label>
                                        <input type="text" name="additional" id="additional" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Banner Description</label>
                                    <input type="text" id="description" name="description"  class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 mt-3 text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light btn-lg">Save</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
