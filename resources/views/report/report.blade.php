@extends('layouts.master')
@section('content')

<div class="col-10">
    <div class="row">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
        </div>
        <div class="col-3">
            <p>Xin chào <br><b>{{ Auth::user()->name }}</b></p>
        </div>
    </div>

    <h2>Báo cáo</h2>
    <br>
    <br>

    <div class="row">
        <div class="col-11">
            <h4>chọn thời gian</h4>
            <select class="form-select" aria-label="Default select example" style="width:200px">
                <option selected>Tất cả</option>
                <option value="1">Hoạt động</option>
                <option value="2">Ngưng hoạt động</option>
            </select>
            <table class="table rounded table-bordered mt-2 ">
                <thead  class="table-color">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Thời gian cấp</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Nguồn cấp </th>
                    </tr>
                </thead>
                <tr>
                    <th scope="row">10210001</th>
                    <td>Khám tim mạch</td>
                    <td>14:35-07/11/2022</td>
                    <td>đang chờ </td>
                    <td>Nguồn cấp</td>
                </tr>
            </table>
        </div>

        <div class="col-1">
            <div class="right text-center">
                <a href="{{url('/dichvu/add')}}" class="add">
                    <i class='bx bxs-down-arrow-square bx-md mt-3' style='color:#ff7506' ></i>
                    <p>Tải về</p>
                </a>
            </div>
        </div>




    @endsection
