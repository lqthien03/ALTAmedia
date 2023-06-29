@extends('layouts.master')
@section('content')
    <script>
        body {
            font - family: Arial Unicode MS, Arial, sans - serif;
        }
    </script>
    <div class="col-10 device">
        <div class="row mt-3">
            <div class="col-9">
                {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
                <p><b>Báo cáo > Lập báo cáo</b></p>
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


        <div class="row ">
            <div class="col-11 mt-5">
                <h4>chọn thời gian</h4>
                <select class="form-select" aria-label="Default select example" style="width:200px">
                    <option selected>Tất cả</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Ngưng hoạt động</option>
                </select>
                <table class="table rounded table-bordered mt-2 ">
                    <thead class="table-color">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên dịch vụ</th>
                            <th scope="col">Thời gian cấp</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Nguồn cấp </th>
                        </tr>
                    </thead>
                    {{-- <tr>
                    <th scope="row">10210001</th>
                    <td>Khám tim mạch</td>
                    <td>14:35-07/11/2022</td>
                    <td>đang chờ </td>
                    <td>Nguồn cấp</td>
                </tr> --}}
                    @foreach ($reports as $item)
                        <tr>
                            <th scope="row">{{ $item->progression->stt }}</th>
                            <td>{{ $item->service->name_service }}</td>
                            <td>{{ $item->progression->time_cap }}</td>
                            {{-- <td>{{$item->status_state->name_state}}</td> --}}
                            <td>
                                @if ($item->status_state->name_state == 'Đang chờ')
                                    <i class='bx bxs-circle' style='color:#0079FF'></i>
                                @elseif ($item->status_state->name_state == 'Đã sử dụng')
                                    <i class='bx bxs-circle' style='color:#B7B7B7'></i>
                                @else
                                    <i class='bx bxs-circle' style='color:#EB1D36'></i>
                                @endif
                                {{ $item->status_state->name_state }}
                            </td>
                            <td>{{ $item->supply->name_supply }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>

            <div class="col-1 mt-5">
                <div class="right text-center mt-5">
                    <a href="{{ route('export') }}" class="add">
                        <i class='bx bxs-down-arrow-square bx-md mt-3' style='color:#ff7506'></i>
                        <p>Tải về</p>
                    </a>
                </div>
            </div>
        @endsection
