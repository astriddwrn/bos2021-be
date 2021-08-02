<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard Countdown | BNCC Launching</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">
    <link rel="stylesheet" href="{{ asset('css/countdown.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comingSoon.css') }}">

</head>
<body class="font-sans">
    
    <div class="w-screen h-screen bg-bgSpace relative overflow-hidden">

        <div class="main-container w-full h-full flex flex-col sm:justify-center items-center relative z-10">
            <div class="font-extrabold sm:text-5xl text-3xl text-center text-cWhite font-sans sm:mt-0 mt-10">Hi, {{(Auth::user()->fullName)}}</div>
         
            <div class="relative mt-20 mb-8">
                <div class="clock" id="clock1"></div>
                <div class="time flex flex-row justify-around text-center mt-2">
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Days</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Hours</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans">Minutes</label>
                    <label class="font-extrabold text-cWhite text-xl md:text-2xl font-sans sec">Seconds</label>
                </div>
            </div>
         
            <div class="text-center font-extrabold sm:text-4xl text-xl text-cWhite">left until BNCC Launching!</div>

            <div class="text-center text-cWhite font-bold sm:text-xl text-lg rounded p-2 bg-cLightBlue sm:w-96 w-64 sm:mt-20 mt-10 hover:bg-cWhite hover:text-cLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn"><a href="{{route('dashboard')}}">Return to Dashboard</a></div>

        </div>
        <img class="stars w-10/12 absolute z-1" src="{{url('./Asset/Image/countdown/bg-stars.svg')}}" alt="">
        <img class="absolute bottom-0 z-3 w-full" src="{{url('./Asset/Image/countdown/bg-cloud1.svg')}}" alt="">
        <img class="rocket absolute z-4" src="{{url('./Asset/Image/countdown/bg-rocket.svg')}}" alt="">
        <img class="absolute bottom-0 z-5 w-full" src="{{url('./Asset/Image/countdown/bg-cloud2.svg')}}" alt="">
    </div>
    <script>
        var countdownTime = new Date({{$countdown}});
    </script>
    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/flipclock.js')}}"></script>
    <script src="{{url('./js/countdown.js')}}"></script>
</body>
</html>
