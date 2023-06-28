<div class="col-7 main">
    <br>
    {{-- <h1>@yield('title', $title)</h1><br><br><br> --}}
    <div class="">
        <h4 id="list-item-1">Biểu đồ cấp số</h4>
        <div class=" char row justify-content-center align-items-center">
            <div class="col-2 char_item">
                <a href="" style="">
                    <div class="row">
                        <div class="col-4 icon text-center">
                            <i class='bx bx-calendar-alt  bx-md mt-2' style='color:#6695fb'></i>
                        </div>
                        <div class="col-7">
                            <p>số thứ tự đã cấp</p>
                        </div>
                    </div>
                    <p><b>4.221</b></p>
                </a>
            </div>
            <div class="col-2 char_item ">
                <a href="">
                    <div class="row">
                        <div class="col-4 icon text-center">
                            <i class='bx bx-calendar-check  bx-md mt-2' style='color:#35c75a'></i>
                        </div>
                        <div class="col-7">
                            <p>số thứ tự đã sử dụng</p>
                        </div>
                    </div>
                    <p><b> 3.721</b></p>
                </a>
            </div>
            <div class="col-2 char_item">
                <a href="">
                    <div class="row">
                        <div class="col-4 icon text-center">
                            <i class='bx bx-user-voice  bx-md mt-2' style='color:#ffac6a'></i>
                        </div>
                        <div class="col-7">
                            <p>số thứ tự đang chờ</p>
                        </div>
                    </div>
                    <p><b>468</b></p>
                </a>
            </div>
            <div class="col-2 char_item">
                <a href="">
                    <div class="row">
                        <div class="col-4 icon text-center">
                            <i class='bx bx-calendar-star  bx-md mt-2' style='color:#f86d6d'></i>
                        </div>
                        <div class="col-7">
                            <p>số thứ tự đã bỏ qua</p>
                        </div>
                    </div>
                    <p><b> 32</b></p>
                </a>
            </div>
        </div>



        <h4 id="list-item-2">Item 2</h4>
        <div class="box_chart">
            <canvas id="myChart"></canvas>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const chart = document.getElementById('myChart');

            new Chart(chart, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>



    </div>
</div>
