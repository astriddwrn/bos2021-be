
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

    <div class="bg-bgSpace w-full h-screen fixed overflow-hidden">
        <img style="left:50%; top:50%; transform: translate(-50%, -50%);" class="w-screen absolute" src="{{ asset('Asset/Image/auth/bg-stars2.svg')}}" alt="">
    </div>
        <div style="left:50%; top:50%; transform: translate(-50%, -50%); width: 550px " class="absolute ">
            <div class="rounded-xl flex flex-col items-center  justify-center bg-cWhite py-10">
                <a href="#"><img class="" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>

                <div action="" class="w-full px-14 flex flex-col justify-center">
                <div class="mt-10">Hello</div>
                <div class="mt-5">You are receiving this email because we received a password reset request for your account</div>
                <div class=" mt-5 text-center btn-continue btn-login text-cWhite font-bold text-xl rounded-xl p-2 bg-cLightBlue w-54 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Reset Password</div>
                <div  class="mt-5">If you did not request a password reset, no further action is required.</div>
                <div  class="mt-5">Regard,</div>
                <div>BNCC</div>
                <hr  class="mt-5 border-t-2 border-cLightBlue">
                <div  class="mt-5">If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web owser:</div>
                <p class="mt-5 w-96 font-semibold text-cDarkerLightBlue">[link]</p>
                </div>
            </div>
            <div class="text-cWhite font-semibold mt-5 text-center">All Right Reserved BNCC 2021 © Bina Nusantara Computer Club</div>
        </div>


    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>

