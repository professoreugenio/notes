<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Notes</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/mycss/config.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="shorcut icon" href="{{ asset('assets/images/favicon.png')}}">
</head>
<body>
    @yield('content')
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>