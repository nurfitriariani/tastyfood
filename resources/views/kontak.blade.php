<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>


@if(session('error'))
<script>
    Swal.fire({
        title: 'Gagal!',
        text: "{{ session('error') }}",
        icon: 'error',
        confirmButtonText: 'OK',
        confirmButtonColor: '#373A3C',
    });
</script>
@endif

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
        <h1 class="fw-bolder" style="font-size: 60px; position: absolute; right: 30px; top: 55%; transform: translateY(-50%); margin-right: 63%;">KONTAK KAMI</h1>
    </nav>
    <main>
        <section>
            <div class="container-fluid d-flex m-5">
                <div class="container">
                    <h1 class="fw-bold">KONTAK KAMI</h1>
                    <div class="row">
                        <div class="col-6 mt-5">

                            <form action="/kontak" method="POST">
                                @csrf
                                <div class="mb-3">

                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Masukkan Subject" style="height: 80px;" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" style="height: 80px;" required>
                                </div>

                                <div class="mb-3">

                                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" style="height: 80px;" required>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5">
                                <div class="mb-3">
                                    <textarea name="message" id="message" class="form-control" placeholder="Masukkan Pesan" style="height: 270px; width: 550px;" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 p-2 text-white" style="height: 50px; background-color: black; width: 200px;">KIRIM</button>
                    </form>
                </div>
            </div>
        </section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="contact-item">
                        <img src="img/Group 66.png" alt="Email" width="20%">
                        <h4 class="fw-bold mt-3">EMAIL</h4>
                        <p>{{ $contact->email}}</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="contact-item">
                        <img src="img/Group 67.png" alt="Phone" width="20%">
                        <h4 class="fw-bold mt-3">PHONE</h4>
                        <p>{{ $contact->phone}}</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="contact-item">
                        <img src="img/Group 68.png" alt="Location" width="20%">
                        <h4 class="fw-bold mt-3">LOCATION</h4>
                        <p>{{ $contact->location }}</p>
                    </div>
                </div>
                <div class="container mt-5 bg-light" style="height: 500px; width: 100%; padding: 0;">
                    <div class="row h-100">
                        <div class="col-md-12 h-100">
                            <div class="maps" style="height: 100%; width: 100%;">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_MAPS_API_KEY') }}&q={{ urlencode($contact->location) }}"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 50px;"></div>

        @extends('footer')
        @section('footer')
        @endsection

    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#373A3C',
        });
    </script>
</body>
</html>
