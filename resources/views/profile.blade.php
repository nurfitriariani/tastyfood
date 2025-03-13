<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile - {{ Auth::user()->name }}</title>
    <!-- Include Bootstrap CSS (can use CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    @extends('dashboard') <!-- Extend your main layout -->
    @section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card for user profile -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="m-0">Profile of {{ Auth::user()->name }}</h3>
                    </div>

                    <div class="card-body">
                        <!-- Personal Information -->
                        <h5 class="card-title mb-4">Personal Information</h5>

                        <div class="row mb-3">
                            <div class="col-4"><strong>Full Name:</strong></div>
                            <div class="col-8">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4"><strong>Email:</strong></div>
                            <div class="col-8">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4"><strong>Password:</strong></div>
                            <div class="col-8">{{ Auth::user()->password }}</div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-4"><strong>Role:</strong></div>
                            <div class="col-8">{{ Auth::user()->role ?? 'Admin' }}</div>
                        </div> --}}

                        <!-- Button to Edit Profile -->
                        <div class="text-end">
                            <a href="/editprofile" class="btn btn-warning">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
