@extends('layouts.master')
@section('content')
            <div class="col-10 service" >
                <div class="row mt-3">
                    <div class="col-9">
                        {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                        <p><b>Dịch vụ > Danh sách dịch vụ > Chi tiết</b></p>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-3 mt-3 text-center ">
                                <a href=""><i class='bx bxs-bell  bx-sm' style='color:#ffac6a'></i></a>
                            </div>
                            <div class="col-9 mt-1">
                                <a href="/profile/{id}">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{url('images/user.png')}}" alt=""  style="width:50px">
                                        </div>
                                        <div class="col-9" style="line-height: 15px">
                                            <p>Xin chào</p>
                                            <p><b>{{ Auth::user()->name }}</b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Quản lý dịch vụ</h2>
                <div class="row">
                    <div class="col-4">
                        <div class="box pt-2" style="height: 500px">
                            <div class="row box_service" >
                                <h5>Thông tin dịch vụ</h5>
                                <div class="col-5 ">
                                    <p><b>Mã dịch vụ:</b></p>
                                    <p><b>Tên dịch vụ:</b></p>
                                    <p><b>Mô tả:</b></p>
                                </div>
                                <div class="col-7">
                                    <p>{{$services_id->ma_service}}</p>
                                    <p>{{$services_id->name_service}}</p>
                                    <p>{{$services_id->mota}}</p>
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
                        <div class="box pt-2" style="height: 500px">
                            <div class="row box_service">
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
                            <table class="table table-bordered mt-2 table_service ">
                                <thead class="rounded-top">
                                  <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Trạng thái</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($services_id->progression as $item)
                                        <tr>
                                            <th scope="row">{{$item->stt}}</th>
                                            <td>{{$item->status->name_state}}</td>
                                        </tr>
                                    @endforeach
                                  {{-- <tr>
                                    <th scope="row">2010001</th>
                                    <td>Đã hoàn thành</td>
                                  </tr> --}}
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="" style="height: 500px">
                            <div class=" right text-center">
                                <a href="/service/edit/{{$services_id->id}}" class="add">
                                    <i class='bx bxs-pencil bx-sm mt-2 ' style='color:#ff9138'></i>
                                    <p>Cập nhật danh sách</p>
                                </a>
                            </div>
                            <div class=" right text-center">
                                <a href="{{url('/service')}}" class="add">
                                    <i class='bx bxs-pencil bx-sm mt-2 ' style='color:#ff9138'></i>
                                    <p>Quay lại</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
