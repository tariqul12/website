@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a class="btn btn-success" href="{{ route('abouts.create') }}">Create Data</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <td>{{ $about->id }}</td>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->sub_title }}</td>
                                            <td><img src="{{ asset($about->image) }}" width="80" height="80"
                                                    alt=""></td>


                                            <td>
                                                <form action="{{ route('abouts.destroy', $about->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('abouts.edit', $about->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
