<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2 class="mb-0">Edit Gambar</h2>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/editgaleri/{{ $galeris->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="gambar" class="form-label">Pilih Gambar Baru</label>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                                <div class="form-text">Max file size: 2MB. Supported formats: jpeg, png, jpg, gif.</div>
                            </div>

                            <div class="mb-3 text-center">
                                <!-- Ganti $gambar dengan $galeris -->
                                <img src="{{ asset('storage/gambar/' . $galeris->gambar) }}" class="img-fluid mb-3" alt="Current Image" style="max-width: 100%; height: auto;">
                                <p><strong>Current Image:</strong> {{ $galeris->gambar }}</p>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Update Gambar</button>
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
