<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>{{ $title }}</title>
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img
              src="{{ asset('img/image_school.jpg') }}"
              alt="Login image"
              class="w-100 vh-100 align-item-start"
              style="object-fit: cover"
              ;
            />
          </div>
          <div class="col-sm-6 text-black">
            <div class="container-fluid my-5">
              <div class="logo">
                <div class="px-5 ms-xl-4">
                  <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 14%" />
                  <span class="h3 fw-normal mx-3 pt-5 text-uppercase"
                    >SMP MKGR</span
                  >
                </div>
              </div>

              <div class="login">
                <div
                  class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-xl-0 mt-xl-n5"
                >
                  <form>
                    <h2 class="fw-normal mb-4 pb-4 text-dark">Log in</h2>

                    <div class="form-outline mb-4">
                      <label class="mx-4 fs-6 fw-bold">Username</label>
                      <input
                        type="text"
                        id="input"
                        class="custom-input form-control form-control-lg bg-transparent text-dark"
                      />
                    </div>

                    <div class="form-outline mb-5">
                      <input
                        type="password"
                        id="input"
                        class="custom-input form-control form-control-lg bg-transparent text-dark position-relative"
                        placeholder="password"
                      />
                    </div>

                    <div class="form-outline mb-4">
                      <input
                        type="submit"
                        id="submit"
                        class="custom-input form-control form-control-lg bg-primary text-white"
                        value="LOGIN"
                        style="letter-spacing: 2px"
                      />
                    </div>

                    <p class="small mb-5 pb-lg-2">
                      <a class="text-muted-primary" href="#!"
                        >Forgot password?</a
                      >
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
