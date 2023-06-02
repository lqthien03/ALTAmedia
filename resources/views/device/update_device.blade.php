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
                    <a class="list-group-item list-group-item-action" href="/home">Dashboard</a>
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
                        <h1>@yield('title', $title)</h1><br><br><br>
                    </div>
                    <div class="col-3">
                        {{-- <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p> --}}
                    </div>
                </div>
                <h2>Quản lý thiết bị</h2>
                <div class="rounded border border-secondary pt-2" style="height: 450px; margin-right:50px;">
                    <div style="margin-left: 15px;margin-right:15px">
                        <h4>Thông tin thiết bị</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Mã thiết bị:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mã thiết bị">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tên thiết bị:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập tên thiết bị">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Địa chỉ IP:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập địa chỉ IP">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Loại thiết bị:</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Chọn loại thiết bị</option>
                                        <option value="1">Kiosk</option>
                                        <option value="2">Display counter</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Tên đăng nhập:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Mật khẩu:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản">
                            <label for="formGroupExampleInput" class="form-label">Là trường thông tin bắt buộc</label>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-warning">Hủy bỏ</button>
                    <button type="button" class="btn btn-warning">Thêm thiết bị</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>