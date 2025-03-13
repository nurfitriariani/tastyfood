<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>

</head>

<nav class="navbar navbar-expand-sm text-white" style="height: 700px; background-image: url('{{ asset('img/Group 70.png') }}');">
    <div class="container" style=" margin-bottom: 25%;" >
        <div class="navbar-brand fw-bolder" style="font-size: 40px; ">TASTY FOOD</div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end "  >
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/home" class="nav-link active text-white" style="margin-right: 50px;">HOME</a>
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
    <h1 class="fw-bolder" style="font-size: 60px; position: absolute; right: 30px; top: 55%; transform: translateY(-50%); margin-right: 50%;">{{ $beritas->judul }}</h1>
</nav>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $beritas->foto) }}" class="img-fluid" alt="Gambar Berita" style="height: 400px; object-fit: cover; width:100%; ">
            </div>
            <div class="col-md-6">
                <p class="mt-2">{{ $beritas->informasi }}</p>
                <a href="/berita" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    @extends('footer')
        @section('footer')
        @endsection
</body>
</html>
