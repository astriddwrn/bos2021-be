<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BNCC Launching</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="text-base">
    @error('email')
    <div class="fixed top-0 w-screen z-50 flex flex-row justify-between p-4 failed-notif">
        <h6 class="text-cWhite sm:text-md text-sm">{{$message}}</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
    </div>
    @enderror
    @error('password')
    <div class="fixed top-0 w-screen z-50 flex flex-row justify-between p-4 failed-notif">
        <h6 class="text-cWhite sm:text-md text-sm">{{$message}}</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
    </div>
    @enderror
    <div class="flex flex-row font-sans">
        <div class="main-container lg:static lg:bg-cWhite absolute lg:w-5/12 sm:w-8/12 w-11/12 z-10 lg:h-screen h-full flex flex-col items-center justify-center ">
            <div class="h-10 lg:hidden"></div>
            <div class="">
                <form action="{{route('login')}}" class="w-full login flex flex-col items-center bg-cWhite lg:rounded-none rounded-2xl" method="POST">
                    <a href="#"><img class="lg:mt-20 mt-10 sm:w-56 w-44 " src="{{url('./Asset/Image/auth/logo.svg')}}" alt="BNCC Launching"></a>

                    @csrf
                    <div class="login-sec w-96 section xl:px-0 px-10 ">
                        <div class="mt-11 relative">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Binusian Email</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="email" id="login-email" placeholder="example@binus.ac.id">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-11 relative">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="login-password" name="password" placeholder="Example123">
                            <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="BNCC Launching">
                            <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="BNCC Launching">
                            <span class="msg-error"></span>
                        </div>

                        <div class="text-xl text-center mt-8"><a href="{{ route('password.request') }}"><span class="text-cLightBlue">Forgot your password?</span></a></div>

                        <div class="w-100">
                            <div class="text-center btn-continue btn-login text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-8 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Login</div>
                        </div>

                        <div class="info text-xl w-full text-center mb-10"><span class="text-cDarkBlue mr-2">Not registered yet?</span><a href="{{url('/register')}}"><span class="text-cLightBlue">Register here</span></a></div>

                    </div>

                </form>
            <div class="h-10 lg-hidden"></div>

            </div>

        </div>
        <div class="lg:w-7/12 w-full  h-screen bg-bgSpace overflow-hidden fixed right-0">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="BNCC Launching">
            <img class="lg:block hidden rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="BNCC Launching">
        </div>
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>
