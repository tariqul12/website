@extends('layouts.vertical', ['title' => 'Loading Buttons | Ladda'])

@section('css')
    @vite(['node_modules/ladda/dist/ladda.min.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Loading Btn','subtitle' => 'Extended UI'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Examples</h4>
                        <p class="sub-header">
                            Buttons with built-in loading indicators.
                        </p>

                        <div class="row text-center">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Expand-left</h5>
                                    <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-left">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Expand-right</h5>
                                    <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-right">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Expand-up</h5>
                                    <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-up">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Expand-down</h5>
                                    <button class="ladda-button btn btn-primary" dir="ltr" data-style="expand-down">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row text-center">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Contract</h5>
                                    <button class="ladda-button btn btn-warning" dir="ltr" data-style="contract">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Zoom-in</h5>
                                    <button class="ladda-button btn btn-warning" dir="ltr" data-style="zoom-in">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Zoom-out</h5>
                                    <button class="ladda-button btn btn-warning" dir="ltr" data-style="zoom-out">Submit
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row text-center">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Slide-left</h5>
                                    <button class="ladda-button  btn btn-info" dir="ltr" data-style="slide-left">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Slide-right</h5>
                                    <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-right">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Slide-up</h5>
                                    <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-up">Submit
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <h5 class="text-muted">Slide-down</h5>
                                    <button class="ladda-button btn btn-info" dir="ltr" data-style="slide-down">Submit
                                    </button>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row text-center">
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <section class="progress-demo">
                                        <h5 class="text-muted">Expand-right</h5>
                                        <button class="ladda-button btn btn-danger" dir="ltr" data-style="expand-right">
                                            Submit
                                        </button>
                                    </section>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <section class="progress-demo">
                                        <h5 class="text-muted">Contract</h5>
                                        <button class="ladda-button btn btn-danger" dir="ltr" data-style="contract">
                                            Submit
                                        </button>
                                    </section>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="p-3">
                                    <section class="progress-demo">
                                        <h5 class="text-muted">Demo how to use with api services</h5>
                                        <button class="ladda-button ladda-button-demo btn btn-success" dir="ltr" data-style="zoom-in">Submit</button>
                                    </section>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/loading-btn.init.js'])
@endsection
