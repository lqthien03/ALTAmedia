
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ URL('css/dashboard.css')}}"> --}}
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 left_sidebar">
                <div class="text-center mt-4 mb-5 ">
                    <img src="{{url('images/Logo alta.png')}}" alt="" class="w-1" >
                </div>
                <div class="container mt-3 p-0">
                    <img src="{{ URL('img/logo.png')}}" class="mx-auto d-block mt-4" width="100px"  alt="">
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
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.68578 18.0437L8.68301 18.0421L4.11493 15.4093C3.16175 14.7663 2.78258 14.4693 2.59073 14.1388C2.40772 13.8237 2.36667 13.4258 2.36667 12.4087V7.59199C2.36667 6.57339 2.40559 6.17441 2.58449 5.86024C2.77032 5.53392 3.13834 5.24176 4.07395 4.60765L8.67509 1.94996L8.67617 1.94933C9.02135 1.74879 9.49263 1.63574 9.9875 1.63574C10.4824 1.63574 10.9537 1.74879 11.2988 1.94933L11.3004 1.95024L15.8851 4.59142C16.8383 5.23437 17.2174 5.5314 17.4093 5.86181C17.5923 6.177 17.6333 6.57483 17.6333 7.59199V12.4003C17.6333 13.4189 17.5944 13.8179 17.4155 14.1321C17.2297 14.4584 16.8617 14.7506 15.9261 15.3847L11.3261 18.0417C11.3259 18.0418 11.3257 18.0419 11.3255 18.042C10.9669 18.2477 10.4907 18.3587 10 18.3587C9.50799 18.3587 9.03359 18.2472 8.68578 18.0437ZM4.23307 4.81747L4.21803 4.82616L4.20364 4.83587L4.18752 4.84675C3.86164 5.06666 3.59376 5.24744 3.38776 5.41047C3.17516 5.57872 2.99255 5.7551 2.86229 5.97965C2.72902 6.2094 2.67395 6.44876 2.64865 6.70466C2.62498 6.94414 2.62499 7.23234 2.625 7.56891L2.625 7.59199V12.4003L2.625 12.4238C2.62499 12.76 2.62498 13.0487 2.64928 13.2892C2.67533 13.5468 2.73203 13.7872 2.86795 14.0184C3.00031 14.2434 3.18561 14.4215 3.40206 14.5926C3.61237 14.7588 3.88614 14.9441 4.22055 15.1703L4.23646 15.1811L4.2513 15.1911L4.26681 15.2001L8.81681 17.8251L8.81702 17.8252C9.16297 18.0246 9.60364 18.1045 10.0042 18.1045C10.4047 18.1045 10.8454 18.0246 11.1913 17.8252L11.1919 17.8249L15.7753 15.1748L15.7909 15.1658L15.8059 15.1556L15.822 15.1447C16.1458 14.9248 16.4121 14.744 16.6169 14.5809C16.8284 14.4125 17.01 14.236 17.1394 14.0115C17.2718 13.782 17.3264 13.5429 17.3515 13.2874C17.375 13.048 17.375 12.76 17.375 12.4233V12.4003V7.59199V7.56856C17.375 7.23229 17.375 6.94359 17.3507 6.70316C17.3247 6.44552 17.268 6.20512 17.132 5.97396C16.9997 5.74887 16.8144 5.57082 16.5979 5.39973C16.3876 5.23349 16.1138 5.04824 15.7794 4.82195L15.7635 4.81122L15.7487 4.80118L15.7332 4.79223L11.1862 2.16898C11.1857 2.16867 11.1851 2.16836 11.1846 2.16805C10.8382 1.96552 10.3984 1.89199 10 1.89199C9.60156 1.89199 9.1617 1.96554 8.81523 2.16814L4.23307 4.81747Z" stroke="#A9A9B0"/>
                            <path d="M10 12.625C8.55114 12.625 7.375 11.4489 7.375 10C7.375 8.55114 8.55114 7.375 10 7.375C11.4489 7.375 12.625 8.55114 12.625 10C12.625 11.4489 11.4489 12.625 10 12.625ZM10 7.625C8.69052 7.625 7.625 8.69052 7.625 10C7.625 11.3095 8.69052 12.375 10 12.375C11.3095 12.375 12.375 11.3095 12.375 10C12.375 8.69052 11.3095 7.625 10 7.625Z" fill="#292D32" stroke="#A9A9B0"/>
                            </svg>Cài Đặt Hệ Thống :</a>
                          {{-- <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            Cài Đặt Hệ Thống :
                          </button> --}}
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
    </div>
</body>
</html>
