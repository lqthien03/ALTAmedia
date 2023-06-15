<div class="col-3">
    <div class="profile  text-white" style="height: 150px">
        {{-- <a href="">
        <div class="row mt-3">
            <div class="col-3" style="float: right">
                <i class='bx bxs-bell' style='color:#ffac6a'></i>
            </div>
            <div class="col-3">
                <img src="{{url('images/user.png')}}" alt="" class="w-90">
            </div>
            <div class="col-6">
                <p>Xin chào<br><b>{{ Auth::user()->name }}</b></p>
            </div>
        </div>

        </a> --}}
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



