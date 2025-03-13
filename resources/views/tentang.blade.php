<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark position-relative"
     style="background-image: url('img/Group 70.png');
            background-size: cover;
            background-position: center;
            height: 650px;">
    <div class="container" style="margin-bottom: 30%;">
        <a class="navbar-brand fw-bolder" href="#" style="font-size: 40px;">TASTY FOOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
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
                    <a href="/galeri" class="nav-link active text-white" style="margin-right: 50px;">GALERI</a>
                </li>
                <li class="nav-item">
                    <a href="/kontak" class="nav-link active text-white">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Judul "TENTANG KAMI" tetap responsif -->
    <h1 class="fw-bolder text-white text-center w-100"
        style="font-size: 60px; position: absolute; right: 30px; top: 55%; transform: translateY(-50%);
               margin-right: 60%; white-space: nowrap;">
        TENTANG KAMI
    </h1>
</nav>

<div class="container-fluid bg-light" style="height: auto; width: 100%; overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Teks di Kiri -->
            <div class="col-12 col-md-6 mt-4">
                <h1 class="mb-4 fw-bolder">TASTY FOOD</h1>
                <p class="fw-bold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro consequuntur sapiente recusandae voluptatum inventore eveniet deleniti, cumque doloribus quidem. Expedita, obcaecati.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores doloribus sint a sit vero, eaque earum incidunt fugiat consequatur ab praesentium impedit nobis expedita veniam.
                </p>
            </div>
            <!-- Gambar di Kanan -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="d-flex flex-row gap-3">
                    <img src="img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" class="img-fluid rounded-3"
                         style="max-height: 400px; width: 100%; max-width: 280px; object-fit: cover;">
                    <img src="img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" class="img-fluid rounded-3"
                         style="max-height: 400px; width: 100%; max-width: 280px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
    <section style="background-color: white; padding: 50px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex gap-3">
                    <div style="width: 50%; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                    </div>
                    <div style="width: 50%; height: 250px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4" style="font-weight: bold; font-size: 24px;">VISI</h2>
                    <p style="color: #555; line-height: 1.8; font-size: 13px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae optio labore exercitationem eius harum iusto aspernatur voluptatum nobis nihil corporis, ullam explicabo laudantium dicta expedita iure facere, inventore illo. Quasi voluptas error nobis molestiae accusantium, modi illo porro illum architecto dolorum debitis veritatis doloribus saepe earum tempora quibusdam a amet sapiente! Aspernatur quaerat magnam illum laborum autem. Dignissimos, ratione similique tempora in veniam, perspiciatis, at ipsam nam maxime debitis nemo.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4" style="font-weight: bold; font-size: 24px; margin-top: 20%">MISI</h2>
                    <p style="color: #555; line-height: 1.8; font-size: 13px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae optio labore exercitationem eius harum iusto aspernatur voluptatum nobis nihil corporis, ullam explicabo laudantium dicta expedita iure facere, inventore illo. Quasi voluptas error nobis molestiae accusantium, modi illo porro illum architecto dolorum debitis veritatis doloribus saepe earum tempora quibusdam a amet sapiente! Aspernatur quaerat magnam illum laborum autem. Dignissimos, ratione similique tempora in veniam, perspiciatis, at ipsam nam maxime debitis nemo.
                    </p>
                </div>
                <div class="col-md-6 d-flex gap-3">
                    <div style="width: 200vh; height: 250px; border-radius: 12px; overflow: hidden; margin-top: 20%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); position: relative;">
                        <img src="img/sanket-shah-SVA7TyHxojY-unsplash.jpg" style="width: 100%; height: 100%; object-fit: cover; position: absolute;" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    @extends('footer')
    @section('footer')
    @endsection

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
