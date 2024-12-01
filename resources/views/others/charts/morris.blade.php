@extends('layouts.vertical', ['title' => 'Morris.js Charts'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Morris Charts','subtitle' => 'Charts'])

        <div class="row">
            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Stacked Bar Chart</h4>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                            </p>
                        </div>
                        <div id="morris-bar-stacked" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#4fc6e1,#e3eaef"></div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Area Chart</h4>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Ethereum</span>
                            </p>
                        </div>
                        <div id="morris-area-example" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#f1556c"></div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Line Chart</h4>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-pink"></i> Ethereum</span>
                            </p>
                        </div>
                        <div id="morris-line-example" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#f672a7"></div>
                    </div>
                </div> <!-- card -->
            </div> <!-- end row -->

            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Bar Chart</h4>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ethereum</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                            </p>
                        </div>
                        <div id="morris-bar-example" style="height: 350px;" class="morris-chart" data-colors="#02c0ce,#0acf97,#ebeff2"></div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Area Chart with Point</h4>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Ethereum</span>
                            </p>
                        </div>
                        <div id="morris-area-with-dotted" style="height: 350px;" class="morris-chart" data-colors="#e3eaef,#6658dd"></div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card" dir="ltr">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Donut Chart</h4>
                        <div id="morris-donut-example" style="height: 350px;" class="morris-chart" data-colors="#4fc6e1,#6658dd,#ebeff2"></div>
                        <div class="text-center">
                            <p class="text-muted font-15 font-family-secondary mb-0">
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Litecoin</span>
                            </p>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/morris.init.js'])
@endsection
