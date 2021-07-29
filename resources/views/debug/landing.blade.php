<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNCC Launching</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body class="bg-cWhite">
    {{-- Fun Fact --}}
    <div class="w-full font-sans py-16 px-24 overflow-x">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14 text-center">Fun facts about BNCC!</h1>
        <div class="w-full flex flex-col justify-center items-center ml-16">
            <div>
                <div class="w-full flex flex-row justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-32.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-medium text-2xl text-cBlackHome leading-10 pr-48">
                        BNCC has reached its 32nd year! We've had an amazing journey so far.
                    </div>
                </div>

                <div class="w-full flex flex-row justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-partner.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-medium text-2xl text-cBlackHome leading-10 pr-48">
                        BNCC has partnered with many big companies, such as Gojek, tiket.com, Shopee, Tokopedia and more!
                    </div>
                </div>

                <div class="w-full flex flex-row justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-product.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-medium text-2xl text-cBlackHome leading-10 pr-48">
                        BNCC has a software house (FAVESOLUTION) and online media (Filemagz)!
                    </div>
                </div>

                <div class="w-full flex flex-row justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-schedule.svg')}}" alt="" class="w-20 ff-img">
                    </div>
                    <div class="w-4/6 font-medium text-2xl text-cBlackHome leading-10 pr-48">
                        BNCC has organized many national events with more than 1,000 participants,
                        including BNCC Techno Talk  1, BNCC Techno Talk 2, TechnoScape, and more!
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Why BNCC? --}}
    <div class="w-full font-sans py-16 px-24">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-8 text-center">Why BNCC?</h1>
        <div class="w-full flex flex-col flex-wrap justify-between items-center">

            <div class="w-full flex flex-row flex-wrap justify-center items-center mb-12">
                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">Networking</h2>
                    <p class="text-base text-center leading-8 px-10">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-hardskills.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">Hard Skills</h2>
                    <p class="text-base text-center leading-8 px-10">
                        Kickstart your career by learning various on-demand
                        hard skills in BNCC, like mobile apps, web development,
                        UI/UX design, and more!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-softskills.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">Soft Skills</h2>
                    <p class="text-base text-center leading-8 px-10">
                        Having a wide variety of soft skills can be beneficial when
                        applying for a job. Develop your public speaking, leadership,
                        and many more with BNCC!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-sat.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">SAT Points</h2>
                    <p class="text-base text-center leading-8 px-10">
                        Are you worried about obtaining SAT points, which is one of the
                        requirements to pursue your thesis? We've got you covered!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-experience.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">Experience</h2>
                    <p class="text-base text-center leading-8 px-10">
                        You’ll get hands-on work experience from participating in various programs
                        and working in groups that will boost the value of your CV!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-20 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-6">Tech Insights</h2>
                    <p class="text-base text-center leading-8 px-10">
                        Stay updated with the hottest tech industry insights. You can also expand
                        your knowledge beyond your current field of study!
                    </p>
                </div>
            </div>
        </div>
        <h1 class="font-bold text-cBlackHome text-4xl text-center mt-14">And many more!</h1>
    </div>

    {{-- Sponsor --}}
    <div class="w-full font-sans my-32 px-72">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14 text-center">Our Sponsors</h1>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center">
            <span class="text-base text-2xl font-medium -mt-5 bg-cWhite px-5">Gold Sponsor</span>
            <div class="p-10">
                <img class="h-52" src="{{ asset('Asset/Image/landing/sponsor-gold.svg')}}" alt="">
            </div>
        </div>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center mt-14 ">
            <span class="text-base text-2xl font-medium -mt-5 bg-cWhite px-5">Silver Sponsor</span>
            <div class="p-10 flex flex-row justify-around w-full">
                <img class="h-20" src="{{ asset('Asset/Image/landing/sponsor-silver1.svg')}}" alt="">
                <img class="h-20" src="{{ asset('Asset/Image/landing/sponsor-silver2.svg')}}" alt="">
            </div>
        </div>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center mt-14 ">
            <span class="text-base text-2xl font-medium -mt-5 bg-cWhite px-5">Bronze Sponsor</span>
            <div class="p-5 flex flex-row justify-around w-full flex-wrap">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze1.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze2.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze3.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze4.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze5.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze6.svg')}}" alt="">
                <img class="h-16 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze7.svg')}}" alt="">
            </div>
        </div>
    </div>


    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/landing.js')}}"></script>
</body>
</html>
