@extends('layouts.master')
@section('content')
<div class="col-10 bgr">
    <div class="row">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Cấp số > Danh sách cấp số > Cấp số mới</b></p>
            </div>
            <div class="col-3">
                <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
            </div>
        </div>
    </div>
    <h2>Quản lý cấp số</h2>
    <div class="box_progression text-center">
        <h2>Cấp số mới</h2>
        <p><b>Dịch vụ khách hàng lựa chọn</b></p>
        <div class="mb-3 " style="padding-left: 400px; padding-right:400px">
            {{-- <label for="formGroupExampleInput" class="form-label">Loại thiết bị:</label> --}}
            <select class="form-select" aria-label="Default select example" name="id_option">
                <option selected>Chọn dịch vụ</option>
                <option value="1">Khám tim mạch</option>
                <option value="2">Khám sản - Phụ khoa</option>
                <option value="3">Khám răng hàm mặt</option>
                <option value="4">Khám tai mũi họng</option>
            </select>
        </div>
        <div class="text-center mt-5">
            <button type="button" class="btn btn-warning"> <a href="{{ route('device.device') }}">Hủy bỏ</a> </button>
            <button type="submit" class="btn btn-warning">Thêm thiết bị</button>
        </div>

    </div>

</div>




@endsection
