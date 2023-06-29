<div class="col-3">
    <div class="profile  text-white" style="height: 100px">
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

    <div>
        <h4 id="list-item-1">Tổng quan</h4>
        <div class="row overview mb-3" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="col-3"></div>
            <div class="col-3">
                <p><b>4.221</b></p>
                <p>Thiết bị</p>
            </div>
            <div class="col-6 ">
                <ul style="list-style-type: none;">
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Đã hoạt động</span>
                        <span class="dashboard-number queuing-color col-4">{{ $devices[0]->active }}</span>
                    </li>
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Ngưng hoạt động</span>
                        <span
                            class="dashboard-number queuing-color col-4">{{ $devices[0]->total - $devices[0]->active }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row overview mb-4" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="col-3"></div>
            <div class="col-3">
                <p><b>4466</b></p>
                <p>Dịch vụ</p>
            </div>
            <div class="col-6">
                <ul style="list-style-type: none;">
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Đã hoạt động:</span>
                        <span class="dashboard-number queuing-color col-4">{{ $services[0]->active }}</span>
                    </li>
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Ngưng hoạt động</span>
                        <span
                            class="dashboard-number queuing-color col-4">{{ $services[0]->total - $services[0]->active }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row overview mb-4" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="col-3"></div>
            <div class="col-3">

                <p>Cấp số</p>
            </div>
            <div class="col-6">
                <ul style="list-style-type: none;">
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Đã sử dụng:</span>
                        <span class="dashboard-number queuing-color col-4">{{ $progressions[0]->used }}</span>
                    </li>
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Đang chờ:</span>
                        <span class="dashboard-number queuing-color col-4">{{ $progressions[0]->waiting }}</span>
                    </li>
                    <li class="dashboard-state">
                        <span class=" dashboard-state">Bỏ qua:</span>
                        <span class="dashboard-number queuing-color col-4">{{ $progressions[0]->canceled }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <img src="{{ url('images/Date picker.png') }}" alt="" class=""
                style="width:300px; height:300px">
        </div>

    </div>
</div>
