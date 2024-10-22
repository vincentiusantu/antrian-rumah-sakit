<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Landing User</title>
</head>
<body>
    <img src="{{ URL::asset('/assets/landing.png') }}" alt="" style="width:100%;">
    <div class="container pt-5 text-center">
        <h1>SIM-Antri</h1>
        <p>Menuju Kesehatan yang lebih baik!</p>
        <a href="{{ route('user.register') }}" class="text-decoration-none d-flex justify-content-center">
            <div class="rounded p-2 bg-primary border border-primary text-white" style="width: 30%">
                Registrasi
            </div>
        </a>
        <div class="">
            Sudah mempunyai akun? Silakan <a href="{{ route('user.login') }}">masuk</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>