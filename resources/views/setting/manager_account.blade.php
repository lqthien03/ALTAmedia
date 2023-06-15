@extends('layouts.master')
@section('content')
@extends('layouts.master')
@section('content')
    <div class="col-10">
        <div class="row">
            <div class="row mt-3">
                <div class="col-9">
                    {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                    <p><b>Cài đặt hệ thống > Quản lý tài khoản</b></p>
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
        </div>


        <div class="row">
            <div class="col-11">
                <div class="row">
                    <div class="col-9">
                        <div class="col-3">
                            <p style="margin-bottom: 5px">Tên vai trò</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tất cả</option>
                                <option value="1">Hoạt động</option>
                                <option value="2">Ngưng hoạt động</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <p style="margin-bottom: 5px">Từ khóa</p>
                        <form class="d-flex text-center" role="search" >
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>

                <table class="table rounded table-bordered mt-2 ">
                    <thead  class="table-color">
                        <tr>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Trạng thái hoạt động</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($showsetting as $item)
                        <tr>
                        <th scope="row">{{$item->user->name_dangnhap}}</th>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->user->sdt}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->role->name_role}}</td>
                        <td>{{$item->status_activate->name_activate}}</td>
                        <td><a href="/setting/update_manager_account/{{$item->id}}">Cập nhật</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
            </div>
            <div class="col-1">
                <div class="right text-center">
                    <a href="{{url('/setting/add_manager_account')}}" class="add">
                        <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                        <p>Thêm vai trò</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection


@endsection
