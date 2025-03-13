<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
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
                confirmButtonColor: '#373A3C',
            });
        </script>
    @endif

    <div class="row" style="margin-top:30px; margin-left: 15%;">
        <div class="col-md-6">
           {{-- <a href="/create" class="btn btn-primary">Tambah Data</a><br> --}}
           <br>
       </div>
        <div class="col-xl-8 col-lg-12">
           <div class="card">
              <div class="card-block">
                <form method="GET" action="/kontakadmin" class="d-flex align-items-center">

                </form>

                 <div class="table-responsive">
                    <table class="table m-b-0 photo-table">
                       <thead>
                          <tr class="text-uppercase">
                             <th>No</th>
                             <th>Email</th>
                             <th>Phone</th>
                             <th>Location</th>
                             <th>Actions</th>
                          </tr>
                       </thead>
                       @foreach ($contact as $key => $item)
                       <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $item->email }}</td>
                           <td>{{ $item->phone }}</td>
                           <td>{{ $item->location }}</td>
                           <td>
                            <a href="/editcontact/{{ $item->id }}" class="btn btn-info" style="display: inline-block;">Edit</a>
                           </td>
                       </tr>
                      @endforeach
                    </table>
                    {{-- <div class="pagination">
                        {{ $kontaks->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                    </div> --}}
                 </div>
              </div>
           </div>
        </div>
     </div>
     @endsection
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

