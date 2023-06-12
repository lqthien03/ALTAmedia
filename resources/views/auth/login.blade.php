<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .left{
            background-color: #EEEEEE;
            height: 713px
        }
        .table{
           padding-left: 55px;
           padding-right: 55px;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 left" >
                <form method="POST" action="{{ route('login') }} " class="table">
                    @csrf
                    <div class="text-center mb-5 mt-5">
                        <img src="{{URL('images/Logo alta.png')}}" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Tên đăng nhập <span>*</span></label>
                        <input class="form-control" type="email" placeholder="email" id="email" aria-describedby="emailHelp" name="email">
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu <span>*</span></label>
                        <input class="form-control" type="password" placeholder="Password" id="password" name="password" />
                    </div>


                    <div class=" mb-3">
                        <a href="{{ route('password.request')}} "  class="btn p-0" >Quên Mật Khẩu ?</a>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class=" text-center btn btn btn-warning">Đăng nhập</button>
                    </div>
                </form>
            </div>
            <div class="col-8 text-center">
                <img src="{{url('images/banner2.png')}}" alt="">
            </div>
        </div>
    </div>
</body>







