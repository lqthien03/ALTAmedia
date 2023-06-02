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
                        <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
                    </div>
                </div>
                <h2>Quản lý dịch vụ</h2>
                <div class="row">
                    <div class="col-4">
                        <div class="rounded border border-secondary pt-2" style="height: 500px">             
                            <div class="row" style="margin-left:5px;margin-right:5px">
                                <h5>Thông tin dịch vụ</h5>
                                <div class="col-5 ">
                                    <p><b>Mã dịch vụ:</b></p>
                                    <p><b>Tên dịch vụ:</b></p>
                                    <p><b>Mô tả:</b></p>
                                </div>
                                <div class="col-7">
                                    <p>201</p>
                                    <p>Khám tim mạch</p>
                                    <p>Chuyên các bệnh lý về tim</p>
                                </div>
                            </div>
        
                            <div class="row" style="margin-left:5px;margin-right:5px">
                                <h5>Quy tắc cấp số</h5>
                                <div class="col-5">
                                    <p><b>Tăng tự động</b></p>
                                    <br>
                                    <p><b>Prefix</b></p>
                                    <p>Reset mỗi ngày</p>
                                    <p>Ví dụ:201-2001</p>
                                </div>
                                <div class="col-7">
                                    <button type="button" class="btn btn-outline-dark">0001 </button> đến <button type="button" class="btn btn-outline-dark">9999</button><br><br>
                                    <button type="button" class="btn btn-outline-dark">0001</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="rounded border border-secondary pt-2" style="height: 500px">
                            <div class="row">
                                <div class="col-4">
                                    <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tất cả</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="2">Ngưng hoạt động</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tất cả</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="2">Ngưng hoạt động</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tất cả</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="2">Ngưng hoạt động</option>
                                    </select>
                                </div>
                            </div>
                            <table class="table rounded table-bordered mt-2 ">
                                <thead>
                                  <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Trạng thái</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>                           
                                  </tr>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>                      
                                  </tr>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>                         
                                  </tr>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>                       
                                  </tr>
                                  <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>                     
                                  </tr>                    
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="rounded border border-secondary pt-2" style="height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>