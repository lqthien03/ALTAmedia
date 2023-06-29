@extends('layouts.master')
@section('content')
    <div class="col-10 device">
        <div class="row">
            <div class="row mt-3">
                <div class="col-9">
                    {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                    <p><b>Cấp số > Danh sách cấp số</b></p>
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
            <br>
            <br>
            <div class="col-11">
                <div class="row mt-5">
                    <div class="col-2">
                        <p style="margin-bottom: 5px">Tên dịch vụ</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <p style="margin-bottom: 5px">Tình trạng</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <p style="margin-bottom: 5px">Nguồn cấp</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <p style="margin-bottom: 5px">Chọn thời gian</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-2" style="padding-top: 30px">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Ngưng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <div style="">
                            <p style="margin-bottom: 5px">Từ khóa</p>
                            <form action="" method="GET" class="d-flex" role="search" style="width:169px">
                                <input class="form-control device" type="search" name="key" placeholder="Search"
                                    aria-label="Search">
                                <button class="search" type="submit" style="width:50px"><i class='bx bx-search-alt  '
                                        style="color:#FF9138"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table rounded table-bordered mt-2 ">
                    <thead class="table-color">
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
                                <th scope="row">{{ $item->stt }}</th>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->service->name_service }}</td>
                                <td>{{ $item->time_cap }}</td>
                                <td>{{ $item->time_sudung }}</td>
                                <td>{{ $item->status->name_state }}</td>
                                <td>{{ $item->supply->name_supply }}</td>
                                <td><a href="/progression/detail/{{ $item->id }}">Chi tiết</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1">
                <div class="right text-center">
                    <a href="{{ url('/progression/add') }}" class="add">
                        <i class='bx bxs-message-square-add bx-md mt-2' style='color:#ff9138'></i>
                        <p>Cấp số mới</p>
                    </a>
                </div>
            </div>
        @endsection
