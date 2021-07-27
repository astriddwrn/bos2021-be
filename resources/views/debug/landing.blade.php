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
<body class="bg-cWhite">
    {{-- Fun Fact --}}
    <div class="w-full font-sans my-24 px-24">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14 text-center">Fun facts about BNCC!</h1>
        <div class="w-full flex flex-col items-center">
            <div>
                <div class="flex flex-row items-center mb-8">
                    <div class="bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-32.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="font-medium text-2xl text-cBlackHome leading-10">
                        BNCC has reached its 32nd year! We've had an amazing <br>journey so far.
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-partner.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="font-medium text-2xl text-cBlackHome leading-10">
                        BNCC has partnered with many big companies, such as<br> Gojek, tiket.com, Shopee, Tokopedia and more!
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-product.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="font-regular text-2xl text-cBlackHome leading-10">
                        BNCC has a software house (FAVESOLUTION) and online<br> media (Filemagz)!
                    </div>
                </div>

                <div class="flex flex-row items-center mb-8">
                    <div class="bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-8 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-schedule.svg')}}" alt="" class="w-20 ff-img">
                    </div>
                    <div class="font-regular text-2xl text-cBlackHome leading-10">
                        BNCC has organized many national events with more than <br>1,000 participants,
                        including BNCC Techno Talk  1, BNCC<br> Techno Talk 2, TechnoScape, and more!
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Why BNCC? --}}
    <div class="w-full font-sans my-32 px-24">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14 text-center">Why BNCC?</h1>
        <div class="w-full flex flex-col flex-wrap justify-between items-center">

            <div class="w-full flex flex-row justify-center items-center mb-12">
                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20 mx-9">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>
            </div>


            <div class="flex flex-row justify-between items-center">
                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20 mx-9">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl p-8 py-20">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="">
                    <h2 class="font-bold text-2xl py-6">Networking</h2>
                    <p class="text-xl text-center leading-9">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>
            </div>

        </div>
        <h1 class="font-bold text-cBlackHome text-4xl text-center mt-14">And many more!</h1>
    </div>


    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/landing.js')}}"></script>
</body>
</html>
