@extends('layouts.vertical', ['title' => 'Form Masks'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Form Masks','subtitle' => 'Forms'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Input Masks</h4>
                        <p class="sub-header">
                            A jQuery Plugin to make masks on form fields and HTML elements.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                                        <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Hour</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                        <span class="font-13 text-muted">e.g "HH:MM:SS"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date & Hour</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                        <span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                        <span class="font-13 text-muted">e.g "xxxxx-xxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Crazy Zip Code</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                        <span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Money</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "Your money"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Money 2</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "#.##0,00"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000">
                                        <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Telephone with Code Area</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                        <span class="font-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">US Telephone</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                        <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">São Paulo Celphones</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                        <span class="font-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">CPF</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">IP Address</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                        <span class="font-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Auto Numberic</h4>
                        <p class="sub-header">
                            A jQuery Plugin to make masks on form fields and HTML elements.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Default</label>
                                        <input type="text" placeholder="" class="form-control autonumber" data-digit-group-separator="." data-decimal-character=",">
                                        <span class="font-13 text-muted">e.g. "1.234.567.890.123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric ($)</label>
                                        <input type="text" placeholder="" data-currency-symbol="$ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "$ $ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (€)</label>
                                        <input type="text" placeholder="" data-currency-symbol="€ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "€ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (Rs.)</label>
                                        <input type="text" placeholder="" data-currency-symbol="Rs. " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "Rs. 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <label>4 digit Group (¥)</label>
                                        <input type="text" placeholder="" data-digital-group-spacing="4" data-currency-symbol="¥ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "¥ 1,2345,6789,0123"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Auto Numeric (£)</label>
                                        <input type="text" placeholder="" data-currency-symbol="£ " class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "£ 1,234,567,890,123"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Auto Numeric (%)</label>
                                        <input type="text" placeholder="" data-currency-symbol="%" data-currency-symbol-placement="s" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "11%"</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Maximum Value (0 - 9999)</label>
                                        <input type="text" placeholder="" data-maximum-value="9999" data-minimum-value="0" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "9,999"</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Range Value (-99.99 - 1000.00)</label>
                                        <input type="text" placeholder="" data-minimum-value="-99.99" data-maximum-value="1000.00" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "1000 Or -99.99"</span>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <label>Bracket Value</label>
                                        <input type="text" placeholder="" data-digit-group-separator="." data-decimal-character="," data-minimum-value="-9999.99" data-maximum-value="0.00" data-negative-brackets-type-on-blur="(,)" class="form-control autonumber">
                                        <span class="font-13 text-muted">e.g. "(9,999.00)"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/form-masks.init.js'])
@endsection
