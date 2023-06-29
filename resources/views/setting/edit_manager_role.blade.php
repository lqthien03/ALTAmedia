@extends('layouts.master')
@section('content')

<div class="col-10 device">
    <div class="row">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Cài đặt hệ thống > Quản lý vai trò > Cập nhật vai trò</b></p>
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
    </div>
    <h2>Danh sách vai trò</h2>
    <form action="{{route('setting.update_role',$role)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row box">
            <h4>Thông tin vai trò</h4>
            <div class="col-6">
                <div class="mb-3 mt-3">
                    <label for="formGroupExampleInput" class="form-label"><b>Tên vai trò:</b></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập tên vai trò" name="name_role" value="{{old('name_role') ?? $role->name_role}}">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"><b>Mô tả</b></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập mô tả" name="mota" value="{{old('mota') ?? $role->mota}}" style="height: 200px">

                </div>
                <p> * Là trường thông tin bắt buộc</p>
            </div>
            <div class="col-6">
                <p><b>Phân quyền chức năng*</b></p>
                <div style="background-color: #FFF2E7; border-radius:8px">
                    <div style="margin-left: 10px">
                        <div>
                            <p><b>Nhóm chức năng A</b></p>
                            <input type="checkbox" name="" id=""> tất cả<br>
                            <input type="checkbox" name="" id=""> chức năng x<br>
                            <input type="checkbox" name="" id=""> chức năng y<br>
                            <input type="checkbox" name="" id=""> chức năng z
                        </div>

                        <div class="mt-4">
                            <p><b>Nhóm chức năng B</b></p>
                            <input type="checkbox" name="" id=""> tất cả<br>
                            <input type="checkbox" name="" id=""> chức năng x<br>
                            <input type="checkbox" name="" id=""> chức năng y<br>
                            <input type="checkbox" name="" id=""> chức năng z
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="button" class="btn btn-warning"> <a href="{{ route('setting.manager_role') }}">Hủy bỏ</a> </button>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
    </form>

</div>
@endsection
