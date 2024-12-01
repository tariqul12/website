@extends('backend.layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Add New Cliend</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teams.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">name</label>
                                    <input type="text" id="name" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">title</label>
                                    <input type="text" id="title" name="title" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">sub title</label>
                                    <input type="text" id="sub_title" name="sub_title" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">designation</label>
                                    <textarea type="text" id="designation" name="designation" class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkdin" class="form-label">linkdin</label>
                                    <input type="text" id="linkdin" name="linkdin" class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twiter">twiter</label>
                                        <input type="text" name="twiter" id="twiter" class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <input type="text" name="description" id="description" class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-success waves-effect waves-light btn-lg">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
