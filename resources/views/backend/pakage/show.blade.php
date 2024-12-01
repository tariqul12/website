@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-end">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{asset('storage').'/'.$client->image }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-light" id="tablec">
                                    <thead hidden>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <th>:  {{ $client->name }}</th>
                                        </tr>
                                         <tr>
                                            <td>Email</td>
                                            <th>:  {{ $client->email }}</th>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <th>: {{ $client->phone }},  {{ $client->mobile }}</th>
                                        </tr>
                                         <tr>
                                            <td>Gender</td>
                                            <th>: {{ $client->gender }}</th>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <th>: {{ $client->address }}</th>
                                        </tr>
                                        <tr>
                                            <td>Account  Type</td>
                                            <th>: @if ( $client->temp==0)
                                                Member
                                                @else
                                                Temporary
                                            @endif</th>
                                        </tr>
                                        @if ($client->temp==0)
                                        <tr>
                                            <td>Monthly Donation Fee</td>
                                            <th>: ${{ $client->fee }}</th>
                                        </tr>

                                        @endif
                                         <tr>
                                            <td>Status</td>
                                            <th>:
                                                @if ( $client->status==1)
                                                    Active
                                                @else
                                                    InActive
                                                @endif
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                         <h1>Donation History </h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-light" id="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Receipt Serial</th>
                                    <th>Purpose</th>
                                    <th>Issue</th>
                                    <th>Type</th>
                                    <th>Receive Amount</th>
                                    @if ( $client->temp==0)
                                    <th>Discount</th>
                                    <th>Total</th>
                                    @endif
                                    <th>A/C & Trans.ID</th>
                                    <th>Description</th>
                                    <th>Entry By</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                   $totaldis=0;
                                 @endphp
                                @forelse ($donations as $donation)
                                @php
                                     $discount=0;
                                @endphp
                                <tr>
                                    <td>{{ $i++}}</td>
                                    <td>{{ $donation->created_at }}</td>
                                    <td>{{ $donation->receiptno }}</td>
                                    <td>{{ $donation->purpose->name }}</td>
                                    <td>{{ $donation->issue }}</td>
                                    <td>{{ $donation->transactiontype->name }}</td>
                                    <td>${{ $donation->amount }}</td>
                                    @if ( $client->temp==0)
                                    <td>@isset($donation->discounts[0])
                                        ${{ $donation->discounts[0]->amount }}
                                        @php

                                        $totaldis+= $discount=intval($donation->discounts[0]->amount);
                                        @endphp
                                        @else
                                        $0
                                        @endisset
                                    </td>
                                    <td>${{ $donation->amount+$discount }} </td>
                                    @endif
                                    <td>{{ $donation->accountno }} <br> {{ $donation->transactionno }}</td>
                                    <td>{{ $donation->note }}</td>
                                    <td>{{ $donation->user->name }}</td>
                                    <td> <form action="{{ route('donations.destroy',$donation->id) }}" method="POST">
                                        @can('donations-edit')
                                        <a class="btn btn-md btn-success" href="{{ route('donations.edit',$donation->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @endcan
                                        @can('print')
                                        <a class="btn btn-md btn-success" href="{{ url('/print/'.$donation->id) }}" target="_blank" ><i class="fa fa-fw fa-print"></i> Print</a>
                                        @endcan
                                        @can('donations-delete')
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                        @endcan
                                    </form></td>
                                </tr>
                                @empty
                                <h3>Donation Not Found</h3>
                                @endforelse



                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th>${{$donations->SUM('amount') }}   </th>
                                    @if ( $client->temp==0)
                                    <th>${{ $totaldis}}</th>
                                    <th>${{ $donations->SUM('amount')+$totaldis}}</th>
                                    @endif
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
