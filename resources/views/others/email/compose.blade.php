@extends('layouts.vertical', ['title' => 'Email Compose'])

@section('css')
    @vite(['node_modules/quill/dist/quill.core.css', 'node_modules/quill/dist/quill.snow.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.shared.page-title' , ['title' => 'Compose','subtitle' => 'Email'])

        <!-- Right Sidebar -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Left sidebar -->
                        <div class="inbox-leftbar">

                            <a href="{{ route('second', ['email', 'inbox']) }}" class="btn btn-danger w-100 waves-effect waves-light">Inbox</a>

                            <div class="mail-list mt-4">
                                <a href="javascript: void(0);" class="text-danger fw-bold"><i class="dripicons-inbox me-2"></i>Inbox<span class="badge badge-soft-danger float-end ms-2">7</span></a>
                                <a href="javascript: void(0);"><i class="dripicons-star me-2"></i>Starred</a>
                                <a href="javascript: void(0);"><i class="dripicons-clock me-2"></i>Snoozed</a>
                                <a href="javascript: void(0);"><i class="dripicons-document me-2"></i>Draft<span class="badge badge-soft-info float-end ms-2">32</span></a>
                                <a href="javascript: void(0);"><i class="dripicons-exit me-2"></i>Sent Mail</a>
                                <a href="javascript: void(0);"><i class="dripicons-trash me-2"></i>Trash</a>
                                <a href="javascript: void(0);"><i class="dripicons-tag me-2"></i>Important</a>
                                <a href="javascript: void(0);"><i class="dripicons-warning me-2"></i>Spam</a>
                            </div>

                            <h6 class="mt-4">Labels</h6>

                            <div class="list-group b-0 mail-list">
                                <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-info me-2"></span>Web App</a>
                                <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-warning me-2"></span>Recharge</a>
                                <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-dark me-2"></span>Wallet Balance</a>
                                <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-primary me-2"></span>Friends</a>
                                <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success me-2"></span>Family</a>
                            </div>

                        </div>
                        <!-- End Left sidebar -->

                        <div class="inbox-rightbar">

                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18"></i></button>
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18"></i></button>
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18"></i></button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-folder font-18"></i>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Move to</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-label font-18"></i>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Label as:</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal font-18"></i> More
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">More Option :</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                </div>
                            </div>

                            <div class="mt-4">
                                <form>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="To">
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="mb-3 card border-0">
                                        <div id="snow-editor" style="height: 230px;">
                                            <h3><span class="ql-size-large">Hello World!</span></h3>
                                            <p><br></p>
                                            <h3>This is an simple editable area.</h3>
                                            <p><br></p>
                                            <ul>
                                                <li>
                                                    Select a text to reveal the toolbar.
                                                </li>
                                                <li>
                                                    Edit rich document on-the-fly, so elastic!
                                                </li>
                                            </ul>
                                            <p><br></p>
                                            <p>
                                                End of simple area
                                            </p>
                                        </div> <!-- end Snow-editor-->
                                    </div>

                                    <div>
                                        <div class="text-end">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-content-save-outline"></i></button>
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-delete"></i></button>
                                            <button class="btn btn-primary waves-effect waves-light"> <span>Send</span> <i class="mdi mdi-send ms-2"></i> </button>
                                        </div>
                                    </div>

                                </form>
                            </div> <!-- end card-->

                        </div>
                        <!-- end inbox-rightbar-->

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- end Col -->

        </div><!-- End row -->

    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/compose.init.js'])
@endsection
