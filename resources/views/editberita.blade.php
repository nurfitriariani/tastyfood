<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
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
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2>Edit Berita</h2>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/editberita/{{ $beritas->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="foto" class="form-label">Pilih Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                                <div class="form-text">Supported formats: jpeg, png, jpg.</div>
                                <img src="{{ asset('storage/' . $beritas->foto) }}" class="img-fluid mt-2" alt="Current Image" style="max-height: 200px;">
                            </div>

                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul', $beritas->judul) }}" placeholder="Masukkan judul berita" required>
                            </div>

                            <div class="mb-3">
                                <label for="informasi" class="form-label">Informasi Berita</label>
                                <textarea class="form-control" name="informasi" id="informasi" rows="5" placeholder="Masukkan informasi berita" required>{{ old('informasi', $beritas->informasi) }}</textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Update Berita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
