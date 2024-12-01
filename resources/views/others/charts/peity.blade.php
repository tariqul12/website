@extends('layouts.vertical', ['title' => 'Peity Charts'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Peity Charts','subtitle' => 'Charts'])


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Pie Charts</h4>

                        <table class="table table-borderless table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Graph</th>
                                    <th>Code</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">1/5</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;1/5&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">226/360</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;226/360&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="pie" data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">0.52/1.561</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;0.52/1.561&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="pie" data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">1,4</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;1,4&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="pie" data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">226,134</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;226,134&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="pie" data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30">0.52,1.041</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-pie" data-colors="#4a81d4,#ebeff2" data-width="30" data-height="30"&gt;0.52,1.041&lt;/span&gt;</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div>
            <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Donut Charts</h4>

                        <table class="table table-borderless table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Graph</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">1/5</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;1/5&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">226/360</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;226/360&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">0.52/1.561</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;0.52/1.561&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">1,4</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;1/4&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">226,134</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;226,134&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="donut" data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30">1,2,3,2,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-donut" data-colors="#1abc9c,#ebeff2" data-width="30" data-height="30"&gt;1,2,3,2,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Line and Bars Charts</h4>

                        <table class="table table-borderless table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Graph</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span class="updating-chart"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="120" data-height="40">5,3,9,6,5,9,7,3,5,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="100" data-height="40"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="120" data-height="40">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="100" data-height="100"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="120" data-height="40">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#169c81" data-width="100" data-height="100"&gt;0,-3,-6,-4,-5,-4,-7,-3,-5,-2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="100" data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="100" data-height="30"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="100" data-height="30">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    </td>
                                    <td>
                                        <code>&lt;span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="100" data-height="30"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Data-attributes charts</h4>

                        <table class="table table-borderless table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Graph</th>
                                    <th>Code</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#4c5667", "#ebeff2"], "innerRadius": 24, "radius": 30 }'>6/7</span>
                                    </td>
                                    <td>
                                        <code>
                                            &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#4c5667", "#ebeff2"],  "innerRadius": 24, "radius": 30 }'"&gt;6/7&lt;/span&gt;
                                        </code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#5fbeaa", "#ebeff2"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                                    </td>
                                    <td>
                                        <code>
                                            &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#5fbeaa", "#ebeff2"],  "innerRadius": 18, "radius": 28 }'"&gt;4/7&lt;/span&gt;
                                        </code>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#5d9cec", "#ebeff2"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                    </td>
                                    <td>
                                        <code>
                                            &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#5d9cec", "#ebeff2"],  "innerRadius": 20, "radius": 24 }'"&gt;5/7&lt;/span&gt;
                                        </code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#fb6d9d", "#ebeff2"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                                    </td>
                                    <td>
                                        <code>
                                            &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#fb6d9d", "#ebeff2"],  "innerRadius": 18, "radius": 20 }'"&gt;6/7&lt;/span&gt;
                                        </code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#7266ba", "#ebeff2"], "innerRadius": 18, "radius": 20 }'>5/7</span>
                                    </td>
                                    <td>
                                        <code>
                                            &lt;span data-plugin="peity-donut-alt" data-peity='{ "fill": ["#7266ba", "#ebeff2"],  "innerRadius": 18, "radius": 20 }'"&gt;5/7&lt;/span&gt;
                                        </code>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/peity.init.js'])
@endsection
