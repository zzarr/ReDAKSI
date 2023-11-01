<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Dashboard</title>
</head>

<body>

  <header class="shadow navbar sticky-top bg-dark flex-md-nowrap p-0 " data-bs-theme="dark">
    <a class="navbar-brand bg-dark col-md-3 col-lg-2 me-0 px-2 fs-6 text-white p-2" href="#">
      <img src="{{ asset('img/Logo.png') }}" alt="logo" width="40" height="40"><span class="fs-6 d-none d-sm-inline py-3"> SMP MKGR
      </span>
    </a>
    <button class="navbar-toggler m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <i class="fa-solid fa-user"></i>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Username</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <hr>
          <li class="nav-link">
            <a href="" class="nav-link">
              Logout
            </a>
          </li>
        </ul>
      </div>
  </header>


  <div class="container-fluid ">
    <div class="row flex-nowrap">
      <nav class="bg-dark col-auto col-md-2 min-vh-100 ">
        <ul class="nav nav-pills flex-column mt-4 g-2">
          <li class="nav-item p-2 d">
            <a href="" class="nav-link text-white bg-warning rounde">
              <i class="fa-solid fa-gauge"></i><span class=" m-3 ">Dashboard</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class=" nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><i class="fa-solid fa-folder-tree"></i>
              <span>Arsip</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-black" href="#">Keuangan</a></li>
              <li><a class="dropdown-item text-black" href="#">Laporan Keuangan</a></li>
              <li><a class="dropdown-item text-black" href="#">Laporan Keuangan</a></li>
              <li><a class="dropdown-item text-black" href="#">Laporan Keuangan</a></li>
              <li><a class="dropdown-item text-black" href="#">Laporan Keuangan</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link text-decoration-none ">File</a>
          </li>
        </ul>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <p>pppp</p>
      </main>
    </div>
  </div>
  </div>





  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/all.js') }}"></script>
</body>

</html>