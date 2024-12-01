@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                                        <a href="{{ route('tconditons.create') }}" class="btn btn-primary btn-sm float-end"
                                            data-placement="left">
                                            {{ __('Add New Term and Conditions') }}
                                        </a>


                                </div>
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
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tconditons as $tconditon)
                                        <tr>
                                            <td>{{ $tconditon->id  }}</td>

                                            <td>{{ $tconditon->description }}</td>

                                            <td>
                                                <form action="{{ route('tconditons.destroy', $tconditon->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('clients.edit', $client->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> </a>
                                                    @can('clients-edit') --}}
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('tconditons.edit', $tconditon->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> Edit</a>
                                                    {{-- @endcan
                                                    @can('clients-delete') --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> Delete</button>
                                                    {{-- @endcan --}}
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
