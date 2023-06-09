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
        <h6 class="text-cWhite sm:text-md text-sm">{{$message}}</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
    </div>
    @enderror

    <div class="bg-bgSpace w-full h-screen fixed">
        <img style="left:50%; top:50%; transform: translate(-50%, -50%);" class="w-screen absolute" src="{{ asset('Asset/Image/auth/bg-stars2.svg')}}" alt="">
    </div>

        <div style="left:50%; top:50%; transform: translate(-50%, -50%);" class="absolute">

            <form action="{{ route('password.update') }}" style="overflow:hidden; height:630px; width: 550px" class="w-full resetPass-form px-14 rounded-xl flex flex-col items-center  justify-center bg-cWhite " method="POST" style="overflow: hidden;">
                @csrf
                <a href="#"><img class="mb-10" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <input type="hidden" value="{{$request->email}}" name="email">

                <!-- SEND EMAIL PERTAMA -->
                <div class="text-center text-3xl font-bold text-cDarkBlue">Reset Your Password</div>

                <div class="mt-5 w-full relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="password" name="password" placeholder="Example123">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-5 w-full relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Confirm Password</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" name="password_confirmation" id="confirm" placeholder="Example123">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="">
                        <span class="msg-error"></span>
                    </div>

                <div class="w-full">
                    <div class="text-center btn-continue btn-login text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-8 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Reset Passsword</div>
                </div>
                <div class="info text-xl w-full text-center"><span class="text-cDarkBlue mr-2">Remember your password?</span><a href=""><span class="text-cLightBlue">Login Here</span></a></div>
            </form>
        </div>




    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>

