<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-sm text-white" style="height: 700px; background-image: url(img/Group\ 70.png);">
        <div class="container" style=" margin-bottom: 30%;" >
            <div class="navbar-brand fw-bolder" style="font-size: 40px;">TASTY FOOD</div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end "  >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link active text-white" style="margin-right: 50px;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tentang" class="nav-link active text-white" style="margin-right: 50px;">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a href="/berita" class="nav-link active text-white" style="margin-right: 50px;">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a href="/galeri" class="nav-link active text-white" style="margin-right: 50px;" >GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a href="/kontak" class="nav-link active text-white">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="fw-bolder" style="font-size: 60px; position: absolute; right: 30px; top: 55%; transform: translateY(-50%); margin-right: 65%;">GALERI KAMI</h1>
    </nav>
    <main>
        <section>
            <div class="container-fluid">
                <div class="container-fluid bg-light" style="width: 100%; height: 600px;">
                    <div class="row justify-content-center">
                        <div class="col-10 mt-5">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-inner">
                                    @foreach ($galeris as $key => $gambar)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/gambar/' . $gambar->gambar) }}" class="d-block w-100" style="height: 500px; object-fit: cover; border-radius: 15px;" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <div class="container">
            {{-- <div class="row">
              <div class="col-3 mt-5">
                <img src="img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px;">
              </div>
              <div class="col-3 mt-5" >
                <img src="img/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-5">
                <img src="img/brooke-lark-1Rm9GLHV0UA-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-5">
                <img src="img/brooke-lark-nBtmglfY0HU-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px;">
              </div>
            </div> --}}
            {{-- <div class="row">
              <div class="col-3 mt-3">
                <img src="img/brooke-lark-oaz0raysASk-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
            </div> --}}
            {{-- <div class="row">
              <div class="col-3 mt-3">
                <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px;">
              </div>
              <div class="col-3 mt-3">
                <img src="img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="" height="300px" width="300px" style="border-radius: 15px; object-fit: cover;">
              </div>
            </div> --}}
            <div class="row">
                @foreach ($galeris as $key => $gambar)
                    <div class="col-12 col-md-3  mt-3">
                        <img
                            src="{{ asset('storage/gambar/' . $gambar->gambar) }}"
                            alt="Gambar {{ $key + 1 }}"
                            width="100%"
                            height="300px"
                            style="border-radius: 15px; object-fit: cover;">
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $galeris->links('pagination::bootstrap-5') }}
            </div>
          </div>
    </main>
    @extends('footer')
    @section('footer')
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
