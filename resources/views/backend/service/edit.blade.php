@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="margin-left: 34%;">
                        <span class="card-title">Update Services</span>
                    </div>
                    <div class="card-body" style="margin-left: 34%;">
                        <form method="POST" action="{{ route('services.update', $service->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name*</label>
                                    <input type="text" id="name" name="title" value="{{ $service->title }}"
                                        class="form-control" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ag_mobile_no" class="form-label">Address*</label>
                                    <textarea class="form-label" name="description" id="" cols="60" rows="5">{{ $service->description }}</textarea>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Chose Photo</label>
                                        <input class="form-label" type="file" name="photos" id="photo">
                                    </div>
                                    <img src="{{ asset($service->image) }}" height="50" width="50" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1 text-center">
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
