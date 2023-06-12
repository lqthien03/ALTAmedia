<div class="col-2 left_sidebar">
    <div class="mt-4 mb-3 navbar ">
        <img src="{{url('images/Logo alta.png')}}" alt="" class="w-1 text-center">
    </div>
    <div class="container mt-3 p-0 ">

        <ul class="nav flex-column mt-5">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class='bx bxs-dashboard '></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/device"><i class='bx bxs-devices'></i> Thiết bị</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/service"><i class='bx bx-conversation '></i> Dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/progression"><i class='bx bxs-bar-chart-alt-2 '></i> Cấp số</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/report"><i class='bx bxs-report'></i> Báo cáo</a>
          </li>

          <li class="nav-item ">
            <div class="dropdown dropend ">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                <i class='bx bxs-cog'></i> Cài Đặt Hệ Thống :</a>
              <ul class="dropdown-menu p-0">
                <li><a class="dropdown-item" href="#">Quản lý vai trò</a></li>
                <li><a class="dropdown-item" href="#">Quản lý tài khoản</a></li>
                <li><a class="dropdown-item" href="#">Nhật ký người dùng</a></li>
              </ul>
            </div>


          </li>
        </ul>
    </div>
    <div class="logout-button mx-auto ">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="logout">
                <x-dropdown-link class="text-custom-button" :href="route('logout')" onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class='bx bx-log-out ' style="color: #FF7506">Đăng xuất</i>
                {{-- {{ __('Đăng xuất') }} --}}
                </x-dropdown-link>

            </div>

        </form>
    </div>
</div>
