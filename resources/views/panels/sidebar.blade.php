<div class="main-menu menu-fixed light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ asset('/') }}">
                    <div class="brand-logo">
                        <img src="{{ asset('images/logo/logo.png') }}" class="logo" alt="">
                    </div>
                    <h2 class="brand-text mb-0">
                        {{-- @if (!empty($configData['templateTitle']) && isset($configData['templateTitle']))
                            {{ $configData['templateTitle'] }}
                        @else --}}
                        Frest
                        {{-- @endif --}}
                    </h2>
                </a>
            </li>
            <!-- <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                    <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
            </li> -->
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            
            <li class=" nav-item">
                <a class=" nav-link ajax" href="/admin" data-toggle="dropdown" style="padding-right:0px;">
                    <div class="user-nav d-sm-flex d-none"></div>
                    <span><i class=""></i>List Admin</span>
                </a>
                <a class=" nav-link ajax" href="/pegawai" data-toggle="dropdown" style="padding-right:0px;">
                    <div class="user-nav d-sm-flex d-none"></div>
                    <span><i class=""></i>List Pegawai</span>
                </a>
            </li>
        </ul>
    </div>
</div>