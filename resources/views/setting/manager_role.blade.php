@extends('layouts.master')
@section('content')
    <div class="col-10">
        <div class="row">
            <div class="row mt-3">
                <div class="col-9">
                    {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                    <p><b>Cài đặt hệ thống > Quản lý vai trò</b></p>
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
                        <h4>Danh sách vai trò</h4>
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
                        <th scope="col">Tên vai trò</th>
                        <th scope="col">Số người dùng</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($showsetting as $item)
                        <tr>
                        <th scope="row">{{$item->name_role}}</th>
                        <td>{{$item->soluong}}</td>
                        <td>{{$item->mota}}</td>
                        <td><a href="/setting/update_manager_role/{{$item->id}}">Cập nhật</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
            </div>
            <div class="col-1">
                <div class="right text-center">
                    <a href="{{url('/setting/add_manager_role')}}" class="add">
                        <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                        <p>Thêm vai trò</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
