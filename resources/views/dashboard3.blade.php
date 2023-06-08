<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALTAmedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 left_sidebar p-0">
                <div class="text-center mt-4 mb-5 ">
                    <img src="{{url('images/Logo alta.png')}}" alt="" class="w-1 mt-3" >
                </div>
                <div class="container mt-3 p-0">
                    <ul class="nav flex-column mt-5">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/device">Thiết bị</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/service">Dịch vụ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/progression">Cấp số</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/report">Báo cáo</a>
                      </li>

                      <li class="nav-item p-0">
                        <div class="dropdown dropend ">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                           Cài Đặt Hệ Thống :</a>
                          <ul class="dropdown-menu p-0">
                            <li><a class="dropdown-item" href="#">Quản lý vai trò</a></li>
                            <li><a class="dropdown-item" href="#">Quản lý tài khoản</a></li>
                            <li><a class="dropdown-item" href="#">Nhật ký người dùng</a></li>
                          </ul>
                        </div>


                      </li>
                    </ul>
                </div>
                <div class="logout-button mx-auto mb-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link class="text-custom-button" :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                            {{ __('Đăng xuất') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>

            {{-- @extends('layouts.left') --}}
            @yield('content')


        </div>
    </div>
</body>
</html>
