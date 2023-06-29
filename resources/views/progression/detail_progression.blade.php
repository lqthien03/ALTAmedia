@extends('layouts.master')
@section('content')

<div class="col-10 bgr">
    <div class="row m-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Thiết bị > Danh sách cấp số > Chi tiết</b></p>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-3 mt-3 text-center ">
                    <a href=""><i class='bx bxs-bell  bx-sm' style='color:#ffac6a'></i></a>
                </div>
                <div class="col-9 mt-1">
                    <a href="/profile">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ url('images/user2.png') }}" alt="" style="width:50px"
                                class="rounded-circle">
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
    <h2>Quản lý cấp số</h2>
    <div class="row ">
        <div class="col-11">
            <div class=" row box_progression">
                <div class="col-6">
                    <h4>Thông tin cấp số </h4>
                    <p>Họ Tên: {{$progression_id->user->name_dangnhap}}</p>
                    <p>Số thứ tự: {{$progression_id->stt}}</p>
                    <p>Thời gian cấp: {{$progression_id->time_cap}}</p>
                    <p>Hạn sử dụng: {{$progression_id->time_sudung}}</p>
                </div>
                <div class="col-6">
                    <p></p>
                    <br>
                    <p>Nguồn cấp: {{$progression_id->supply->name_supply}}</p>
                    <p>Trạng thái: {{$progression_id->status->name_state}}</p>
                    <p>Số điện thoại: {{$progression_id->user->sdt}}</p>
                    <p>Địa chỉ Email: {{$progression_id->user->email}}</p>
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
