
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
            padding-left: 55px;
           padding-right: 55px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center left">
                <form action="{{ route('password.store') }}" method="post" class="table">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
                        <img src="{{URL('images/Logo alta.png')}}" alt="" class="mt-5">
                    </div>
                    <br>
                    <br>
                    <h4>Đặt lại mật khẩu mới</h4>

                    <div>
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <x-text-input id="email" class="block mt-1 w-full" type="hidden" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label mb-2 ">Mật khẩu *</label>
                        <input type="password" class="form-control inputs" id="password" name="password">
                        <span class="p-absolute visible-password bi bi-eye-slash" id="togglePassword"></span>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label mb-2 ">Nhập lại mật khẩu *</label>
                        <input type="password" class="form-control inputs" id="password_confirmation" name="password_confirmation">
                        <span class="p-absolute visible-password-confirm bi bi-eye-slash" id="togglePassword"></span>
                    </div>

                    <div id="button-pri" class="mt-3 m-auto">
                        <button type="submit" class="btn btn-warning" style="width: 200px">Xác nhận</button>
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
