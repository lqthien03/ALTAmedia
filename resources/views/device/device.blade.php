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
                    <a class="list-group-item list-group-item-action" href="/progression">Cấp số</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Báo cáo</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Cài đặt hệ thống</a>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-9">
                        {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                    </div>
                    <div class="col-3">
                        <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
                    </div>
                </div>
                <h2>Danh sách thiết bị</h2>
                <br>
                <div class="row">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-3">
                                <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Tất cả</option>
                                    <option value="1">Hoạt động</option>
                                    <option value="2">Ngưng hoạt động</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <p style="margin-bottom: 5px">Trạng thái kết nối</p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Tất cả</option>
                                    <option value="1">Kết nối</option>
                                    <option value="2">Mất kết nối</option>
                                  </select>
                            </div>
                            <div class="col-6 ">
                                <div style="float: right">
                                    <p style="margin-bottom: 5px">Từ khóa</p>
                                    <form class="d-flex text-center" role="search" style="width:300px">
                                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>

                            </div>
                        </div>
                        <table class="table rounded table-bordered mt-2 ">
                            <thead>
                              <tr>
                                <th scope="col">Mã thiết bị</th>
                                <th scope="col">Tên thiết bị</th>
                                <th scope="col">Địa chỉ IP</th>
                                <th scope="col">Trạng thái hoạt động</th>
                                <th scope="col">Trạng thái kết nối</th>
                                <th scope="col">Dịch vụ sử dụng</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($devices as $item)
                              <tr>

                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->ma_device}}</td>
                                <td>{{$item->name_device}}</td>
                                <td>{{$item->address_ip}}</td>
                                <td>{{$item->status_hd}}</td>
                                <td>{{$item->status_connect}}</td>
                                <td>{{$item->device_use}}</td>
                                <td><a href="/device/detail/{{$item->id}}">Chi tiết</a></td>
                                <td><a href="/device/update/{{$item->id}}">Cập nhật</a></td>
                              </tr>
                            </tbody>
                            @endforeach
                            {{-- <tbody>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td><a href="/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>

                            </tbody> --}}
                          </table>
                    </div>
                    <div class="col-1">
                        <a href="{{url('/device/create_device')}}"><p>Thêm thiết bị</p></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
