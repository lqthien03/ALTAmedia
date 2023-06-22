@extends('layouts.master')
@section('content')
<div class="col-10 device">
    <div class="row mt-3">
        <div class="col-9">
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <p><b> Dịch vụ > Danh sách dịch vụ > Thêm dịch vụ </b></p>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-3 mt-3 text-center ">
                    <a href=""><i class='bx bxs-bell  bx-sm' style='color:#ffac6a'></i></a>
                </div>
                <div class="col-9 mt-1">
                    <a href="/profile/{id}">
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
    <h2>Quản lý dịch vụ</h2>
    <form action="{{route('dichvu.update',$service)}}" method="post">
        @csrf
        @method('PUT')
        <div class="box" style="height: 500px; padding-right:20px ; margin-right:30px">
            <div class="row">

                <div class="col-6">
                    <h4>Thông tin dịch vụ</h4>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Mã dịch vụ : *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="ma_service" value="{{old('ma_service') ?? $service->ma_service}}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tên dịch vụ : *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name_service" value="{{old('name_service') ?? $service->name_service}}">
                    </div>
                    <h4>Quy tắc cấp số</h4>
                    <div class="row">
                        <div class="col-4">
                            <input type="checkbox" class="mt-4"> Tăng tự động từ :<br>
                            <input type="checkbox" class="mt-4"> Prefix<br>
                            <input type="checkbox" class="mt-4"> Surfix<br>
                            <input type="checkbox" class="mt-4"> Reset mỗi ngày<br>
                            <p>* Là trường thông tin bắt buộc</p>


                        </div>
                        <div class="col-2">
                            <div class="botton_service mt-2">
                                <p>0001</p>
                            </div>
                            <div class="botton_service mt-2">
                                <p>0001</p>
                            </div>
                            <div class="botton_service mt-2">
                                <p>0001</p>
                            </div>
                        </div>
                        <div class="col-1 mt-3"><p>đến</p></div>
                        <div class="col-2">
                            <div class="botton_service mt-2">
                                <p>9999</p>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Mô tả:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="mota" value="{{old('mota') ?? $service->mota}}" style="height:200px">

                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <button type="button" class="btn btn-warning"> <a href="{{ route('dichvu.service') }}">Hủy bỏ</a> </button>
            <button type="submit" class="btn btn-warning">Thêm thiết bị</button>
        </div>
        @if ($errors->any())  @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                  @endforeach   @endif
    </form>

</div>

@endsection
