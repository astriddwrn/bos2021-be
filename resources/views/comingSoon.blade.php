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

    <div class="w-screen h-screen bg-bgSpace relative overflow-hidden">


        <div class="w-full h-full flex flex-col sm:justify-center items-center relative z-10">
            @if ($message = Session::get('success'))
	        {{-- Succeeed --}}
            <div class="absolute top-0 w-screen z-50 flex flex-row justify-between p-4 succeed-notif">
                <h6 class="text-cWhite sm:text-md text-sm">{{ $message }}</h6>
                <img class="w-4 ml-4 close" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
            </div>
            @endif
            @error('email') {{-- Failed --}}
            <div class="absolute top-0  w-screen z-50 flex flex-row justify-between p-4 failed-notif">
                <h6 class="text-cWhite sm:text-md text-sm">This email has been suscribed! Please enter other email.</h6>
                <img class="w-4 ml-4 close" src="{{asset('Asset/Image/comingSoon/closeBtn.svg')}}" alt="BNCC Launching">
            </div>
            @enderror
            <div class="font-extrabold text-md md:text-3xl sm:text-xl text-center text-cWhite font-sans mb-3 sm:mb-5 mt-5">BNCC Opening Season 2021</div>
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
                    <input class="w-full h-full px-5 py-2 text-md sm:text-xl bg-cLightGray outline-none" type="email" name="email" id="email" placeholder="Leave your email here" required>
                    <button id="sendBtn" class="h-full px-2 bg-cLightGray border-none outline-none text-cDarkBlue hover:bg-cDarkBlue z-50">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-8">
                            <path id="changeClr" d="M1.45967 0.881223L32.5133 16.3952C32.6827 16.4798 32.8253 16.6107 32.925 16.7733C33.0247 16.9358 33.0775 17.1234 33.0775 17.3148C33.0775 17.5062 33.0247 17.6938 32.925 17.8563C32.8253 18.0188 32.6827 18.1498 32.5133 18.2344L1.45765 33.7484C1.28367 33.835 1.08879 33.8692 0.89622 33.8467C0.703649 33.8242 0.521505 33.7461 0.371481 33.6217C0.221456 33.4972 0.109874 33.3317 0.0500226 33.1447C-0.00982853 32.9578 -0.0154257 32.7574 0.0338973 32.5673L3.10994 20.7873C3.1598 20.5967 3.26283 20.4247 3.40667 20.2919C3.55051 20.1592 3.72906 20.0713 3.92091 20.0389L17.8369 17.687C17.9198 17.673 17.998 17.6384 18.0644 17.5861C18.1308 17.5338 18.1833 17.4656 18.2171 17.3876L18.2535 17.2646C18.2724 17.1505 18.2527 17.0334 18.1976 16.9321C18.1426 16.8309 18.0554 16.7515 17.9502 16.7068L17.8369 16.674L3.84406 14.3098C3.65258 14.277 3.47446 14.189 3.33101 14.0562C3.18755 13.9235 3.08483 13.7517 3.03511 13.5614L0.0338973 2.06435C-0.0159387 1.87415 -0.0107288 1.67342 0.0489054 1.48614C0.10854 1.29885 0.220078 1.13293 0.370201 1.00818C0.520325 0.883429 0.702689 0.805122 0.895518 0.782609C1.08835 0.760097 1.28349 0.794331 1.45765 0.881223H1.45967Z" fill="#0054A5"/>
                            </svg>
                    </button>
                </div>
            </form>

            <div class="mt-5 flex flex-row social">
                <a class=" mr-2" href="https://www.instagram.com/bnccbinus/" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/instagram.svg')}}" alt="BNCC Launching"></a>
                <a class=" mr-2" href="https://www.linkedin.com/company/bina-nusantara-computer-club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/linkedin.svg')}}" alt="BNCC Launching" ></a>
                <a class=" mr-2" href="https://www.youtube.com/channel/UC0BND4Aekeg90GQ1_ZX79Yw" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/youtube.svg')}}" alt="BNCC Launching"></a>
                <a class=" mr-2" href="https://twitter.com/BNCC_Binus" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/twitter.svg')}}" alt="BNCC Launching"></a>
                <a class="" href="https://www.facebook.com/bina.nusantara.computer.club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/facebook.svg')}}" alt="BNCC Launching" ></a>

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
