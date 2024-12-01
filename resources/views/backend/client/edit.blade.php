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
                        <form method="POST" action="{{ route('clients.update', $client->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <form method="POST" action="{{ route('clients.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name*</label>
                                        <input type="text" id="name" name="name" value="{{ $client->name }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" id="phone" name="phone" value="{{ $client->phone }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="text" id="email" name="email" value="{{ $client->email }}" class="form-control"  >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ag_mobile_no" class="form-label">Address*</label>
                                        <textarea class="form-label" name="address" id="" cols="60" rows="5">{{ $client->address }}</textarea>
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
                                        <button type="submit" class="btn btn-success waves-effect waves-light btn-lg">Save</button>
                                    </div>
                                </div>


                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
