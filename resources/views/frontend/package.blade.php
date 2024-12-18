@extends('frontend.layouts.master')

@section('body')
    <section style="background-image:url('{{ $banner_image->image }}')"
        class="page_title padding-mobile cs s-py-60 s-py-md-80 s-pt-xl-100 s-pb-xl-115">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="bold">PACKAGES</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Packages
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="s-pt-50 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 ls ms">
        <div class="container">
            <div class="row c-gutter-30">
                <div class="col-md-12 text-center">
                    <h6 class="special-heading">
                        <span class="above">NEW INTERNET PACKAGES ARE HERE!</span>
                    </h6>
                    <h4 class="special-heading">
                        <span>Better-than-ever Offers </span>
                    </h4>
                    <div class="divider-30 divider-sm-50"></div>
                </div>
                @foreach ($pakages as $k => $package)
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-plan box-shadow color_style1">
                            <!-- Plan Name -->
                            <div class="plan-name text-center">
                                <h3>{{ $package->title }}</h3>
                            </div>

                            <!-- Plan Details -->
                            <div class="plan-header">
                                <ul class="list-unstyled text-center m-auto">
                                    <li>
                                        <p class="plan-header-title">Internet Speed</p>
                                        <p class="plan-header-value">{{ $package->speed }} Mbps</p>
                                        <p class="plan-header-text">Download Speeds</p>
                                    </li>
                                    <li>
                                        <p class="plan-header-title">Upload Speed</p>
                                        <p class="plan-header-value">{{ $package->up_speed }} Mbps</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- Plan Features -->
                            <div class="plan-features text-center">
                                <p>{{ $package->description }}</p>
                            </div>

                            <!-- Pricing -->
                            <div class="price-wrap text-center pb-4">
                                <span class="plan-price">Taka {{ $package->price }}</span>
                                <span class="plan-decimals">/mo</span>
                            </div>

                            <!-- Optional Button -->
                            <div class="text-center py-4">
                                {{-- <a href="#" class="btn btn-primary">Order</a> --}}
                                <button type="button" class="btn transparent-btn editCatBtn"
                                    data-title="{{ $package->title }}"
                                    data-route="{{ route('package.order', $package->id) }}">Get
                                    Started</button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Edit Modal -->
    <div id="editCatModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 id="title_name">Order for</h4>
                </div>
                <form id="editForm" class="px-3" action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" required
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" required
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input class="form-control" type="number" id="mobile" name="mobile" required
                            placeholder="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" required placeholder="address"></textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <button class="btn btn-primary" type="submit">Order</button>
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection
