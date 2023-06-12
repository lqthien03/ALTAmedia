
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .left{
            background-color: #EEEEEE;
            height: 713px;
        }
        .table{
            padding-left: 15px
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center left">
                <form action="{{ route('password.email') }}" method="post" class="table">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
                        <img src="{{URL('images/Logo alta.png')}}" alt="" class="mt-5">
                    </div>
                    <br>
                    <h4>Đặt lại mật khẩu</h4>
                    <div class="mb-3" style="padding-left: 20px;padding-right: 20px">
                        <label for="password" class="form-label mb-2 ">Vui lòng nhập email để đặt lại mật khẩu của bạn *</label>
                        <input type="email" class="form-control inputs" id="email" name="email">
                    </div>
                    <div class="text-center mt-5">
                        <div class="button">
                            <button type="reset" class="btn btn-warning">Hủy</button>
                            <button type="submit" class="btn btn-warning">Tiếp tục</button>
                        </div>
                    </div>
                    <div id="button-pri" class="mt-3 m-auto">

                </div>

                </form>
            </div>
            <div class="col-8 text-center">
                <img src="{{url('images/banner2.png')}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
