@extends('layouts.master')
@section('content')
<div class="col-10 device">
    <div class="row">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Cài đặt hệ thống > Quản lý tài khoản > thêm tài khoản</b></p>
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
    </div>
    <h2>Quản lý tài khoản</h2>
        <form action="{{route('setting_account.store')}}" method="post">
            @csrf
            <div class="box" style="height: 500px; padding-right:20px ; margin-right:30px">
                <div class="row">
                    <h4>Thông tin tài khoản</h4>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Họ và tên : *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Số điện thoại : *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="sdt">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Email : *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">vai trò:
                            </label>

                            <select class="form-select form-control" aria-label="Default select example" name="role_id">
                                <option>Chọn vai trò</option>
                                @foreach ($role as $op )
                                        <option value="{{$op->id}}">{{$op->name_role}}</option>
                                    @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-6 mt-">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tên đăng nhập : *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name_dangnhap">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mật khẩu : *</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nhập lại mật khẩu : *</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password_confirmation" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Tình trạng:
                            </label>
                            <select class="form-select form-control" aria-label="Default select example" name="id_status_activate">
                                <option>Chọn tình trạng</option>
                                    @foreach ($status as $op )
                                        <option value="{{$op->id}}">{{$op->name_activate}}</option>
                                    @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="text-center mt-3">
                <button type="button" class="btn btn-warning"> <a href="{{ route('setting.manager_account') }}">Hủy bỏ</a> </button>
                <button type="submit" class="btn btn-warning">Thêm tài khoản</button>
            </div>
        </form>
        @if ($errors->any())  @foreach ($errors->all() as $error)
        {{ $error }}
      @endforeach   @endif
</div>
@endsection
