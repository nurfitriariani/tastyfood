
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<style>
    .pagination {
        margin-top: 20px;
        margin-left: 600px;
    }
</style>
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
                //     // This will allow the page to refresh after the alert is closed
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

    <div class="row" style="margin-left: 15%; margin-top: 30px;">
        <div class="col-md-6">
            <a href="/tambahgaleri" class="btn btn-primary">Tambah Data</a><br>
            <br>
        </div>

        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-block">
                    <div class="table-responsive">
                        <form method="GET" action="/galeriadmin">
                            <label for="perPage">Tampilkan per halaman:</label>
                            <select class="form-control form-control-sm custom-select" style="width: 8%; margin-left:20px;" name="perPage" onchange="this.form.submit()">
                                <option value="5" {{ request('perPage') == '5' ? 'selected' : '' }}>5</option>
                                <option value="10" {{ request('perPage') == '10' ? 'selected' : '' }}>10</option>
                                <option value="20" {{ request('perPage') == '20' ? 'selected' : '' }}>20</option>
                            </select>
                            {{-- <input type="text" class="form-control form-control-sm ms-3" name="search" value="{{ request('search') }}" placeholder="Search..." style="width: 20%; margin-left:270px;">
                            <button type="submit" class="btn btn-primary btn-sm ms-2" style="margin-left:10px;">Cari</button> --}}
                        </form>
                   <table class="table m-b-0 photo-table">
                      <thead>
                         <tr class="text-uppercase">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                         </tr>
                      </thead>
                      @foreach ($galeris as $key => $gambar)
                      <tr>
                          <td>{{ $key+1 }}</td>
                          <td> <img src="{{ asset('storage/gambar/' . $gambar->gambar) }}" class="img-fluid" alt="Uploaded Image"></td>
                          <td>
                            <form action="{{ route('deletegaleri', $gambar->id) }}" method="POST" onsubmit="return confirm('Yakin hapus ini?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/editgaleri/{{ $gambar->id }}" class="btn btn-info d-inline-block">Edit</a>
                        </td>
                      </tr>
                     @endforeach
                   </table>
                   <div class="d-flex justify-content-end mt-4">
                        {{ $galeris->links('pagination::bootstrap-4') }}
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-xl-4 col-lg-12">
       </div>
    </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
