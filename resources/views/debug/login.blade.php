<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    @error('email')
    <div class="fixed top-0 w-screen z-50 flex flex-row justify-between p-4 failed-notif">
        <h6 class="text-cWhite sm:text-md text-sm">Message Fail</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
    </div>
    @enderror
    @error('password')
    <div class="fixed top-0 w-screen z-50 flex flex-row justify-between p-4 failed-notif">
        <h6 class="text-cWhite sm:text-md text-sm">Message Fail</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
    </div>
    @enderror
    <div class="flex flex-row font-sans">
        <div class="w-5/12 h-screen flex flex-col items-center">
            <a href="#"><img class="mt-20" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>

            <form action="{{route('login')}}" class="w-8/12 relative login" method="POST">
                @csrf
                <div class="login-sec absolute w-full section">
                    <div class="mt-11 relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Binusian Email</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="email" id="login-email" placeholder="example@binus.ac.id">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11 relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="login-password" name="password" placeholder="Example123">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="">
                        <span class="msg-error"></span>
                    </div>

                    <div class="text-xl text-center mt-8"><a href="{{ route('password.request') }}"><span class="text-cLightBlue">Forgot your password?</span></a></div>

                    <div class="w-100">
                        <div class="text-center btn-continue btn-login text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-8 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Login</div>                     
                    </div>
                    {{-- <button type="submit">Login</button> --}}
                </form>

                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Not registered yet?</span><a href=""><span class="text-cLightBlue">Register here</span></a></div>

                </div>


        </div>
        <div class="w-7/12 h-screen bg-bgSpace h-screen overflow-hidden fixed right-0">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="">
            <img class="rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="">
        </div>
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>
