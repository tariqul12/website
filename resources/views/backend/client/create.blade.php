@extends('backend.layouts.master')

@section('content')
    <section class="content container-fluid">
        <div class="row">

            <div class="col-md-12">

                @includeif('clients.errors')

                <div class="card card-default">
                    <div class="card-header" style="margin-left: 34%;">
                        <span class="card-title">Add New Cliend</span>
                    </div>
                    <div class="card-body" style="margin-left: 34%;">
                        <form method="POST" action="{{ route('clients.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name*</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" name="phone"
                                        onkeypress="return numbersOnly(event)" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ag_mobile_no" class="form-label">Email*</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        onkeypress="return numbersOnly(event)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ag_mobile_no" class="form-label">Address*</label>
                                    <textarea class="form-control" name="address" id="" cols="60" rows="5"></textarea>
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
