<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables-1.13.4/css/jquery.dataTables.min.css') }}">
    @vite(['resources/js/app.js'])
    <title></title>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a href="/" class="d-flex align-items-center mb-lg-0 text-decoration-none mb-2 text-white">
            <img src="{{ asset('img/Logo2.png') }}" alt="" srcset="" width="40px" height="40px"
                class="mx-3">
        </a>
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">SMP MKGR</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-lg-0 me-lg-0 order-1 me-4" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-md-0 me-lg-4 me-3 ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav p-2">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link btn btn-outline-warning" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{ route('account') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            akun
                        </a>
                        <a class="nav-link" href="{{ route('folder') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-folder"></i></div>
                            Arsip
                        </a>
                        <hr class="my-4">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-tree"></i></div>
                            Arsip
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/arsip">kurikulum</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Sarana prasarana</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.js"
            crossorigin="anonymous"></script>

        <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
