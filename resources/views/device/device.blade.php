
@extends('layouts.master')
@section('content')

<div class="col-10 device">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b> Thiết bị > Danh sách thiết bị </b></p>
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

    <h2>Danh sách thiết bị</h2>
    <br>
    <div class="row ">

        <div class="col-11">
            <div class="row">
                <div class="col-3">
                    <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                    <select name="" class="form-select" aria-label="Default select example">
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
                <thead  class="table-color">
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
                    {{-- @foreach($devices as $item)
                    <tr>
                    <th scope="row">{{$item->ma_device}}</th>
                    <td>{{$item->name_device}}</td>
                    <td>{{$item->address_ip}}</td>
                    <td>{{$item->status_activate->name_activate}}</td>
                    <td>{{$item->status_connect->name_connect}}</td>
                    <td>{{$item->option->name_option}}</td>
                    <td><a href="/device/detail/{{$item->id}}">Chi tiết</a></td>
                    <td><a href="/device/edit/{{$item->id}}">Cập nhật</a></td>
                    </tr>
                </tbody>
                @endforeach --}}
                @foreach($devices as $item)
                    <tr>
                        <th scope="row">{{$item->ma_device}}</th>
                        <td>{{$item->name_device}}</td>
                        <td>{{$item->address_ip}}</td>
                        <td>{{ $item->status_activate ? $item->status_activate->name_activate : '' }}</td>
                        <td>{{ $item->status_connect ? $item->status_connect->name_connect : '' }}</td>
                        <td>{{ $item->option ? $item->option->name_option : '' }}</td>
                        <td><a href="/device/detail/{{$item->id}}">Chi tiết</a></td>
                        <td><a href="/device/edit/{{$item->id}}">Cập nhật</a></td>
                    </tr>
                @endforeach








                </table>
        </div>
        <div class="col-1 ">
            <div class="right text-center">
                <a href="{{url('/device/add')}}" class="add">
                    <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                    <p>Thêm thiết bị</p>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
