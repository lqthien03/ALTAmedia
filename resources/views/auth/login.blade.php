<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .left{
            background-color: #EEEEEE;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mb-5 mt-5">
                        <img src="{{URL('images/Logo alta.png')}}" alt=""> 
                    </div>
                    <!-- Email Address -->
                    {{-- <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div> --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Tên đăng nhập <span>*</span></label>
                        <input class="form-control" type="email" placeholder="email" id="email" aria-describedby="emailHelp" name="email">
                        
                    </div>
            
                    <!-- Password -->
                    {{-- <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div> --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu <span>*</span></label>
                        <input class="form-control" type="password" placeholder="Password" id="password" name="password" />
                    </div>
            
                    <!-- Remember Me -->
                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
            
                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div> --}}
                    <div class=" mb-3"> 
                        <a href="{{ route('password.request')}} "  class="btn p-0" >Quên Mật Khẩu ?</a>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class=" text-center btn btn btn-warning">Đăng nhập</button>
                        
                    </div>
                </form>
            </div>
            <div class="col-7 text-center">
                <img src="{{url('images/banner2.png')}}" alt="">
            </div>
        </div>
    </div>
</body>


    




