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
    <title>{{ isset($webtitle) ? $webtitle : 'ReDAKSI' }}</title>
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
        <button class="btn btn-link btn-sm order-lg-0 me-lg-0 order-1 me-4 ms-auto" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-md-0 me-lg-4 me-3 ms-auto">
            <li class="nav-item dropdown ms-auto">
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
                        <a class="nav-link {{ $webtitle == 'Dashboard' ? 'active bg-warning ' : 'btn btn-outline-warning' }} mt-2 rounded"
                            href="{{ route('Dashboard_user') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge-high"></i></div>
                            Dashboard
                        </a>

                        <hr class="my-4">



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
