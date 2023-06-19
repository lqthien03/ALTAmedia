@extends('layouts.master')
@section('content')
    <div class="col-10 bgr">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Thông tin cá nhân</b></p>
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
        <div class="box_all">
            <div class="row mt-3">
                <div class="col-4 text-center mt-4">
                    <img src="{{url('images/user2.png')}}" alt="" class=" rounded-circle" style="width:250px">

                    <p><b>{{ Auth::user()->name }}</b></p>
                </div>
                <div class="col-4 box_1">
                    <div class="mb-3 ">
                        <label for="formGroupExampleInput" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="" value="{{ Auth::user()->sdt }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="quocthien0404@gmail.com" name="" value="{{ Auth::user()->email }}">
                    </div>
                </div>
                <div class="col-4 box_2" >
                    <div class=" mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="thien" name="" value="{{ Auth::user()->name_dangnhap }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="" value="{{ Auth::user()->password }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Vai trò:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="bác sĩ" name="" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
