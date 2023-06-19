
@extends('layouts.master')
@section('content')
    <div class="col-10">
        <div class="row">
            <div class="row mt-3">
                <div class="col-9">
                    {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                    <p><b>Cài đặt hệ thống > Nhật ký thực tập</b></p>
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
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Thời gian tác động</th>
                        <th scope="col">IP thực hiện</th>
                        <th scope="col">Thao tác thực hiện</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($showsetting as $item)
                        <tr>
                        <th scope="row">{{$item->user->name_dangnhap}}</th>
                        <td>{{$item->time_cap}}</td>
                        <td>{{$item->device->address_ip}}</td>
                        <td>{{$item->supply->name_supply}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>




@endsection
