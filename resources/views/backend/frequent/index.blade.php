@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Donner') }}
                            </span>
                            @can('clients-add')
                                <div class="float-end">
                                    @if (Request::is('clients'))
                                        <a href="{{ route('frequents.create') }}" class="btn btn-primary btn-sm float-end"
                                            data-placement="left">
                                            {{ __('Add New Donners') }}
                                        </a>
                                    @else
                                        <a href="{{ url('donation/quick') }}" class="btn btn-primary btn-sm float-end"
                                            data-placement="left">
                                            {{ __('Add Quick Donners Payment') }}
                                        </a>
                                    @endif

                                </div>
                            @endcan
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
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($frequents as $frequent)
                                        <tr>
                                            <td>{{ $frequent->id  }}</td>

                                            <td>{{ $frequent->question }}</td>
                                            <td>{{ $frequent->answare }}</td>
                                            <td>
                                                <form action="{{ route('frequents.destroy', $frequent->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('clients.edit', $client->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> </a>
                                                    @can('clients-edit') --}}
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('frequents.edit', $frequent->id) }}"><i
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
