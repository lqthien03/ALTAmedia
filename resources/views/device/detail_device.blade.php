@extends('layouts.master')
@section('content')
<div class="col-10 device">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Thiết bị > Danh sách thiết bị > Chi tiết thiết bị</b></p>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-3 mt-3 text-center ">
                    <a href=""><i class='bx bxs-bell  bx-sm' style='color:#ffac6a'></i></a>
                </div>
                <div class="col-9 mt-1">
                    <a href="">
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
    <div class="row">
        <div class="col-11">
            <h2>Quản lý thiết bị</h2>
            <br>
            <div class="box" style="height: 500px">
                <div class="box_item">
                    <h3>Thông tin thiết bị</h3>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="row">
                                <div class="col-3">
                                    <p><b>Mã thiết bị: </b></p>
                                    <p><b>Tên thiết bị: </b></p>
                                    <p><b>Địa chỉ IP: </b></p>
                                </div>
                                <div class="col-9">
                                    <div>
                                        <p>{{ $devices_id->ma_device}}</p>
                                        <p>{{ $devices_id->name_device }} </p>
                                        <p>{{ $devices_id->address_ip }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="row">
                                <div class="col-3">
                                    <p><b>Loại thiết bị: </b></p>
                                    <p><b>Tên đăng nhập: </b></p>
                                    <P><b>Mật khẩu: </b></P>
                                </div>
                                <div class="col-9">
                                    <div>
                                        <p>{{$devices_id->option->name_option}}</p>
                                        <p>{{$devices_id->user->name_dangnhap}}</p>
                                        <p>{{$devices_id->user->password}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><b>Dịch vụ sử dụng: </b></p>
                    <p>{{$devices_id->option->name_option}}</p>
                </div>
            </div>
        </div>
        <div class="col-1" style="margin-top: 70px">
            <div class="right text-center">
                <a href="{{url('/device/add')}}" class="add">
                    <i class='bx bxs-message-square-add bx-sm mt-2' style='color:#ff9138' ></i>
                    <p>Thêm thiết bị</p>
                </a>
            </div>

        </div>
    </div>





    @endsection
