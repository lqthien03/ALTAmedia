{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
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
        <div class="row">
            <div class="col-5 text-center">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
                        <img src="{{URL('images/Logo alta.png')}}" alt="" class="mt-5"> 
                    </div>
                    <br>
                    <h4>Đặt lại mật khẩu</h4>
                    <div class="mb-3" style="padding-left: 100px;padding-right:100px">
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
            <div class="col-7 text-center">
                <img src="{{url('images/banner2.png')}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
