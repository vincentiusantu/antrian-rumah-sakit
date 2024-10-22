<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home User</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('user.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('user.aktifitas')}}" class="text-decoration-none text-black">Aktifitas</a>
        <a href="{{route('user.notifikasi')}}" class="text-decoration-none text-black fw-bold">Notifikasi</a>
        <a href="{{route('user.akun')}}" class="text-decoration-none text-black">Akun</a>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <h1>Notifikasi</h1>
        </div>
        <div class="antrian rounded p-2 bg-success border border-success d-flex justify-content-center text-white mt-5">
            <h3>Nomor Antrian: </h3>
            <h3> {{optional($your_antre)->id}}</h3>
        </div>
        <br>
        <img src="{{ URL::asset('/assets/qr.png') }}" alt="" style="width: 200px; display:block; margin-left:auto; margin-right:auto">
        <div class="antrian rounded p-2 bg-primary border border-primary d-flex justify-content-center text-white mt-3">
            <h3>Nomor Antrian Sekarang: </h3>
            <h3> {{optional($notifikasi)->id}}</h3>
        </div>
        <br>
        <div class="estimasi rounded p-2 bg-warning border border-warning d-flex justify-content-center">
            <h3>Estimasi Waktu:</h3>
            <h3> {{$waktu}} menit</h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>