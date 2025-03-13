<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Kontak</title>
</head>
<body>

    @extends('dashboard')
    @section('content')

    <div class="row" style="margin-top:30px; margin-left: 15%;">
        <div class="col-md-6">
           {{-- <a href="/create" class="btn btn-primary">Tambah Data</a><br> --}}
           <br>
       </div>
        <div class="col-xl-8 col-lg-12">
           <div class="card">
              <div class="card-block">
                <form method="GET" action="/kontakadmin" class="d-flex align-items-center">
                    <label for="perPage" >Tampilkan per halaman:</label>
                            <select class="form-control form-control-sm custom-select" style="width: 8%; margin-left: 10px;" name="perPage" onchange="this.form.submit()">
                                <option value="5" {{ request('perPage') == '5' ? 'selected' : '' }}>5</option>
                                <option value="10" {{ request('perPage') == '10' ? 'selected' : '' }}>10</option>
                                <option value="20" {{ request('perPage') == '20' ? 'selected' : '' }}>20</option>
                            </select>
                    <input type="text" name="search" class="form-control form-control-sm ms-3" value="{{ request('search') }}" placeholder="Cari kontak..." style="width: 30%; margin-left:200px;">
                    <button type="submit" class="btn btn-primary btn-sm ms-2" style="margin-left:10px;">Cari</button>
                </form>
                 <div class="table-responsive">
                    <table class="table m-b-0 photo-table">
                       <thead>
                          <tr class="text-uppercase">
                             <th>No</th>
                             <th>Subject</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Message</th>
                             <th>Action</th>
                             {{-- <th>Tanggal</th> --}}
                          </tr>
                       </thead>
                       @foreach ($kontaks as $key => $item)
                       <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $item->subject }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->email }}</td>
                           <td>
                            <span title="{{ $item->message }}">{{ Str::limit($item->message, 50, '...') }}</span>
                            </td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#messageModal{{ $item->id }}">
                                Lihat
                            </button>
                            <div class="modal fade" id="messageModal{{ $item->id }}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Pesan Lengkap</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $item->message }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                           {{-- <td>{{ $kontak->created_at->format('d/m/Y H:i') }}</td> --}}
                           <td>
                            <form action="{{ route('deletekontak', $item->id) }}" method="POST" onsubmit="return window.confirm('Yakin hapus ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                           </td>
                       </tr>
                      @endforeach
                    </table>
                    <div class="pagination">
                        {{ $kontaks->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
                    </div>

                 </div>
              </div>
           </div>
        </div>
        <div class="col-xl-4 col-lg-12">
        </div>
     </div>
     @endsection
</body>
</html>
