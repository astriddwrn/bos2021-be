<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flipclock.css') }}">
    <link rel="stylesheet" href="{{ asset('css/countdown.css') }}">
</head>
<body class="font-sans">
   

    <div class="w-screen h-screen bg-bgSpace relative">

        <div class="w-full h-full flex flex-col justify-center items-center relative z-10">
            <div class="font-extrabold text-5xl text-center text-cWhite font-sans">Hi, Alexander Rainer</div>
            <div class="relative mt-20 mb-8">
                <div class="clock" id="clock1"></div>
                <div class="flex flex-row justify-around text-center mt-2">
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Days</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Hours</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Minutes</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Seconds</label>
                </div>

            </div>
            <div class="text-center font-extrabold text-4xl text-cWhite">left until BNCC Launching!</div>
            <div class="text-center text-cWhite font-bold text-xl rounded p-2 bg-cDarkBlue w-3/12 mt-20 hover:bg-cWhite hover:text-cDarkBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Back to Home</div>
        </div>
        <img class="stars w-10/12 absolute z-1" src="{{url('./Asset/Image/countdown/bg-stars.svg')}}" alt="">
        <img class="absolute bottom-0 z-3 w-full" src="{{url('./Asset/Image/countdown/bg-cloud1.svg')}}" alt="">
        <img class="rocket absolute z-4" src="{{url('./Asset/Image/countdown/bg-rocket.svg')}}" alt="">
        <img class="absolute bottom-0 z-5 w-full" src="{{url('./Asset/Image/countdown/bg-cloud2.svg')}}" alt="">
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/flipclock.js')}}"></script>
    <script src="{{url('./js/countdown.js')}}"></script>
</body>
</html>
