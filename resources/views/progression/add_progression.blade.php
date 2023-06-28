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
                    <div class="row">
                        <div class="col-3 mt-3 text-center ">
                            <a href=""><i class='bx bxs-bell  bx-sm' style='color:#ffac6a'></i></a>
                        </div>
                        <div class="col-9 mt-1">
                            <a href="/profile">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ url('images/user.png') }}" alt="" style="width:50px">
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
        <h2>Quản lý cấp số</h2>
        <div class="box_progression text-center">
            <h2>Cấp số mới</h2>
            <p><b>Dịch vụ khách hàng lựa chọn</b></p>
            <form action="{{ route('progression.store') }}" method="post" id="FormProgression">
                @csrf
                <div class="mb-3 " style="padding-left: 400px; padding-right:400px">
                    {{-- <label for="formGroupExampleInput" class="form-label">Loại thiết bị:</label> --}}
                    <select class="form-select" aria-label="Default select example" name="id_service">
                        <option selected>Chọn dịch vụ</option>
                        @foreach ($option_service as $op)
                            <option value="{{ $op->id }}">{{ $op->name_service }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center mt-5">
                    <button type="button" class="btn btn-warning"> <a href="{{ route('progression.progression') }}">Hủy
                            bỏ</a> </button>
                    <button type="submit" class="btn btn-warning">Tạo</button>
                </div>
            </form>


            @if (session('dataSuccess'))
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Số thứ tự đã cấp</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 style="color: #ffac6a">{{ $dataSuccess['stt'] }}</h4>
                            </div>
                            <div class="modal-body">
                                <p>DV:{{ $dataSuccess['name_service'] }} <b>(tại quầy số 1)</b></p>

                            </div>
                            <div class="modal-footer" style="background-color: #ffac6a">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button> --}}

                                <p>Thời gian cấp:{{ $dataSuccess['time_cap'] }}</p>
                                <p>Hạn sử dụng:{{ $dataSuccess['time_sudung'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    $('#exampleModalCenter').modal()
                </script>
            @endif

        </div>

    </div>
@endsection
