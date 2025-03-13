<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
 <style>
    html, body {
    max-width: 100%;
    overflow-x: hidden;
}
 </style>
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-relative" style="min-height: 15vh;">
        <div class="container position-relative " style="margin-top: 30px;">
            <a class="navbar-brand fw-bold text-dark" href="#" style="font-size: 30px">TASTY FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-2">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="/kontak" tabindex="-1" aria-disabled="true">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="position-absolute top-0 end-0 d-none d-lg-block" style="height: 100%; overflow: visible;">
            <img src="img/img-4-2000x2000.png" alt="" style="height: 720%; width: auto; position: absolute; top: -170px; right: -170px; pointer-events: none;">
        </div>
    </nav>
    <div class="container-fluid bg-light" style="height: 70vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <hr style="color: black; width: 10%;" >
                    <P class="text-dark" style="font-size: 50px;">HEALTY</P>
                    <h3 class="fw-bold" style="font-size: 50px; margin-top: -20px;">TASTY FOOD</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium illum ex, suscipit eligendi iusto officia reiciendis aspernatur similique repellendus doloribus nulla, ab voluptates alias fugiat laboriosam fuga dolorem dignissimos? Nulla recusandae suscipit quasi porro, est aperiam voluptatem.</p>
                    <a href="/tentang">
                        <button class="fw-bold border-none text-light mt-3" style="height: 45px; width: 250px; font-size: 12px; background-color: black; border-radius: 0;">
                            TENTANG KAMI
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
      <main>
        <section class="container text-center d-flex justify-content-center" style="height: 300px;">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="margin-top: 50px;">
                        <h1 class="text-dark fw-bold">TENTANG KAMI</h1>
                        <p style="margin-top: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, iure architecto eius accusantium culpa sunt explicabo, distinctio dignissimos, repellat libero inventore excepturi ipsam voluptas qui possimus obcaecati perferendis aut est!
                        </p>
                        <hr style="color: black; width:15%; margin-top: 40px; margin-left: auto; margin-right: auto;">
                    </div>
                </div>
            </div>
        </section>
    <section>
    <div class="container-fluid bg-image" style="background-image: url('img/Group 70.png'); background-position: center; background-repeat: no-repeat; min-height: 70vh; margin-top: -15vh;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
                    <div class="card text-center  rounded-3 overflow-visible position-relative" style="width: 90%; max-width: 280px; margin-top: 100px; border-radius: ">
                        <div class="card-body position-relative mt-5">
                            <img src="img/img-1.png" alt="" class="img-fluid position-absolute top-0 start-50 translate-middle-x" style="width: 80%; margin-top: -150px;">
                            <div class="py-3">
                                <h5 class="card-title fw-bold fs-5 mt-5">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ducimus?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
                    <div class="card text-center rounded-3 overflow-visible position-relative" style="width: 90%; max-width: 280px; margin-top: 100px;">
                        <div class="card-body position-relative mt-5">
                            <img src="img/img-2.png" alt="" class="img-fluid position-absolute top-0 start-50 translate-middle-x" style="width: 80%; margin-top: -150px;">
                            <div class="py-3">
                                <h5 class="card-title fw-bold fs-5 mt-5">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ducimus?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
                    <div class="card text-center rounded-3 overflow-visible position-relative" style="width: 90%; max-width: 280px; margin-top: 100px;">
                        <div class="card-body position-relative mt-5">
                            <img src="img/img-3.png" alt="" class="img-fluid position-absolute top-0 start-50 translate-middle-x" style="width: 80%; margin-top: -150px;">
                           <div class="py-3">
                                <h5 class="card-title fw-bold fs-5 mt-5">LOREM IPSUM</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ducimus?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center">
                    <div class="card text-center rounded-3 overflow-visible position-relative" style="width: 90%; max-width: 280px; margin-top: 100px;">
                        <div class="card-body position-relative mt-5">
                            <img src="img/img-4.png" alt="" class="img-fluid position-absolute top-0 start-50 translate-middle-x" style="width: 80%; margin-top: -150px;">
                            <h5 class="card-title fw-bold fs-5 mt-5">LOREM IPSUM</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, doloribus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid bg-light">
    <div class="container">
        <h1 class="text-center fw-bold py-5">BERITA KAMI</h1>
        <div class="row g-4">

            <div class="col-lg-6 col-md-12">
                <div class="card shadow h-100" style="border: none; border-radius: 40px;">
                    <img src="{{ asset('storage/' . $beritasTerbaru->foto) }}" class="card-img-top"
                        alt="Berita Terbaru"
                        style="width: 100%; height: 400px; object-fit: cover; border-top-left-radius: 40px; border-top-right-radius: 40px;">
                    <div class="card-body bg-white" style="border-radius: 30px">
                        <h5 class="card-title fw-bold">{{ $beritasTerbaru->judul }}</h5>
                        <p class="card-text">{{ Str::limit($beritasTerbaru->informasi, 200, '...') }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="/detailberita/{{ $beritasTerbaru->id }}" class="text-decoration-none text-warning">
                                Baca selengkapnya
                            </a>
                            <i class="fas fa-ellipsis-h text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita Lainnya -->
            <div class="col-lg-6 col-md-12">
                <div class="row g-3">
                    @foreach ($beritasLainnya->chunk(2) as $row)
                        @foreach ($row as $beritaLainnya)
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card shadow h-100" style="border: none; border-radius: 20px;">
                                <img src="{{ asset('storage/' . $beritaLainnya->foto) }}" class="card-img-top"
                                    alt="Berita Lainnya"
                                    style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ Str::limit($beritaLainnya->judul, 50, '...') }}</h5>
                                    <p class="card-text">{{ Str::limit($beritaLainnya->informasi, 70, '...') }}</p>
                                    <a href="/detailberita/{{ $beritaLainnya->id }}" class="text-decoration-none text-warning">
                                        Baca selengkapnya
                                    </a>
                                    <i class="fas fa-ellipsis-h text-secondary float-end"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
                <h1 class="text-center fw-bold py-5" >GALERI KAMI</h1>
                <div class="container">
                    <div class="row g-2">
                        @foreach ($galerisTerbaru as $gambar)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <img src="{{ asset('storage/gambar/' . $gambar->gambar) }}" alt=""
                                style="border-radius: 3%; object-fit: cover; width: 100%; height: 400px;">
                        </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="/galeri">
                            <button class="text-white bg-dark" style="height: 50px; width: 300px;">LIHAT LEBIH BANYAK</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div style="height: 50px;"></div>
        @extends('footer')
        @section('footer')
        @endsection
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
