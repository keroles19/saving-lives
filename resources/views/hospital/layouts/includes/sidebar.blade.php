<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
             href="{{route('hospital.dashboard')}}"><span class="brand-logo">
                    <h2 class="brand-text">{{env('APP_NAME')}}</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
     <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!--  Start SideBar     -->
            <li class=" nav-item {{ Route::is('hospital.dashboard') ? 'active' : ''  }} ">
                <a class="d-flex align-items-center "
                   href="{{route('hospital.dashboard')}}">
                    <i data-feather="box"></i><span class="menu-title text-truncate"
                    data-i18n="Form Layout">Dashboard</span></a>
            </li>
            <li class=" nav-item {{ Route::is('hospital.donor') ? 'active' : ''  }}">
                <a class="d-flex align-items-center" href="{{route('hospital.donor')}}">
                    <i data-feather="package"></i><span class="menu-title text-truncate"
                data-i18n="Form Wizard">Donor</span></a>
            </li>
            <li class=" nav-item {{ Route::is('hospital.receiver') ? 'active' : ''  }}">
                <a class="d-flex align-items-center" href="{{route('hospital.receiver')}}">
                    <i data-feather="check-circle"></i>
                    <span class="menu-title text-truncate" data-i18n="Form Validation">
                        Receiver</span></a>
            </li>
            <li class=" nav-item {{ Route::is('hospital.obligation') ? 'active' : ''  }}">
                <a class="d-flex align-items-center" href="{{route('hospital.obligation')}}">
                    <i data-feather="rotate-cw"></i><span class="menu-title text-truncate"
             data-i18n="Form Repeater">Check Obligation</span></a>
            </li>

            <li class=" nav-item {{ Route::is('hospital.show-operation') ? 'active' : ''  }}">
                <a class="d-flex align-items-center" href="{{route('hospital.show-operation')}}">
                    <i data-feather="check-circle"></i><span class="menu-title text-truncate"
             data-i18n="Form Repeater">Make Operation</span></a>
            </li>
            <!-- End SideBar -->
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
