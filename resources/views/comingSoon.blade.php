<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNCC Launching</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">
    <link rel="stylesheet" href="{{ asset('css/countdown.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comingSoon.css') }}">

</head>
<body class="font-sans">

    <div class="w-screen h-screen bg-bgSpace relative">
        {{-- Succeeed --}}
        <div class="absolute w-screen z-50 flex flex-row justify-between p-4 succeed-notif hidden">
            <h6 class="text-cWhite sm:text-md text-sm">Your email is added. We'll inform you for further updates soon!</h6>
            <img class="w-4 close" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
        </div>
        {{-- Failed --}}
        <div class="absolute w-screen z-50 flex flex-row justify-between p-4 failed-notif hidden">
            <h6 class="text-cWhite sm:text-md text-sm">This email has been suscribed! Please enter other email.</h6>
            <img class="w-4 close" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
        </div>

        <div class="w-full h-full flex flex-col justify-center items-center relative z-10">
            @if ($message = Session::get('success'))
	        <div class="alert alert-success alert-block">
		         <strong>{{ $message }}</strong>
	        </div>
        @endif
        @error('email') <strong> This email has been suscribed! Please enter other email</strong> @enderror
            <div class="font-extrabold text-md md:text-3xl sm:text-xl text-center text-cWhite font-sans mb-3 sm:mb-5">BNCC Opening Season 2021</div>
            <div class="font-extrabold text-4xl md:text-6xl sm:text-5xl text-center text-cWhite font-sans flex flex-row items-center mb-8">COMING SOON</div>
            <div class="relative mb-8">
                <div class="clock" id="clock1"></div>
                <div class="time flex flex-row justify-around text-center mt-2">
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Days</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Hours</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Minutes</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans sec">Seconds</label>
                </div>
            </div>
            <div class="text-sans text-cWhite font-medium w-70 md:w-full sm:w-96 text-md sm:text-xl text-center sm:text-lg px-2">Subscribe to our mailing list to get notified when we are open!</div>
            <form action="{{route('newsletter')}}" method="POST">
            @csrf
                <div class="flex flex-row justify-center items-center h-12 mt-5 mail-cont">
                    <input class="w-56 sm:w-72 sm:w-full h-full px-5 py-2 text-md sm:text-xl bg-cLightGray outline-none" type="email" name="email" id="email" placeholder="Leave your email here">
                    <button class="h-full px-2 bg-cLightGray border-none outline-none text-cDarkBlue"><img class="w-6 sm:w-8" src="{{asset('Asset/Image/comingSoon/button.png')}}" alt="BNCC launching"></button>
                </div>
            </form>

            <div class="mt-5 flex flex-row social">
                <a class=" mr-2" href="https://www.instagram.com/bnccbinus/" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/instagram.svg')}}" alt="BNCC Launching"></a>
                <a class=" mr-2" href="https://www.linkedin.com/company/bina-nusantara-computer-club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/linkedin.svg')}}" alt="BNCC Launching" ></a>
                <a class=" mr-2" href="https://www.youtube.com/channel/UC0BND4Aekeg90GQ1_ZX79Yw" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/youtube.svg')}}" alt="BNCC Launching"></a>
                <a class=" mr-2" href="https://twitter.com/BNCC_Binus" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/twitter.svg')}}" alt="BNCC Launching"></a>
                <a class=" mr-2" href="https://www.facebook.com/bina.nusantara.computer.club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/facebook.svg')}}" alt="BNCC Launching" ></a>

            </div>
        </div>
        <img class="stars w-10/12 absolute z-1 lg:block hidden" src="{{url('./Asset/Image/countdown/bg-stars.svg')}}" alt="BNCC launching">
        <img class="stars-tablet w-full absolute z-1 lg:hidden overflow-hidden" src="{{url('./Asset/Image/comingSoon/stars-tablet.svg')}}" alt="BNCC launching">
        <img class="absolute bottom-0 z-3 w-full" src="{{url('./Asset/Image/countdown/bg-cloud1.svg')}}" alt="BNCC launching">
        <img class="rocket absolute z-4" src="{{url('./Asset/Image/countdown/bg-rocket.svg')}}" alt="BNCC launching">
        <img class="absolute bottom-0 z-5 w-full" src="{{url('./Asset/Image/countdown/bg-cloud2.svg')}}" alt="BNCC launching">
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/flipclock.js')}}"></script>
    <script src="{{url('./js/comingSoon.js')}}"></script>
</body>
</html>
