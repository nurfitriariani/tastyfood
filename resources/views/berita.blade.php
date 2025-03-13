<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-sm text-white" style="height: 700px; background-image: url(img/Group\ 70.png);">
        <div class="container" style=" margin-bottom: 30%;" >
            <div class="navbar-brand fw-bolder" style="font-size: 40px; ">TASTY FOOD</div>
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
        <h1 class="fw-bolder" style="font-size: 60px; position: absolute; right: 30px; top: 55%; transform: translateY(-50%); margin-right: 66%;">BERITA KAMI</h1>
    </nav>
    <main>
        <section>
            <div class="container-fluid bg-light" style="height: 700px; width: 100%;">
                <div class="container">
                <div class="row">
                    <div class="col-6 mt-5">
                        <img src="{{ asset('storage/' . $beritasTerbaru->foto) }}" alt="" width="100%" height="600px" style="border-radius: 10%; object-fit: cover;">
                    </div>
                    <div class="col-6 mt-5" >
                        <h2 class="fw-bold ms-5" style="margin-top: 7%; ">{{ $beritasTerbaru->judul }}</h2>
                        <p class="ms-5 mt-5">{{ Str::limit($beritasTerbaru->informasi, 200, '...') }}</p>
                        <p class="ms-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ut animi tenetur excepturi est autem inventore iure id quam dolore aspernatur doloremque ratione dicta, ipsa maxime provident quae nisi sit.</p>
                        <a href="/detailberita/{{ $beritasTerbaru->id }}">
                            <button class=" bg-dark text-white ms-5 mt-5" style="height: 50px; width: 200px;">BACA SELENGKAPNYA</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container">
                    <h1 class="fw-bold mt-5">BERITA LAINNYA</h1>
                        <div class="row mt-2">
                            @foreach ($beritas as $key => $berita)
                                <div class="col-3 mt-5">
                                    <div class="card shadow" style="border: none; width: 300px; border-radius:20px;">
                                        <img src="{{ asset('storage/' . $berita->foto) }}" class="card-img-top" alt="Gambar Berita" style="height: 200px; object-fit: cover;  border-top-left-radius: 20px;  border-top-right-radius: 20px;">

                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ Str::limit($berita->judul, 20) }}</h5> <!-- Maksimal 30 karakter -->

                                            <p class="card-text">{{ Str::limit($berita->informasi, 60) }}</p> <!-- Maksimal 60 karakter -->

                                            <a href="/detailberita/{{ $berita->id }}" class="text-decoration-none text-warning">Baca selengkapnya</a>
                                            <i class="fas fa-ellipsis-h text-secondary" style="margin-left: 35%"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            {{ $beritas->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @extends('footer')
        @section('footer')
        @endsection
    </main>
</body>
</html>

