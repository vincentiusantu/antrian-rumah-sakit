<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pendaftaran</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('user.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('user.aktifitas')}}" class="text-decoration-none text-black">Aktifitas</a>
        <a href="{{route('user.notifikasi')}}" class="text-decoration-none text-black">Notifikasi</a>
        <a href="{{route('user.akun')}}" class="text-decoration-none text-black">Akun</a>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-center my-5">
            <h1>POLIKLINIK TUJUAN</h1>
        </div>
        <div class="form d-flex justify-content-evenly mt-5">
            <form action="{{ route('user.umum') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary text-white px-5 py-3 fs-4 fw-bold">Umum</button>
            </form>
            <form action="{{ route('user.gigi') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary text-white px-5 py-3 fs-4 fw-bold">Gigi</button>
            </form>
            <form action="{{ route('user.kulit') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary text-white px-5 py-3 fs-4 fw-bold">Kulit</button>
            </form>
            <form action="{{ route('user.mata') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary text-white px-5 py-3 fs-4 fw-bold">Mata</button>
            </form>
            <form action="{{ route('user.obgyn') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary text-white px-5 py-3 fs-4 fw-bold">Obgyn</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>