@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="margin-left: 34%;">
                        <span class="card-title">Update Donner</span>
                    </div>
                    <div class="card-body" style="margin-left: 34%;">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name*</label>
                                        <input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Chose Photo</label>
                                            <input class="form-label" type="file" name="photos" id="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 text-center">
                                        <button type="submit" class="btn btn-success waves-effect waves-light btn-lg">Update</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
