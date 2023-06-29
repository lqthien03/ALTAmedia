@extends('layouts.master')
@section('content')
<div class="col-10 device">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b> Dịch vụ > Danh sách thiết bị > Thêm thiết bị </b></p>
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
    <h2>Quản lý thiết bị</h2>
    <form action="{{route('device.update',$device)}}" method="post">
        @csrf
        @method('PUT')
        <div class="box pt-2" style="height: 450px; margin-right:50px;">
            <div style="margin-left: 15px;margin-right:15px">
                <h4>Thông tin thiết bị</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mã thiết bị:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mã thiết bị" name="ma_device" value="{{old('ma_device') ?? $device->ma_device}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tên thiết bị:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập tên thiết bị" name="name_device" value="{{old('name_device') ?? $device->name_device}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Địa chỉ IP:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập địa chỉ IP" name="address_ip" value="{{old('address_ip') ?? $device->address_ip}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Loại thiết bị:
                            </label>

                            <select class="form-select form-control" aria-label="Default select example" name="id_option_device">
                                <option>Chọn loại thiết bị</option>
                                @foreach ($option_device as $op )
                                    <option {{$device->id_option == $op->id ? 'selected' : ''}} value="{{$op->id}}">{{$op->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản" name="name_dangnhap" value="{{old('name_dangnhap') ?? $device->user->name_dannhap}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Mật khẩu:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập mật khẩu" name="password" value="{{old('password') }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-select form-control" aria-label="Default select example" name="id_service">
                        <option>Chọn loại thiết bị</option>
                        @foreach ($option_service as $op )
                            <option {{$device->id_option == $op->id ? 'selected' : ''}} value="{{$op->id}}">{{$op->name_service}}</option>
                        @endforeach
                    </select>
                    <label for="formGroupExampleInput" class="form-label">Là trường thông tin bắt buộc</label>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-warning"><a href="{{ route('device.device') }}">Hủy bỏ</a></button>
            <button type="submit" class="btn btn-warning">Thêm thiết bị</button>
        </div>
        @if ($errors->any())  @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach   @endif

    </form>

</div>
@endsection





