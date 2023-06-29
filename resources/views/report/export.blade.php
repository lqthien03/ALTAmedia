{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuất báo cáo</title>

    <style>
        h1{
            text-align: center;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        #customers {
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #fff2e7;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #ff7506;
        color: white;
        }
    </style>
</head>
<body>
<div>
    <h1>Bảng báo cáo cấp số</h1>
    <table id="customers">
        <thead >
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên dịch vụ</th>
            <th scope="col">Thời gian cấp</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Nguồn cấp </th>
            </tr>
        </thead>

        @foreach ($reports as $item)
        <tr>
            <th scope="row">{{$item->progression->stt}}</th>
            <td>{{$item->service->name_service}}</td>
            <td>{{$item->progression->time_cap}}</td>
            <td>{{$item->status_state->name_state}}</td>
            <td>{{$item->supply->name_supply}}</td>
        </tr>
        @endforeach

    </table>
</div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuất báo cáo</title>

    <style>
        h1 {
            text-align: center;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #customers {
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #fff2e7;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff7506;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <h1>Bảng báo cáo cấp số</h1>
        <table id="customers">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên dịch vụ</th>
                    <th scope="col">Thời gian cấp</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Nguồn cấp</th>
                </tr>
            </thead>

            @foreach ($reports as $item)
                <tr>
                    <th scope="row">{{ $item->progression->stt }}</th>
                    <td>{{ $item->progression->ten_dich_vu }}</td>
                    <td>{{ $item->progression->time_cap }}</td>
                    <td>{{ $item->status_state->name_state }}</td>
                    <td>{{ $item->supply->name_supply }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
