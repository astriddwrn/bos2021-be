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
    <link rel="stylesheet" href="{{ asset('css/comingSoon.css') }}">

</head>
<body class="font-sans">


    <div class="w-screen h-screen bg-bgSpace relative">

        <div class="w-full h-full flex flex-col justify-center items-center relative z-10">
            <div class="font-extrabold text-3xl text-center text-cWhite font-sans mb-5">BNCC Opening Season 2021</div>
            <div class="font-extrabold text-6xl text-center text-cWhite font-sans flex flex-row items-center mb-8">COMING SOON</div>
            <div class="relative mb-8">
                <div class="clock" id="clock1"></div>
                <div class="flex flex-row justify-around text-center mt-2">
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Days</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Hours</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Minutes</label>
                    <label class="font-extrabold text-cWhite text-2xl font-sans">Seconds</label>
                </div>
            </div>
            <div class="text-sans text-cWhite font-medium text-xl ">Subscribe to our mailing list to get notified when we are open!</div>
            <form action="{{route('newsletter')}}" method="POST">
            @csrf
                <div class="flex flex-row items-center w- h-12 mt-5" style="width: 480px">
                    <input class="w-full h-full px-5 py-2 text-xl bg-cLightGray outline-none" type="email" name="email" id="email" placeholder="Leave your email here">
                    <button class="h-full px-4 bg-cLightGray border-none outline-none"><img class="w-8" src="{{asset('Asset/Image/comingSoon/button.svg')}}" alt=""></button>
                </div>
            </form>
            <div class="mt-5 flex flex-row social">
                <span class="mr-2"><img class="" src="{{asset('Asset/Image/comingSoon/instagram.png')}}" alt=""></span>
                <span class=" mr-2"><img class="" src="{{asset('Asset/Image/comingSoon/linkedin.png')}}" alt=""></span>
                <span class=" mr-2"><img class="" src="{{asset('Asset/Image/comingSoon/youtube.png')}}" alt=""></span>
                <span class=" mr-2"><img class="" src="{{asset('Asset/Image/comingSoon/twitter.png')}}" alt=""></span>
                <span class=" mr-2"><img class="" src="{{asset('Asset/Image/comingSoon/facebook.png')}}" alt=""></span>

            </div>
        </div>
        <img class="stars w-10/12 absolute z-1" src="{{url('./Asset/Image/countdown/bg-stars.svg')}}" alt="">
        <img class="absolute bottom-0 z-3 w-full" src="{{url('./Asset/Image/countdown/bg-cloud1.svg')}}" alt="">
        <img class="rocket absolute z-4" src="{{url('./Asset/Image/countdown/bg-rocket.svg')}}" alt="">
        <img class="absolute bottom-0 z-5 w-full" src="{{url('./Asset/Image/countdown/bg-cloud2.svg')}}" alt="">
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/flipclock.js')}}"></script>
    <script src="{{url('./js/comingSoon.js')}}"></script>
</body>
</html>
