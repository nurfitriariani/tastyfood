<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
                willClose: () => {
                    location.reload();
                }
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

    <div class="row" style="margin-top:30px; margin-left: 15%;">
        <div class="col-md-6">
           <a href="/tambah" class="btn btn-primary">Tambah Data</a><br>
           <br>
       </div>
        <div class="col-xl-8 col-lg-12">
           <div class="card">
              <div class="card-block">
                 <div class="table-responsive">
                    <table class="table m-b-0 photo-table">
                       <thead>
                          <tr class="text-uppercase">
                             <th>No</th>
                             <th>Nama</th>
                             <th>Email</th>
                             <th>Aksi</th>
                          </tr>
                       </thead>
                       @foreach ($users as $key => $item)
                       <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->email }}</td>
                           <td>
                            <div class="d-flex justify-content-start">
                                @if ($item->email === 'admin@gmail.com')
                                    {{-- Super Admin tidak bisa dihapus --}}
                                    <button class="btn btn-danger me-2" disabled>Hapus</button>
                                @elseif (Auth::user()->email == $item->email)
                                    {{-- Admin tidak bisa hapus diri sendiri --}}
                                    <button class="btn btn-danger me-2" disabled>Hapus</button>
                                @else
                                    {{-- User biasa bisa dihapus --}}
                                    <form action="{{ route('delete', $item->id) }}" method="POST" onsubmit="return window.confirm('Yakin hapus ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-2">Hapus</button>
                                    </form>
                                @endif
                                <a href="/edit/{{ $item->id }}" class="btn btn-info ms-2">Edit</a>
                            </div>
                        </td>
                       </tr>
                      @endforeach
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-xl-4 col-lg-12">
        </div>
     </div>
     @endsection
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
