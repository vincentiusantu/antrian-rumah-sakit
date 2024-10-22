<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Jadwal Dokter</title>
</head>
<body>
    <nav class="d-flex justify-content-evenly pt-2">
        <a href="{{route('admin.home')}}" class="text-decoration-none text-black">Beranda</a>
        <a href="{{route('admin.riwayat')}}" class="text-decoration-none text-black">Riwayat</a>
    </nav>
    <div class="container mt-4">
        <h1>Jadwal Dokter</h1>
        <div class="mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Jadwal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Umum</td>
                        <td>08:00 - 12:00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Gigi</td>
                        <td>09:00 - 13:00</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>Kulit</td>
                        <td>10:00 - 14:00</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Dero</td>
                        <td>Mata</td>
                        <td>11:00 - 15:00</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Dawwam</td>
                        <td>Obgyn</td>
                        <td>12:00 - 16:00</td>
                      </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>