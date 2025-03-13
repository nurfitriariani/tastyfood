<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Contact Information</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/editcontact/{{ $contact->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
        </div>
        <div class="form-group mt-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}">
        </div>
        <div class="form-group mt-3">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $contact->location }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Contact</button>
    </form>
</div>

</body>
</html>
