@extends('layouts.master')
@section('content')
    <div class="col-10 device">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Thiết bị > Danh sách thiết bị > Thêm thiết bị</b></p>
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
        <h2>Quản lý thiết bị</h2>
        <div class=" mt-3 pt-2 box" style="height: 450px; margin-right:50px; ">
            <div style="margin-left: 15px;margin-right:15px">
                <h4>Thông tin thiết bị</h4>
                <form action="{{route('device.store')}}" method="post">
                    @csrf
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
                                <select class="form-select form-control" aria-label="Default select example" name="id_option">
                                    <option selected>Chọn loại thiết bị</option>
                                    @foreach ($options as $op )
                                        <option value="{{$op->id}}">{{$op->name_option}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản" name="name_dangnhap">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Mật khẩu:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập mật khẩu" name='password'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Dich vu su dung:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="device_sd">
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-warning"> <a href="{{ route('device.device') }}">Hủy bỏ</a> </button>
                        <button type="submit" class="btn btn-warning">Thêm thiết bị</button>
                    </div>
                </form>
                @if ($errors->any())  @foreach ($errors->all() as $error)
                      {{ $error }}
                    @endforeach   @endif

                {{-- <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Dịch vụ đã sử dụng:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tài khoản" name="id_dichvu">
                    <label for="formGroupExampleInput" class="form-label">Là trường thông tin bắt buộc</label>
                </div> --}}
            </div>
        </div>

    </div>


    @endsection

