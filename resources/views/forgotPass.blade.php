<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | BNCC Launching</title>
    <link rel="image_src" href="{{ asset('Asset/Image/auth/logo-png')}}" />
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    @error('email')
    <div class="fixed top-0 w-screen z-50 flex flex-row justify-between p-4 failed-notif">
        <h6 class="text-cWhite sm:text-md text-sm">{{$message}}</h6>
        <img class="w-4 ml-4 close cursor-pointer" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
        <!-- $message -->
    </div>
    @enderror

    <div class="bg-bgSpace w-full h-screen fixed">
        <img style="left:50%; top:50%; transform: translate(-50%, -50%);" class="w-screen absolute" src="{{ asset('Asset/Image/auth/bg-stars2.svg')}}" alt="BNCC Launching">
    </div>

    <div class="absolute flex flex-col items-center justify-center absolute " style="left:50%; top:0%; transform: translate(-50%, -50%); max-height:630px; max-width: 550px" >

        <div>
            <form action="" class="rounded-xl bg-cWhite w-full forgotPass-form px-14 flex flex-col justify-center items-center " method="POST" style="overflow: hidden;">
                @csrf
                <a href="#"><img class="mb-10" src="{{url('./Asset/Image/auth/logo.svg')}}" alt="BNCC Launching"></a>

                <!-- SEND EMAIL PERTAMA -->
                <div class="text-center text-3xl font-bold text-cDarkBlue">Forgot your Password?</div>
                <div class="text-center mt-5">Enter the binusian email and we will send an email with instructions to reset your password.</div>
                <!-- INSTRUCTIONS -->

                <div class="text-center text-3xl font-bold text-cDarkBlue">Instructions has been sent!</div>
                <div class="text-center mt-5 w-full">Please check your binusian email for the link we sent to reset your password. If it does not appear within a few minutes, please check your spam folder. If you have not received the email, you may try again.</div>

                <div class="mt-5 w-full">
                    <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Binusian Email</div>
                    <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="email" id="forgot-email" placeholder="example@binus.ac.id">
                    <span class="msg-error"></span>
                </div>


                <div class="w-full">
                    <div class="text-center btn-continue btn-login text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-8 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Send Instructions</div>
                </div>
                <div class="info text-xl w-full text-center"><span class="text-cDarkBlue mr-2">Remember your password?</span><a href="{{url('/login')}}"><span class="text-cLightBlue">Login Here</span></a></div>
            </form>
        </div>


    </div>



    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>
