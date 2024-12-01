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
                        <form method="POST" action="{{ route('contacts.update', $contact->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="map" class="form-label">Map</label>
                                    <input type="text" id="map" name="map" class="form-control"
                                        value="{{ $contact->map }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address*</label>
                                    <textarea class="form-control" name="address" id="" cols="60" rows="5">{{ $contact->address }}</textarea>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Phone</label>
                                        <input type="text" name="phone" id="phone"><img src="{{ $contact->phone }}"
                                            alt="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="{{ $contact->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="support">Support</label>
                                        <input type="support" name="support" id="support" value="{{ $contact->support }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Banner Image</label>
                                        <input type="file" name="photos" id="photo" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light btn-lg">Save</button>
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
