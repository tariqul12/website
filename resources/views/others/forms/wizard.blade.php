@extends('layouts.vertical', ['title' => 'Form Wizard'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Form Wizard','subtitle' => 'Forms'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Horizontal Wizard</h4>

                        <div class="row">
                            <form>
                                <div id="horizontalwizard">
                                    <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                               class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                                Account </a><!-- end nav-link -->
                                        </li>
                                        <!-- end nav-item -->
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                               class="nav-link rounded-0 py-2" aria-selected="false" role="tab"
                                               tabindex="-1">
                                                Profile </a><!-- end nav-link -->
                                        </li>
                                        <!-- end nav-item -->
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                               class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                               role="tab">
                                                Social Links </a><!-- end nav-link -->
                                        </li>
                                        <!-- end nav-item -->
                                        <li class="nav-item" role="presentation">
                                            <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab"
                                               class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                               role="tab">
                                                Finish </a><!-- end nav-link -->
                                        </li>
                                        <!-- end nav-item -->
                                    </ul>

                                    <div class="tab-content mb-0">
                                        <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                            <h4 class="fs-16 fw-semibold mb-1">
                                                Account Information
                                            </h4>
                                            <p class="text-muted">
                                                Setup your account
                                                information
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicUser" class="form-label">User
                                                            Name</label>
                                                        <input id="basicUser" type="text" class="form-control"
                                                               placeholder="Enter User Name"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicEmail" class="form-label">Email</label>
                                                        <input id="basicEmail" type="email" class="form-control"
                                                               placeholder="Enter your email"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicPassworda" class="form-label">Password</label>
                                                        <input id="basicPassworda" type="text" class="form-control"
                                                               placeholder="Enter Password"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicConfirmPassword" class="form-label">Confirm
                                                            Password</label>
                                                        <input id="basicConfirmPassword" type="text"
                                                               class="form-control"
                                                               placeholder="Confirm a Password"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="basictab2" role="tabpanel">
                                            <h4 class="fs-16 fw-semibold mb-1">
                                                Profile Information
                                            </h4>
                                            <p class="text-muted">
                                                Setup your profile
                                                information
                                            </p>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="avatar-lg mb-3">
                                                        <div
                                                            class="avatar-title bg-body rounded-circle border border-3 border-dashed-light position-relative">
                                                            <label for="imageInput"
                                                                   class="position-absolute end-0 bottom-0">
                                                                <div class="avatar-xs cursor-pointer">
                                                                <span
                                                                    class="avatar-title bg-light text-dark rounded-circle"><i
                                                                        class="fe-camera"></i></span>
                                                                </div>
                                                            </label>
                                                            <input class="d-none" type="file" id="imageInput"
                                                                   accept="image/*"/>

                                                            <img id="preview" src="/images/users/avatar-1.jpg"
                                                                 alt="Preview Image" class="rounded-circle img-fluid"/>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basicFname">First
                                                                    Name</label>
                                                                <input type="text" id="basicFname" class="form-control"
                                                                       placeholder="Chris"/>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="basicLname">Last
                                                                    Name</label>
                                                                <input type="text" id="basicLname" class="form-control"
                                                                       placeholder="Keller"/>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                       for="basicMnumber">Number</label>
                                                                <input type="number" id="basicMnumber"
                                                                       class="form-control"
                                                                       placeholder="Mobile Number"/>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                       for="basicCountry">Country</label>
                                                                <select id="basicCountry" class="form-select">
                                                                    <option value="United States">
                                                                        United
                                                                        States
                                                                    </option>
                                                                    <option value="Canada">
                                                                        Canada
                                                                    </option>
                                                                    <option value="Australia">
                                                                        Australia
                                                                    </option>
                                                                    <option value="Germany">
                                                                        Germany
                                                                    </option>
                                                                    <option value="Bangladesh">
                                                                        Bangladesh
                                                                    </option>
                                                                    <option value="China">
                                                                        China
                                                                    </option>
                                                                    <option value="Argentina">
                                                                        Argentina
                                                                    </option>
                                                                    <option value="Bharat">
                                                                        Bharat
                                                                    </option>
                                                                    <option value="Afghanistan">
                                                                        Afghanistan
                                                                    </option>
                                                                    <option value="France">
                                                                        France
                                                                    </option>
                                                                    <option value="Brazil">
                                                                        Brazil
                                                                    </option>
                                                                    <option value="Belgium">
                                                                        Belgium
                                                                    </option>
                                                                    <option value="Colombia">
                                                                        Colombia
                                                                    </option>
                                                                    <option value="Albania">
                                                                        Albania
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="basictab3" role="tabpanel">
                                            <h4 class="fs-16 fw-semibold mb-1">
                                                Social Media Links
                                            </h4>
                                            <p class="text-muted">
                                                Fill your social
                                                media links
                                            </p>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicGitLink" class="form-label">GitHub</label>
                                                        <input id="basicGitLink" type="text" class="form-control"
                                                               placeholder="GitHub Link"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicGoogleLink" class="form-label">Google</label>
                                                        <input id="basicGoogleLink" type="text" class="form-control"
                                                               placeholder="Google Link"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicInstagramLink"
                                                               class="form-label">Instagram</label>
                                                        <input id="basicInstagramLink" type="text" class="form-control"
                                                               placeholder="Instagram Link"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicSkypeLink" class="form-label">Skype</label>
                                                        <input id="basicSkypeLink" type="text" class="form-control"
                                                               placeholder="Skype Link"/>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="basictab4" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="text-center">
                                                        <div class="avatar-md mx-auto mb-3">
                                                            <div
                                                                class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle">
                                                                <i class="fe-thumbs-up fs-4"></i>
                                                            </div>
                                                        </div>
                                                        <h3 class="mt-0">
                                                            Finished
                                                            !
                                                        </h3>

                                                        <p class="w-75 mb-2 mx-auto">
                                                            Filled
                                                            Data
                                                            Successfully.
                                                        </p>

                                                        <div class="mb-3">
                                                            <div class="form-check d-inline-block">
                                                                <input type="checkbox" class="form-check-input"
                                                                       id="customCheck1"/>
                                                                <label class="form-check-label" for="customCheck1">I
                                                                    agree
                                                                    with
                                                                    the
                                                                    Terms
                                                                    and
                                                                    Conditions</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div
                                            class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">
                                            <div class="first">
                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                    First
                                                </a>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <div class="previous">
                                                    <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                        <i class="fe-arrow-left me-2"></i>Back To
                                                        Previous
                                                    </a>
                                                </div>
                                                <div class="next">
                                                    <a href="javascript:void(0);" class="btn btn-primary">
                                                        Next Step<i class="fe-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="last">
                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                    Finish
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab-content -->
                                </div>
                                <!-- end #horizontal wizard-->
                            </form>
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
                        <h4 class="header-title mb-3">Vertical Wizard</h4>

                        <div class="row">
                            <form id="verticalwizard">
                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <ul class="nav nav-pills nav-justified flex-column icon-wizard form-wizard-header bg-light p-1"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a href="#basictabHorizontal1" data-bs-toggle="tab" data-toggle="tab"
                                                   class="nav-link rounded-0 py-2 active" aria-selected="true"
                                                   role="tab">
                                                    Account </a><!-- end nav-link -->
                                            </li>
                                            <!-- end nav-item -->
                                            <li class="nav-item" role="presentation">
                                                <a href="#basictabHorizontal2" data-bs-toggle="tab" data-toggle="tab"
                                                   class="nav-link rounded-0 py-2" aria-selected="false" role="tab"
                                                   tabindex="-1">
                                                    Profile </a><!-- end nav-link -->
                                            </li>
                                            <!-- end nav-item -->
                                            <li class="nav-item" role="presentation">
                                                <a href="#basictabHorizontal3" data-bs-toggle="tab" data-toggle="tab"
                                                   class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                                   role="tab">
                                                    Social Links </a><!-- end nav-link -->
                                            </li>
                                            <!-- end nav-item -->
                                            <li class="nav-item" role="presentation">
                                                <a href="#basictabHorizontal4" data-bs-toggle="tab" data-toggle="tab"
                                                   class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1"
                                                   role="tab">
                                                    Finish </a><!-- end nav-link -->
                                            </li>
                                            <!-- end nav-item -->
                                        </ul>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="tab-content mb-0 ms-lg-3 ms-0 pt-lg-0">
                                            <div class="tab-pane active show" id="basictabHorizontal1" role="tabpanel">
                                                <h4 class="fs-16 fw-semibold mb-1">
                                                    Account
                                                    Information
                                                </h4>
                                                <p class="text-muted">
                                                    Setup your
                                                    account
                                                    information
                                                </p>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicUser2" class="form-label">User
                                                                Name</label>
                                                            <input id="basicUser2" type="text" class="form-control"
                                                                   placeholder="Enter User Name"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicEmail2" class="form-label">Email</label>
                                                            <input id="basicEmail2" type="email" class="form-control"
                                                                   placeholder="Enter your email"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicPassworda2"
                                                                   class="form-label">Password</label>
                                                            <input id="basicPassworda2" type="text" class="form-control"
                                                                   placeholder="Enter Password"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicConfirmPassword2" class="form-label">Confirm
                                                                Password</label>
                                                            <input id="basicConfirmPassword2" type="text"
                                                                   class="form-control"
                                                                   placeholder="Confirm a Password"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->

                                            <div class="tab-pane" id="basictabHorizontal2" role="tabpanel">
                                                <h4 class="fs-16 fw-semibold mb-1">
                                                    Profile
                                                    Information
                                                </h4>
                                                <p class="text-muted">
                                                    Setup your
                                                    profile
                                                    information
                                                </p>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="avatar-lg mb-3">
                                                            <div
                                                                class="avatar-title bg-body rounded-circle border border-3 border-dashed-light position-relative">
                                                                <label for="imageInput"
                                                                       class="position-absolute end-0 bottom-0">
                                                                    <div class="avatar-xs cursor-pointer">
                                                                    <span
                                                                        class="avatar-title bg-light text-dark rounded-circle"><i
                                                                            class="fe-camera"></i></span>
                                                                    </div>
                                                                </label>
                                                                <input class="d-none" type="file" id="imageInput"
                                                                       accept="image/*"/>

                                                                <img id="preview" src="/images/users/avatar-1.jpg"
                                                                     alt="Preview Image"
                                                                     class="rounded-circle img-fluid"/>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="basicFname2">First
                                                                        Name</label>
                                                                    <input type="text" id="basicFname2"
                                                                           class="form-control"
                                                                           placeholder="Chris"/>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="basicLname2">Last
                                                                        Name</label>
                                                                    <input type="text" id="basicLname2"
                                                                           class="form-control"
                                                                           placeholder="Keller"/>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                           for="basicMnumber2">Number</label>
                                                                    <input type="number" id="basicMnumber2"
                                                                           class="form-control"
                                                                           placeholder="Mobile Number"/>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                           for="basicCountry2">Country</label>
                                                                    <select id="basicCountry2" class="form-select">
                                                                        <option value="United States">
                                                                            United
                                                                            States
                                                                        </option>
                                                                        <option value="Canada">
                                                                            Canada
                                                                        </option>
                                                                        <option value="Australia">
                                                                            Australia
                                                                        </option>
                                                                        <option value="Germany">
                                                                            Germany
                                                                        </option>
                                                                        <option value="Bangladesh">
                                                                            Bangladesh
                                                                        </option>
                                                                        <option value="China">
                                                                            China
                                                                        </option>
                                                                        <option value="Argentina">
                                                                            Argentina
                                                                        </option>
                                                                        <option value="Bharat">
                                                                            Bharat
                                                                        </option>
                                                                        <option value="Afghanistan">
                                                                            Afghanistan
                                                                        </option>
                                                                        <option value="France">
                                                                            France
                                                                        </option>
                                                                        <option value="Brazil">
                                                                            Brazil
                                                                        </option>
                                                                        <option value="Belgium">
                                                                            Belgium
                                                                        </option>
                                                                        <option value="Colombia">
                                                                            Colombia
                                                                        </option>
                                                                        <option value="Albania">
                                                                            Albania
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->

                                            <div class="tab-pane" id="basictabHorizontal3" role="tabpanel">
                                                <h4 class="fs-16 fw-semibold mb-1">
                                                    Social Media
                                                    Links
                                                </h4>
                                                <p class="text-muted">
                                                    Fill your social
                                                    media links
                                                </p>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicGitLink2" class="form-label">GitHub</label>
                                                            <input id="basicGitLink2" type="text" class="form-control"
                                                                   placeholder="GitHub Link"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicGoogleLink2"
                                                                   class="form-label">Google</label>
                                                            <input id="basicGoogleLink2" type="text"
                                                                   class="form-control"
                                                                   placeholder="Google Link"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicInstagramLink3"
                                                                   class="form-label">Instagram</label>
                                                            <input id="basicInstagramLink3" type="text"
                                                                   class="form-control"
                                                                   placeholder="Instagram Link"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicSkypeLink4"
                                                                   class="form-label">Skype</label>
                                                            <input id="basicSkypeLink4" type="text" class="form-control"
                                                                   placeholder="Skype Link"/>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->

                                            <div class="tab-pane" id="basictabHorizontal4" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <div class="avatar-md mx-auto mb-3">
                                                                <div
                                                                    class="avatar-title bg-primary bg-opacity-10 text-primary rounded-circle">
                                                                    <i class="fe-thumbs-up fs-4"></i>
                                                                </div>
                                                            </div>
                                                            <h3 class="mt-0">
                                                                Finished
                                                                !
                                                            </h3>

                                                            <p class="w-75 mb-2 mx-auto">
                                                                Filled
                                                                Data
                                                                Successfully.
                                                            </p>

                                                            <div class="mb-3">
                                                                <div class="form-check d-inline-block">
                                                                    <input type="checkbox" class="form-check-input"
                                                                           id="customCheck2"/>
                                                                    <label class="form-check-label" for="customCheck2">I
                                                                        agree
                                                                        with
                                                                        the
                                                                        Terms
                                                                        and
                                                                        Conditions</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->

                                            <div
                                                class="d-flex flex-wrap align-items-center wizard justify-content-between gap-3 mt-3">
                                                <div class="first">
                                                    <a href="javascript:void(0);" class="btn btn-primary">
                                                        First
                                                    </a>
                                                </div>
                                                <div class="d-flex gap-2">
                                                    <div class="previous">
                                                        <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                            <i class="fe-arrow-left me-2"></i>Back To
                                                            Previous
                                                        </a>
                                                    </div>
                                                    <div class="next">
                                                        <a href="javascript:void(0);" class="btn btn-primary">
                                                            Next
                                                            Step<i class="fe-arrow-right ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="last">
                                                    <a href="javascript:void(0);" class="btn btn-primary">
                                                        Finish
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- tab-content -->
                                    </div>
                                </div>
                                <!-- end #horizontalwizard-->
                            </form>
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/form-wizard.init.js'])
@endsection
