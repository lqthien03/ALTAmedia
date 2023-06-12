@extends('layouts.master')
@section('content')

<div class="col-10">
<div class="row">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b>Cấp số > Danh sách cấp số</b></p>
        </div>
        <div class="col-3">
            <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
        </div>
    </div>
    <h2>Danh sách thiết bị</h2>
    <br>
    <br>
    <div class="col-11">
        <div class="row mt-5">
            <div class="col-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
            </div>
            <div class="col-2">
                <div style="">
                    <p style="margin-bottom: 5px">Từ khóa</p>
                    <form class="d-flex text-center" role="search" >
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>

        <table class="table rounded table-bordered mt-2 ">
            <thead  class="table-color">
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Tên dịch vụ</th>
                <th scope="col">Thời gian cấp</th>
                <th scope="col">Hạn sử dụng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Nguồn cấp </th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($progressions as $item)
                    <tr>
                        <th scope="row">{{$item->stt}}</th>
                        <td>{{$item->progression->name}}</td>
                        <td>{{$item->stt}}</td>
                        <td>{{$item->time_cap}}</td>
                        <td>{{$item->time_sudung}}</td>
                        <td>{{$item->stt}}</td>
                        <td>{{$item->stt}}</td>
                        <td><a href="/progression/detail/{{$item->id}}">Chi tiết</a></td>

                    </tr>
                @endforeach
            </tbody>
            {{-- <tr>
                <th scope="row">10210001</th>
                <td>lê huỳnh ái vân</td>
                <td>Khám tim mạch</td>
                <td>14:35-07/11/2022</td>
                <td>14:35-12/11/2023</td>
                <td>đang chờ </td>
                <td>Nguồn cấp</td>
                <td><a href="/detail_service">Chi tiết</a></td>

            </tr>
                <tr>
                <th scope="row">10210001</th>
                <td>lê huỳnh ái vân</td>
                <td>Khám tim mạch</td>
                <td>14:35-07/11/2022</td>
                <td>14:35-12/11/2023</td>
                <td>đang chờ </td>
                <td>Nguồn cấp</td>
                <td><a href="/detail_service">Chi tiết</a></td>

                </tr>
                <tr>
                <th scope="row">10210001</th>
                <td>lê huỳnh ái vân</td>
                <td>Khám tim mạch</td>
                <td>14:35-07/11/2022</td>
                <td>14:35-12/11/2023</td>
                <td>đang chờ </td>
                <td>Nguồn cấp</td>
                <td><a href="/detail_service">Chi tiết</a></td>
                </tr> --}}
            </table>
    </div>
            <div class="col-1">
                <div class="right text-center">
                    <a href="{{url('/progression/add')}}" class="add">
                        <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138' ></i>
                        <p>Cấp số mới</p>
                    </a>
                </div>
            </div>
    @endsection
