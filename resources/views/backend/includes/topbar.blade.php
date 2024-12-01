<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-1">

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ url('/') }}" class="logo-light">
                    <img src="/images/logo-light.png" alt="logo" class="logo-lg">
                    <img src="/images/logo-sm.png" alt="small logo" class="logo-sm">
                </a>
                <a href="{{ url('/') }}" class="logo-dark">
                    <img src="/images/logo-dark.png" alt="dark logo" class="logo-lg">
                    <img src="/images/logo-sm.png" alt="small logo" class="logo-sm">
                </a>
            </div>
        </div>




        {{-- Right part of topnav --}}
        <ul class="topbar-menu d-flex align-items-center">
            <!-- User Dropdown -->
            <li style="padding-right:5%">
                <span class="ms-1 d-none d-md-inline-block text-white pr-5" > Geneva </span>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}" style="margin-block-end: 0px;">
                    @csrf
                    <a href="javascript:void(0);" class="dropdown-item notify-item text-white" onclick="event.preventDefault(); this.closest('form').submit();">
                        <span> </span>
                        <i class="fe-log-out"></i>
                    </a>
                </form>
            </li>
        </ul>

    </div>

    <div class="container-fluid">

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->
