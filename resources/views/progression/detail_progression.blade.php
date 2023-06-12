@extends('layouts.master')
@section('content')

<div class="col-10 bgr">
    <div class="row m-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Thiết bị > Danh sách cấp số > Chi tiết</b></p>
        </div>
        <div class="col-3">
            <p>Xin chào <br><b>{{ Auth::user()->name }}</b></p>
        </div>
    </div>
    <h2>Quản lý cấp số</h2>
    <div class="row ">
        <div class="col-11">
            <div class=" row box_progression">
                <div class="col-6">
                    <h4>Thông tin cấp số </h4>
                    <p>Họ Tên: {{$progression_id->progression->name_dangnhap}}</p>
                    <p>Số thứ tự: {{$progression_id->stt}}</p>
                    <p>Thời gian cấp: {{$progression_id->time_cap}}</p>
                    <p>Hạn sử dụng: {{$progression_id->time_sudung}}</p>
                </div>
                <div class="col-6">
                    <p></p>
                    <br>
                    <p>Nguồn cấp: {{$progression_id->progression->name}}</p>
                    <p>Trạng thái: {{$progression_id->progression->name_status}}</p>
                    <p>Số điện thoại: {{$progression_id->progression->sdt}}</p>
                    <p>Địa chỉ Email: {{$progression_id->progression->email}}</p>
                </div>
            </div>
        </div>
        <div class="col-1">
            <div class="right text-center">
                <a href="{{url('/progression')}}" class="add">
                    <i class='bx bx-undo bx-md mt-3'  style='color:#ff7506'></i>
                    <p>Quay lại</p>
                </a>
            </div>
        </div>
    </div>


</div>





@endsection