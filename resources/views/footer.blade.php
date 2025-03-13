<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>
<body>
    <section>
        <div class="container-fluid bg-black py-5">
            <div class="container">
                <div class="row d-flex align-items-start">
                    <div class="col-12 col-md-4 text-white mt-3">
                        <h2 class="fw-bold">Tasty Food</h2>
                        <p class="mt-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi eveniet repellat quidem error aperiam veritatis non repudiandae deserunt laborum, minus explicabo obcaecati magnam eligendi eaque!
                        </p>
                        <div class="footer-social mt-4 d-flex">
                            <img src="img/001-facebook.png" alt="Facebook" class="me-3">
                            <img src="img/002-twitter.png" alt="Twitter">
                        </div>
                    </div>
                    <div class="col-12 col-md-2 text-white mt-3">
                        <h2 class="fw-bold">Useful links</h2>
                        <ul class="list-unstyled mt-3">
                            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
                            <li class="mt-3"><a href="#" class="text-white text-decoration-none">Hewan</a></li>
                            <li class="mt-3"><a href="/galeri" class="text-white text-decoration-none">Galeri</a></li>
                            <li class="mt-3"><a href="#" class="text-white text-decoration-none">Testimonial</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 text-white mt-3">
                        <h2 class="fw-bold">Privacy</h2>
                        <ul class="list-unstyled mt-3">
                            <li><a href="#" class="text-white text-decoration-none">Karir</a></li>
                            <li class="mt-3"><a href="/tentang" class="text-white text-decoration-none">Tentang Kami</a></li>
                            <li class="mt-3"><a href="/kontak" class="text-white text-decoration-none">Kontak Kami</a></li>
                            <li class="mt-3"><a href="#" class="text-white text-decoration-none">Servis</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 text-white mt-3">
                        <h2 class="fw-bold">Contact Info</h2>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-3 d-flex align-items-center">
                                <img src="img/Group 66.png" alt="Email" style="width: 30px;">
                                <span class="ms-3">{{ $contact->email }}</span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <img src="img/Group 67.png" alt="Phone" style="width: 30px;">
                                <span class="ms-3">{{ $contact->phone }}</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <img src="img/Group 68.png" alt="Location" style="width: 30px;">
                                <span class="ms-3">{{ $contact->location }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center py-2 text-white" style="font-size: 15px;">
                Copyright@2023. All Rights reserved.
            </div>
        </div>
    </section>

    @yield('footer')
</body>

</html>
