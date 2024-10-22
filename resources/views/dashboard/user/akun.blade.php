<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Akun User</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('user.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('user.aktifitas')}}" class="text-decoration-none text-black">Aktifitas</a>
        <a href="{{route('user.notifikasi')}}" class="text-decoration-none text-black">Notifikasi</a>
        <a href="{{route('user.akun')}}" class="text-decoration-none text-black fw-bold">Akun</a>
    </nav>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h1>PROFIL</h1>
            </div>
            <form action="{{route('user.logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <div class="rounded p-4 bg-primary border border-primary p-3 mb-2" style="width: 60%">
                <img src="{{ URL::asset('/assets/profil.png') }}" alt="" style="display:block; margin-left:auto; margin-right:auto">
                <h2 class="d-flex justify-content-center">{{ Auth::guard('web')->user()->name }}</h2>
            </div>
        </div>
        <div class="form d-flex justify-content-center">
            <div>
                <form action="{{ route('user.edit') }}" method="POST">
                    @csrf
                    <label for="name">Nama Lengkap:</label><br>
                    <input type="text" name="name" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" required><br>
                    <label for="confirm-password">Konfirmasi Password:</label><br>
                    <input type="password" name="confirm-password" required><br>
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>