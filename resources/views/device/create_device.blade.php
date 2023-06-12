@extends('layouts.master')
@section('content')
    <div class="col-10 device">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Thiết bị > Danh sách thiết bị > Thêm thiết bị</b></p>
            </div>
            <div class="col-3">
                <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
            </div>
        </div>
        <h2>Quản lý thiết bị</h2>
        <div class=" mt-3 pt-2 box" style="height: 450px; margin-right:50px; ">
            <div style="margin-left: 15px;margin-right:15px">
                <h4>Thông tin thiết bị</h4>
                <form action="{{route('service.store')}}" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Mã thiết bị:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mã thiết bị" name="ma_device">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tên thiết bị:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập tên thiết bị" name="name_device">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Địa chỉ IP:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập địa chỉ IP" name="address_ip">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Loại thiết bị:</label>
                                <select class="form-select" aria-label="Default select example" name="id_option">
                                    <option selected>Chọn loại thiết bị</option>
                                    <option value="1">Kiosk</option>
                                    <option value="2">Display counter</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản" name="id_user">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Mật khẩu:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập mật khẩu" name='id_password'>
                            </div>
                        </div>
                    </div>
                </form>

                {{-- <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Dịch vụ đã sử dụng:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản" name="id_dichvu">
                    <label for="formGroupExampleInput" class="form-label">Là trường thông tin bắt buộc</label>
                </div> --}}
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-warning"> <a href="{{ route('device.device') }}">Hủy bỏ</a> </button>
            <button type="submit" class="btn btn-warning">Thêm thiết bị</button>
        </div>
    </div>


    @endsection

