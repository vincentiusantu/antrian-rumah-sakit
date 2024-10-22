<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register User</title>
</head>
<body>
    <img src="{{ URL::asset('/assets/landing.jpeg') }}" alt="" class="float-end" style="width: 75%">

    <div class="container pt-5">
        <h1>Daftar</h1>
        <p>Mohon isi data berikut untuk melanjutkan pendaftaran</p>
        <div>
            <form action="{{ route('user.create')}}" method="POST">
                @csrf
                <label for="name">Nama Lengkap:</label><br>
                <input type="text" name="name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" required><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" required><br>
                <label for="confirm-password">Konfirmasi Password:</label><br>
                <input type="password" name="confirm-password" required><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>