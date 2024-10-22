<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Welcome</title>
    </head>
    <body class="" style="background-color:#48697C;">
        <div style="overflow:hidden; position: relative;">
            <img src="{{ URL::asset('/assets/welcome.jpeg') }}" alt="" style="opacity: 0.4; position: absolute; left:0; top:0; width:100%; height:auto">
            <br>
            <br>
            <br>
            <img src="{{ URL::asset('/assets/logo.png') }}" alt="" style="position: relative; width: 400px; display:block; margin-left:auto; margin-right:auto">
            <br>
            <br>
            <div style="position: relative; display:flex; justify-content:center">
                <a href="{{ route('user.landing') }}" class="link-opacity-100 link-opacity-100-hover text-decoration-none p-2 bg-primary border border-primary rounded text-decoration-none text-white">Next</a>
            </div>
            <br>
            <br>
            <br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
