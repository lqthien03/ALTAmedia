<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALTAmedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('css/device.css')}}">
    <link rel="stylesheet" href="{{url('css/service.css')}}">
    <link rel="stylesheet" href="{{url('css/progression.css')}}">
    <link rel="stylesheet" href="{{url('css/report.css')}}">
    <link rel="stylesheet" href="{{url('css/profile.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.left')
            @yield('content')


        </div>
    </div>
</body>
</html>
