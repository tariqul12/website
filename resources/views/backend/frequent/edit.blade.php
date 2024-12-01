@extends('backend.layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Add New Frequent</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('frequents.update',$frequent->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="question" class="form-label">question</label>
                                    <input type="text" id="question" value="{{$frequent->question}}" name="question" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="answare" class="form-label">answare</label>
                                    <input type="text" id="answare" value="{{$frequent->answare}}" name="answare" class="form-control" >
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
