<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboardd</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    @extends('dashboard')
    @section('content')
    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#373A3C',
            // willClose: () => {
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
            confirmButtonText: 'OK'
        });
    </script>
@endif

    <div class="row dashboard-header" style="margin-left: 15%; margin-top: 50px; margin-right: 30px;">
        <a href="/admin">
        <div class="col-lg-3 col-md-6">
           <div class="card dashboard-product" >
              <span>Admin</span>
              <h2 class="dashboard-total-products"><span>{{ $user }}</span></h2>
              <span class="label label-danger">Admin</span> Jumlah admin yang sudah terdaftar
              <div class="side-box">
                 <i class="fas fa-user-shield text-danger-color" style="margin-right: 30px;"></i>
              </div>
           </div>
        </div>
        </a>
        <a href="/galeriadmin">
        <div class="col-lg-3 col-md-6">
           <div class="card dashboard-product">
              <span class="fw-bold">Galeri</span>
              <h2 class="dashboard-total-products">{{ $galeriJumlah }}</h2>
              <span class="label label-warning">Galeri</span>Jumlah galeri yang ditambahkan
              <div class="side-box">
                 <i class="fas fa-images text-warning-color" style="margin-right: 30px;"></i>
              </div>
           </div>
        </div>
        </a>
        <a href="/beritaadmin">
        <div class="col-lg-3 col-md-6">
           <div class="card dashboard-product">
              <span>Berita</span>
              <h2 class="dashboard-total-products">{{ $beritaJumlah }}</h2>
              <span class="label label-primary">Berita</span>Jumlah berita yang di tambahkan
              <div class="side-box ">
                 <i class="fas fa-newspaper text-primary-color" style="margin-right: 30px;"></i>
              </div>
           </div>
        </div>
        </a>
        <a href="/kontakadmin">
        <div class="col-lg-3 col-md-6">
           <div class="card dashboard-product">
              <span>Kontak</span>
              <h2 class="dashboard-total-products"><span>{{ $kontakJumlah }}</span></h2>
              <span class="label label-success">Kontak</span>Jumlah kontak yang masuk
              <div class="side-box">
                 <i class=" fas fa-envelope text-success-color" style="margin-right: 30px; "></i>
              </div>
           </div>
        </div>
        </a>
     </div>
     @endsection
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
