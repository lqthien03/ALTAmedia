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
                            <div class="col-3"></div>
                            <div class="col-6">
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
                                <th scope="col">Mã dịch vụ</th>
                                <th scope="col">Tên dịch vụ</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Trạng thái hoạt động</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($services as $item)
                              <tr>
                                <th scope="row"></th>
                                <td>{{$item->id}}</td>
                                <td>{{$item->ma_service}}</td>
                                <td>{{$item->name_service}}</td>
                                <td>{{$item->mota}}</td>
                                <td>{{$item->status}}</td>
                                <td><a href="/dichvu/detail">Chi tiết</a></td>
                                <td><a href="/update">Cập nhật</a></td>
                              </tr>
                            </tbody>
                            @endforeach
                            {{-- <tbody>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>Mô tả dịch vụ 1</td>
                                <td>hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>ngưng hoạt động</td>
                                <td>Ngưng hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>ngưng hoạt động</td>
                                <td>Ngưng hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>ngưng hoạt động</td>
                                <td>Ngưng hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>ngưng hoạt động</td>
                                <td>Ngưng hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              <tr>
                                <th scope="row">KIO_01</th>
                                <td>Kiosk</td>
                                <td>ngưng hoạt động</td>
                                <td>Ngưng hoạt động</td>
                                <td><a href="/detail_service">Chi tiết</a></td>
                                <td><a href="/update_service">Cập nhật</a></td>
                              </tr>
                              
                            </tbody> --}}
                          </table>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>