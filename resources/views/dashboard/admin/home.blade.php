<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home Admin</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('admin.home')}}" class="text-decoration-none text-black fw-bold">Beranda</a>
        <a href="{{route('admin.riwayat')}}" class="text-decoration-none text-black">Riwayat</a>
    </nav>
    <div class="container mt-4">
        <div class="float-end">
            <form action="{{route('admin.logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        <h1>Hi {{ Auth::guard('admin')->user()->name }}</h1>
        <p>Semoga kamu selalu dalam keadaan yang baik</p>
        <div class="box-list mt-4">
            <div class="row1 d-flex justify-content-evenly">
                <a href="{{route('admin.list-user')}}" class="text-decoration-none text-black">
                <div id="pendaftaran" class="rounded p-4 bg-primary-subtle border border-primary-subtle">
                        <b>List User</b>
                        <br>
                        <p>Lihat lebih lanjut</p>
                    </div>
                </a>
                <a href="{{route('admin.jadwal-dokter')}}" class="text-decoration-none text-black">
                <div id="jadwal-dokter" class="rounded p-4 bg-warning-subtle border border-warning-subtle">
                        <b>Jadwal Dokter</b>
                        <br>
                        <p>Temukan dokter atau spesialis</p>
                    </div>
                </a>
            </div>
            <div class="row2 d-flex justify-content-center mt-4">
                <a href="{{route('admin.poliklinik')}}" class="text-decoration-none text-black">
                <div id="poliklinik" class="rounded p-4 bg-success-subtle border border-success-subtle">
                        <b>Poliklinik</b>
                        <br>
                        <p>Cari poliklinik sekarang</p>
                    </div>
                </a>
            </div>
            <a href="{{route('admin.info')}}" class="text-decoration-none text-black">
            <div id="info" class="mt-4 rounded p-4 bg-info border border-info">
                    <b>Apa saja penyakit berbahaya?</b>
                    <br>
                    <p>Temukan sekarang -></p>
                </div>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>