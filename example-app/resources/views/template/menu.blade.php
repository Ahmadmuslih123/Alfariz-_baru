<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        admin
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('tentang')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tentang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('datapenumpang')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Penumpang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('armada')}}">
            <i class="fas fa-fw fa-car"></i>
            <span>Armada</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('beranda')}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('perjalanan')}}">
            <i class="fas fa-fw fa-route"></i>
            <span>Jenis Perjalanan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
