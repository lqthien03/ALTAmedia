{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        {{-- <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
        @endsection --}}
        


        <div class="row">
            <div class="col-2">
                <div class="text-center mt-4 mb-5 ">
                    <img src="{{url('images/Logo alta.png')}}" alt="" class="w-1" >
                </div>
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="/">Dashboard</a>
                    <a class="list-group-item list-group-item-action" href="/device">Thiết bị</a>
                    <a class="list-group-item list-group-item-action" href="/service">Dịch vụ</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Cấp số</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Báo cáo</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Cài đặt hệ thống</a>
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
            <div class="col-7">
            <br>
            {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
            <div class="">
                <h4 id="list-item-1">Biểu đồ cấp số</h4>
                <div class="row justify-content-center align-items-center">
                <div class="col-2 bg-success text-white rounded " style="margin-left: 10px;height: 80px">
                    <a href="" style="height: 80px">
                    <table class="table table-info">
                        <p>số thứ tự đã cấp</p>
                    </table>
                    </a>
                </div>
                <div class="col-2 bg-success text-white rounded " style="margin-left: 10px;">
                    <a href="">
                    <table class="table table-info">
                        <p>số thứ tự đã sử dụng</p>
                    </table>
                    </a>
                </div>
                <div class="col-2 bg-success text-white rounded" style="margin-left: 10px;">
                    <a href="">
                    <table class="table table-info rounded">
                        <p>số thứ tự đang chờ</p>
                    </table>
                    </a>
                </div>
                <div class="col-2 bg-success text-white rounded" style="margin-left: 10px;">
                    <a href="">
                    <table class="table table-info">
                        <p>số thứ tự đã bỏ qua</p>
                    </table>
                    </a>
                </div>    
                </div>
                
                

                <h4 id="list-item-2">Item 2</h4>
                <p>...</p>
                
            </div>
            </div>
            <div class="col-3">
            <div class="profile bg-success text-white" style="height: 150px">
                <a href="">
                <div class="row">
                    <div class="col-5">
                    <img src="" alt="">
                    </div>
                    <div class="col-7">
                    <p>Xin chào <br> <b>{{ Auth::user()->name }}</b></p>
                    </div>
                </div>  
                </a>
                
            </div>
            
            <div>
                <h4 id="list-item-1">Tổng quan</h4>
                <div class="row border border-info rounded mb-4">
                <div class="col-3"></div>
                <div class="col-4">
                    <p><b>4.221</b></p>
                    <p>Thiết bị</p>
                </div>
                <div class="col-5">
                    <p>Đang hoạt động:</p>
                    <p>Ngưng hoạt động:</p>
                </div>
                </div>
                <div class="row border border-info rounded mb-4">
                <div class="col-3"></div>
                <div class="col-4">
                    <p><b>4466</b></p>
                    <p>Dịch vụ</p>
                </div>
                <div class="col-5 ">
                    <p>Đang hoạt động:</p>
                    <p>Ngưng hoạt động:</p>
                </div>
                </div>
                <div class="row border border-info rounded mb-4">
                <div class="col-3"></div>
                <div class="col-4">
                    <p><b>4.221</b></p>
                    <p>Cấp số</p>
                </div>
                <div class="col-5">
                    <p>Đang hoạt động:</p>
                    <p>Ngưng hoạt động:</p>
                </div>
                </div>
                <h4 id="list-item-4">Item 4</h4>
                <p>...</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
