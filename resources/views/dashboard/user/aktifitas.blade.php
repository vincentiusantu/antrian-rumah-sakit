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
        <a href="{{route('user.aktifitas')}}" class="text-decoration-none text-black fw-bold">Aktifitas</a>
        <a href="{{route('user.notifikasi')}}" class="text-decoration-none text-black">Notifikasi</a>
        <a href="{{route('user.akun')}}" class="text-decoration-none text-black">Akun</a>
    </nav>
    <div class="container mt-4">
        <h1>Aktifitas</h1>
        <div class="list-aktifitas pt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Antrian</th>
                        <th scope="col">Poliklinik</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayats as $i)
                    <tr>
                        <th scope="row">
                            {{$i->id}}
                        </th>
                        <td>
                            @if($i->poli_id ==1)
                            <p>Umum</p>
                            @endif
                            @if($i->poli_id ==2)
                            <p>Gigi</p>
                            @endif
                            @if($i->poli_id ==3)
                            <p>Kulit</p>
                            @endif
                            @if($i->poli_id ==4)
                            <p>Mata</p>
                            @endif
                            @if($i->poli_id ==5)
                            <p>Obgyn</p>
                            @endif
                        </td>
                        <td>
                            @if($i->aktif ==0)
                            <div class="rounded p-2 bg-warning border border-warning d-flex justify-content-center">
                                <p>Belum berlangsung</p>
                            </div>
                            @endif
                            @if($i->aktif ==1)
                            <div class="rounded p-2 bg-success border border-success d-flex justify-content-center">
                                <p>Berlangsung</p>
                            </div>
                            @endif
                            @if($i->aktif ==2)
                            <div class="rounded p-2 bg-danger border border-danger d-flex justify-content-center">
                                <p>Selesai</p>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>