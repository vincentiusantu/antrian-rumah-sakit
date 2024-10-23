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
        <a href="{{route('admin.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('admin.riwayat')}}" class="text-decoration-none text-black fw-bold">Riwayat</a>
    </nav>
    <div class="container mt-4">
        <h1>Riwayat</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Poliklinik</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayats as $riwayat)
                <tr>
                    <th scope="row">
                        {{$riwayat->id}}
                    </th>
                    <td>
                        {{$riwayat->name}}
                    </td>
                    <td>
                        {{$riwayat->namapoli}}
                    </td>
                    <td>
                        @if($riwayat->aktif ==0)
                            <div class="rounded p-2 bg-warning border border-warning d-flex justify-content-center">
                                <p>Belum berlangsung</p>
                            </div>
                            @endif
                            @if($riwayat->aktif ==1)
                            <div class="rounded p-2 bg-success border border-success d-flex justify-content-center">
                                <p>Berlangsung</p>
                            </div>
                            @endif
                            @if($riwayat->aktif ==2)
                            <div class="rounded p-2 bg-danger border border-danger d-flex justify-content-center">
                                <p>Selesai</p>
                            </div>
                            @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.edit-status', $riwayat->id) }}" method="POST">
                            @csrf
                            <select name="status" id="status" class="">
                                <option value="belum-berlangsung">Belum Berlangsung</option>
                                <option value="berlangsung">Berlangsung</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <button class="btn btn-primary mx-2">Submit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>