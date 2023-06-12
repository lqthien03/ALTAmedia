@extends('layouts.master')
@section('content')

<div class="col-10 service">
    <div class="row">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
        </div>
        <div class="col-3">
            <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
        </div>
    </div>
    <h2>Danh sách thiết bị</h2>
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
                        <form class="d-flex text-center" role="search" style="width:300px">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
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
                    <td>{{$item->status->name_activate}}</td>
                    <td><a href="/service/detail/{{$item->id}}">Chi tiết</a></td>
                    <td><a href="/device/update/{{$item->id}}">Cập nhật</a></td>
                    </tr>
                </tbody>
                @endforeach

                </table>
        </div>
        <div class="col-1">
            <div class="right text-center">
                <a href="{{url('/dichvu/add')}}" class="add">
                    <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                    <p>Thêm dịch vụ</p>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
