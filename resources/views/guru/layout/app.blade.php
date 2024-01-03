<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables-1.13.4/css/jquery.dataTables.min.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>



    <title>{{ isset($webtitle) ? $webtitle : 'ReDAKSI' }}</title>
</head>

<body class="fixed">
    <!--Navbar Section-->
    <nav class="bg-dark grid h-14 w-screen grid-cols-1">
        <div class="my-auto flex">
            <!--Navbar Logo-->
            <a href="{{ route('DashboardGuru') }}" class="my-auto">
                <img src="{{ asset('img/Logo2.png') }}" alt="Logo MKGR" class="mx-3 h-10 w-10">
            </a>
            <a href="{{ route('DashboardGuru') }}" class="my-auto ps-3 text-lg text-white">SMP MKGR</a>
            <button class="mr-4 ms-auto" id="sidebarToggle" href="#!">
                <i class="fas fa-bars w-3 text-slate-400"></i>
            </button>
            <ul class="my-auto hidden md:flex">
                <li class="relative my-auto">
                    <a class="my-auto" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-user fa-fw w-3 text-slate-400"></i>
                    </a>
                    <div class="relative mr-12 inline-block">
                        <button type="button" id="dropdownButton" class="focus:outline-none">
                            <i class="fa-solid fa-caret-down text-slate-400"></i>
                        </button>
                        <div class="absolute right-0 mt-2 hidden w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"
                            role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                            <div class="py-1" role="none">
                                <a href="#!"
                                    class="whitespace-no-wrap block w-full border-0 px-6 py-1 font-normal text-gray-900"
                                    role="menuitem">Settings</a>
                                <a href="#!"
                                    class="whitespace-no-wrap block w-full border-0 px-6 py-1 font-normal text-gray-900"
                                    role="menuitem">Activity Log</a>
                                <hr class="border-t-1 my-2 h-0 overflow-hidden border-gray-300" role="none" />
                                <a href="#!"
                                    class="whitespace-no-wrap block w-full border-0 px-6 py-1 font-normal text-gray-900"
                                    role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="bg-dark fixed hidden h-screen md:inline-block md:w-56">
        <p class="mx-auto mb-4 h-14 w-52 px-3 pb-4 pt-9 text-xs font-bold text-slate-500">CORE</p>
        <div class="mx-auto flex h-12 w-52 items-center rounded-lg bg-yellow-400">
            <a href="{{ route('DashboardGuru') }}"
                class="nav-link {{ $webtitle == 'Dashboard' ? 'active bg-yellow-400' : 'btn btn-outline-yellow-400' }} mx-3 flex rounded text-white">
                <div><i class="fa-solid fa-gauge-high mr-2 w-5 text-white"></i></div>
                <p class="text-base font-semibold">Dashboard</p>
            </a>
        </div>
    </div>
    <div id="layoutSidenav_content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.js"
        crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
