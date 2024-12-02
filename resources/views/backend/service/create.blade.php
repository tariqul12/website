@extends('backend.layouts.master')

@section('content')
    <section class="content container-fluid">
        <div class="row">

            <div class="col-md-12">

                @includeif('clients.errors')

                <div class="card card-default">
                    <div class="card-header" style="margin-left: 34%;">
                        <span class="card-title">Add New Serve</span>
                    </div>
                    <div class="card-body" style="margin-left: 34%;">
                        <form method="POST" action="{{ route('services.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Title*</label>
                                    <input type="text" id="name" name="title" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ag_mobile_no" class="form-label">Description*</label>
                                    <textarea class="form-control" name="description" id="" cols="60" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Chose Photo</label>
                                        <input class="form-control" type="file" name="photos" id="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 mt-3 text-center">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light btn-lg">Update</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
