<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Poliklinik</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('admin.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('admin.riwayat')}}" class="text-decoration-none text-black">Riwayat</a>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-center my-5">
            <h1>POLIKLINIK</h1>
        </div>
        <div class="form d-flex justify-content-evenly mt-5">
            <div class="rounded px-5 py-3 bg-primary-subtle border border-primary-subtle fw-bold fs-4">
                <p>Umum</p>
            </div>
            <div class="rounded px-5 py-3 bg-primary-subtle border border-primary-subtle fw-bold fs-4">
                <p>Gigi</p>
            </div>
            <div class="rounded px-5 py-3 bg-primary-subtle border border-primary-subtle fw-bold fs-4">
                <p>Kulit</p>
            </div>
            <div class="rounded px-5 py-3 bg-primary-subtle border border-primary-subtle fw-bold fs-4">
                <p>Mata</p>
            </div>
            <div class="rounded px-5 py-3 bg-primary-subtle border border-primary-subtle fw-bold fs-4">
                <p>Obgyn</p>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>