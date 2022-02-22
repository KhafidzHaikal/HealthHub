<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/navbarmain.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/js/navbar.js">
    <link rel="stylesheet" href="/css/history.css">
    <link rel="stylesheet" href="/css/Medicine3-1.css">
    <link rel="stylesheet" href="/css/order1.css">
    <link rel="stylesheet" href="/css/order2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <title>{{ $title }} | Health HUB</title>
</head>
<body>
    @include('navbar.navbarmain')

    @yield('body')

</body>
</html>