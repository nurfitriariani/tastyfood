<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }
</style>
<body>
    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK',
                // willClose: () => {
                //     // This will allow the page to refresh after the alert is closed
                //     location.reload();
                // }
            });
        </script>
    @endif
    @if(session('error'))
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: "{{ session('error') }}",
            icon: 'error',
            confirmButtonText: 'OK',
            timer: 3000, // Menampilkan alert selama 3 detik
            timerProgressBar: true
        });
    </script>
@endif
    <main>
        <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="img/img-4-2000x2000.png"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <form action="/auth" method="POST">
                    @csrf
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>

                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-floating mx-1">
                        <i class="fab fa-linkedin-in"></i>
                      </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                      <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>
                    @if(session('error'))
                    <div id="error-message" class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>

                    <script>
                        setTimeout(function() {
                            // Gunakan jQuery untuk animasi fade-out
                            $('#error-message').fadeOut();
                        }, 3000); // 3 detik
                    </script>
                     @endif



                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required/>
                        <label class="form-label mt-3" for="form3Example3">Email address</label>
                    </div>
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" required/>
                        <label class="form-label mt-3" for="form3Example4">Password</label>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                      <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                          class="link-danger">Register</a></p>
                    </div>

                  </form>
                  {{-- <form action="/auth" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required/>
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" required/>
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <!-- Tombol Login -->
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                </form> --}}
                </div>
              </div>
            </div>
            <div
              class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-black">
              <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
              </div>
              <div>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
