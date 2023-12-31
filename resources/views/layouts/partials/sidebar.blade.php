<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="/Dashboard/Konser" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-sm.png') }}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <h3 class="text-dark my-4">PESAT.COM</h3>
        </span>
    </a>
    <!-- Light Logo-->
    <a href="/Dashboard/Konser" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-sm.png') }} " alt="" height="22">
        </span>
        <span class="logo-lg">
            <h3 class="text-white my-4">PESAT.COM</h3>
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item">
                <a href="/Dashboard/Konser" class="nav-link {{ Request::is('Dashboard/Konser*')?'active':'' }}"><i
                        class="ri-check-double-fill"></i><span data-key="t-dashboards">Daftar Konser</span>
                </a>
            </li> <!-- end Dashboard Menu -->

            @can('admin')
            <li class="menu-title"><span data-key="t-menu">Menu Admin</span></li>
            <li class="nav-item">
                <a href="/Dashboard/Admin" class="nav-link {{ Request::is('Dashboard/Admin*')?'active':'' }}"><i
                        class="ri-ticket-2-fill"></i> <span data-key="t-dashboards">Pesanan Tiket</span>
                </a>
            </li> <!-- end Dashboard Menu -->
            @endcan
            @can('user')
            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

            <li class="nav-item">
                <a href="/Dashboard/MyTiket" class="nav-link {{ Request::is('Dashboard/MyTiket*')?'active':'' }}">
                    <i class="ri-check-double-fill"></i> <span data-key="t-dashboards">My Tiket</span>
                </a>
            </li> <!-- end Dashboard Menu -->

            <li class="nav-item">
                <a class="nav-link menu-link" target="_blank" href="/">
                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing Portal</span>
                </a>
            </li>

            @endcan


        </ul>
    </div>
    <!-- Sidebar -->
</div>