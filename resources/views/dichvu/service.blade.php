@extends('layouts.master')
@section('content')

<div class="col-10 service">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Dịch vụ > Danh sách dịch vụ</b></p>
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
    <h2>Quản lý dịch vụ</h2>
    <br>
    <div class="row">
        <div class="col-11">
            <div class="row">
                <div class="col-3">
                    <p style="margin-bottom: 5px">Trạng thái hoạt động</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Tất cả</option>
                        <option value="1">Hoạt động</option>
                        <option value="2">Ngưng hoạt động</option>
                    </select>
                </div>
                <div class="col-3"></div>
                <div class="col-6">
                    <div style="float: right">
                        <p style="margin-bottom: 5px">Từ khóa</p>
                        <form action="" method="GET" class="d-flex" role="search" style="width:300px">
                            <input class="form-control device" type="search" name="key" placeholder="Search" aria-label="Search">
                            <button class="search" type="submit" style="width:50px"><i class='bx bx-search-alt  ' style="color:#FF9138"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table rounded table-bordered mt-2 ">
                <thead class="table-color">
                    <tr>
                    <th scope="col">Mã dịch vụ</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Trạng thái hoạt động</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $item)
                    <tr>
                    <th scope="row">{{$item->ma_service}}</th>
                    <td>{{$item->name_service}}</td>
                    <td>{{$item->mota}}</td>
                    {{-- <td>{{$item->status_activate->name_activate}}</td> --}}
                    <td>
                        @if ($item->status_activate->name_activate == 'hoạt động')
                            <i class='bx bxs-circle' style='color:#16ff00'  ></i>
                        @else
                            <i class='bx bxs-circle' style='color:#ff1e00'  ></i>
                        @endif
                        {{$item->status_activate->name_activate}}
                    </td>
                    <td><a href="/service/detail/{{$item->id}}">Chi tiết</a></td>
                    <td><a href="/service/edit/{{$item->id}}">Cập nhật</a></td>
                    </tr>
                </tbody>
                @endforeach

                </table>
        </div>
        <div class="col-1">
            <div class="right text-center">
                <a href="{{url('/service/add')}}" class="add">
                    <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                    <p>Thêm dịch vụ</p>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
