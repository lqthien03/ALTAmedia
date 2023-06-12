@extends('layouts.master')
@section('content')
<div class="col-10 device">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Thiết bị > Danh sách thiết bị > Chi tiết thiết bị</b></p>
        </div>
        <div class="col-3">
            <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
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
                            <p><b>Mã thiết bị: </b>{{ $devices_id->ma_device }}</p>
                            <p><b>Tên thiết bị: </b>{{ $devices_id->name_device }}</p>
                            <p><b>Địa chỉ IP: </b> {{ $devices_id->address_ip }}</p>
                        </div>
                        <div class="col-6 mt-2">
                            <p><b>Loại thiết bị: </b></p>
                            <p><b>Tên đăng nhập: </b></p>
                            <P><b>Mật khẩu: </b></P>
                        </div>
                    </div>
                    <p><b>Dịch vụ sử dụng: </b></p>
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
            {{-- <div class="text-center">
                <a href="{{url('/device/add')}}" class="add">
                    <i class='bx bxs-pencil bx-sm mt-2 ' style='color:#ff9138'></i>
                    <p>Thêm thiết bị</p>
                </a>
            </div> --}}
        </div>
    </div>





    @endsection
