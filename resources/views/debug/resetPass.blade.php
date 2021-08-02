<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="bg-bgSpace w-full h-screen fixed">
        <img style="left:50%; top:50%; transform: translate(-50%, -50%);" class="w-screen absolute" src="{{ asset('Asset/Image/auth/bg-stars2.svg')}}" alt="">
    </div>

        <div style="left:50%; top:50%; transform: translate(-50%, -50%);" class="w-screen absolute lex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center ">
                <div class="h-10 lg-hidden"></div>
                <form action="" style="overflow:hidden; max-height:630px; max-width: 550px" class="w-11/12 resetPass-form sm:px-14 px-5 py-10 rounded-xl flex flex-col items-center  justify-center bg-cWhite " method="POST" style="overflow: hidden;">
                    @csrf
                    <a href="#"><img class="mb-10 sm:w-56 w-44" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>

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
                <div class="h-10 lg-hidden"></div>
            </div>
        </div>




    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>
