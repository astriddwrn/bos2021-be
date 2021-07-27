<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    {{-- Fun Fact --}}
    <div class="w-full font-sans my-12 px-24">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-12 text-center">Fun facts about BNCC!</h1>
        <div class="w-full flex flex-col items-center">
            <div>
                <div class="flex flex-row items-center mb-8">
                    <div class="shadow-bsfF p-6 rounded-2xl mr-8">
                        <img src="{{url('./Asset/Image/landing/ff-32.svg')}}" alt="" class="w-24">
                    </div>
                    <div class="font-medium text-2xl text-cHomeGray leading-10">
                        BNCC has reached its 32nd year! We've had an amazing <br>journey so far.
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="shadow-bsfF p-6 rounded-2xl mr-8">
                        <img src="{{url('./Asset/Image/landing/ff-partner.svg')}}" alt="" class="w-24">
                    </div>
                    <div class="font-medium text-2xl text-cHomeGray leading-10">
                        BNCC has partnered with many big companies, such as<br> Gojek, tiket.com, Shopee, and more!
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="shadow-bsfF p-6 rounded-2xl mr-8">
                        <img src="{{url('./Asset/Image/landing/ff-product.png')}}" alt="" class="w-24">
                    </div>
                    <div class="font-medium text-2xl text-cHomeGray leading-10">
                        BNCC has a software house (FAVESOLUTION) and online<br> media (Filemagz)!
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="shadow-bsfF p-6 rounded-2xl mr-8">
                        <img src="{{url('./Asset/Image/landing/ff-schedule.svg')}}" alt="" class="w-20">
                    </div>
                    <div class="font-medium text-2xl text-cHomeGray leading-10">
                        BNCC has organized many national events with more than <br>1,000 participants,
                        including BNCC Techno Talk  1, BNCC<br> Techno Talk 2, TechnoScape, and more!
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/landing.js')}}"></script>
</body>
</html>
