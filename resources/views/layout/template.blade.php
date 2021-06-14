<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Nusa Group</title>
    <link href="{{asset('image/icon.svg')}}" rel='shortcut icon'>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">
</head>

<body>
    @include('layout.navbar')

    @yield('content')

    <script src="{{asset('bootstrap/js/show-on-scroll.js')}}"></script>
    <script src="https://kit.fontawesome.com/a6c813d4c0.js" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>