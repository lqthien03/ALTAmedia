<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="text-center mt-4 mb-5 ">
                    <img src="{{url('images/Logo alta.png')}}" alt="" class="w-1" >
                </div>
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="/">Dashboard</a>
                    <a class="list-group-item list-group-item-action" href="/device">Thiết bị</a>
                    <a class="list-group-item list-group-item-action" href="/service">Dịch vụ</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Cấp số</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Báo cáo</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Cài đặt hệ thống</a>
                </div>
            </div>
            <div class="col-10">
        
                <div class="row">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-9">
                                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                            </div>
                            <div class="col-3">
                                {{-- <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p> --}}
                            </div>
                        </div>
                        <h2>Quản lý thiết bị</h2>
                        <br>    
                        <div class="rounded border border-secondary" style="height: 400px">
                            <h3>Thông tin thiết bị</h3>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <p>Mã thiết bị:{{ $devices_id->ma_device }}</p>
                                    <p>Tên thiết bị{{ $devices_id->name_device }}</p>
                                    <p>Địa chỉ IP:{{ $devices_id->address_ip }}</p>
                                </div>
                                <div class="col-6">
                                    <p>Loại thiết bị:</p>
                                    <p>Tên đăng nhập:</p>
                                    <P>Mật khẩu:</P>
                                </div>
                            </div>
                            <p>Dịch vụ sử dụng:</p>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>