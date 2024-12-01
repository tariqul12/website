<!-- ========== Left Sidebar Start ========== -->
<div class="app-menu">

    <div class="logo-box">
        <a href="{{ route('home', 'index') }}" class="logo-light">
            <img src="/images/logo-light.png" alt="logo" class="logo-lg">
            <img src="/images/logo-sm.png" alt="small logo" class="logo-sm">
        </a>
        <a href="{{ route('home', 'index') }}" class="logo-dark">
            <img src="/images/logo-dark.png" alt="dark logo" class="logo-lg">
            <img src="/images/logo-sm.png" alt="small logo" class="logo-sm">
        </a>
    </div>

    <div class="scrollbar h-100" data-simplebar>


        <!--- Sidemenu -->

        <ul id="side-menu" class="menu">

            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link"><span class="menu-text">Dashboard </span></a>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">  <a class="menu-link" href="{{ route('abouts.index') }}"><span  class="menu-text">Abouts</span></a></li>
            <li class="menu-item">  <a class="menu-link" href="{{ route('contacts.index') }}"><span  class="menu-text">Contacts</span></a></li>

            <li class="menu-item">
                <a href="#sidebarservices" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> Services </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarservices">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('services.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('services.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#categories" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> Category </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="categories">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('categories.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('categories.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#sidebarpackages" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> Packages </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarpackages">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('packages.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('packages.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#sidebarclients" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> clients </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarclients">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('clients.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('clients.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#sidebarteams" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> teams </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarteams">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('teams.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('teams.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#sidebarbanner" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> Banner </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarbanner">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('banners.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('banners.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#sidebarfrequents" data-bs-toggle="collapse" class="menu-link"><span class="menu-icon"><i data-feather="shopping-cart"></i></span><span class="menu-text"> frequents </span> <span class="menu-arrow"></span></a>
                <div class="collapse" id="sidebarfrequents">
                    <ul class="sub-menu">
                        <li class="menu-item">  <a class="menu-link" href="{{ route('frequents.index') }}"><span  class="menu-text">View</span></a></li>
                        <li class="menu-item">  <a class="menu-link" href="{{ route('frequents.create') }}"><span  class="menu-text">Create</span></a></li>
                    </ul>
                </div>
            </li>


            <li class="menu-item">  <a class="menu-link" href="{{ route('tconditons.index') }}"><span  class="menu-text">Terms & Conditons</span></a></li>
            <li class="menu-item">  <a class="menu-link" href="{{ route('policies.index') }}"><span  class="menu-text">Policies</span></a></li>

        </ul>

        {{-- </div> --}}
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
