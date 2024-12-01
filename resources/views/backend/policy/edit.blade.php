@extends('backend.layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Add New policy</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('policies.update',$policy->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control" >{{$policy->description}}</textarea>
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
