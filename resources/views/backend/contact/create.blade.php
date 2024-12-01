@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Add New contacts</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contacts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="banner_title" class="form-label">Banner Title*</label>
                                    <input type="text" id="banner_title" name="banner_title" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="banner_description" class="form-label">Banner Description</label>
                                    <input type="text" id="banner_description" name="banner_description"  class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="map" class="form-label">Map</label>
                                    <input type="text" id="map" name="map" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address*</label>
                                    <textarea name="address" id="" cols="60" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="support">Support</label>
                                        <input type="support" name="support" id="support" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Banner Image</label>
                                        <input type="file" name="photos" id="photo" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
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
