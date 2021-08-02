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
<body class="bg-cWhite text-cBlackHome">
    {{-- Landing --}}
    <div id="landing" class="landing w-full h-screen relative flex flex-col justify-center items-center font-sans py-32 bg-bgSpace text-cWhite">
        <div class="landing-content w-full flex flex-col justify-content items-center z-10 mb-20">
            <h1 class="font-extrabold text-center text-4xl sm:text-6xl md:text-7xl lg:text-8xl">We Are BNCC</h1>
            <h3 class="font-semibold text-center text-xs sm:text-lg md:text-xl lg:text-2xl mb-8">Unlocking Your Potential Beyond Limits!</h3>
            <h5 class="font-medium text-xs sm:text-lg md:text-xl lg:text-2xl mb-4">Want to be a part of BNCC?</h5>
            <a class="btnReg
            bg-cLntBlue
            hover:bg-cDarkerLightBlue
            transition
            duration-300
            ease-in-out
            rounded-md xl:rounded-lg
            font-semibold text-sm sm:text-lg md:text-xl
            py-1.5 px-12 sm:px-24" href="{{url('/register')}}">Register Now!</a>
        </div>
        <img class="stars absolute top-0 z-0" src="{{url('./Asset/Image/landing/landing-stars.svg')}}" alt="">
        <img class="starstablet absolute top-0 z-0" src="{{url('./Asset/Image/landing/landing-starstablet.svg')}}" alt="">
        <img class="starsmobile absolute top-0 z-0 hidden" src="{{url('./Asset/Image/landing/landing-starsmobile.svg')}}" alt="">
        <img class="cloud w-full absolute bottom-0 z-0" src="{{url('./Asset/Image/landing/landing-cloud.svg')}}" alt="">
        <a class="arrowcont absolute bottom-6 z-10" href="#about"><img class="arrow" src="{{url('./Asset/Image/landing/landing-arrow.svg')}}" alt=""></a>
        {{-- Navbar --}}
        <div id="navbar" class="w-full fixed top-0 h-24 z-50 lg:px-48 px-0">
            <div class="w-full  flex flex-row h-full justify-between items-center py-8">
                <a class="w-32 flex items-center relative lg:ml-0 ml-5">
                    <img id="logo-up" class="absolute w-32" src="{{url('./Asset/Image/landing/logo-bnccwhite.svg')}}" alt="">
                    <img id="logo-down" class="absolute w-32 hidden" src="{{url('./Asset/Image/landing/logo-bnccblue.svg')}}" alt="">
                </a>
                <div class="w-full text-right flex flex-row justify-end items-center ">
                    <div class="menu-cont w-full  flex flex-row justify-end items-center">
                        <img class="lg:hidden block w-7 mb-5 menu-close" src="{{ asset('Asset/Image/landing/navbar-close.svg')}}" alt="">
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                        <a class="navlink font-semibold text-lg lg:mx-3" href="#about">About</a>
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                        <a class="navlink font-semibold text-lg lg:mx-3" href="#ourcoursesgi">Courses</a>
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                        <a class="navlink font-semibold text-lg lg:mx-3" href="#bos-events">Ongoing Events</a>
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                        <a class="navlink font-semibold text-lg lg:mx-3" href="#faq">FAQ</a>
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                        @if (!Auth::check())
                        <a class="border-2 rounded-3xl navlink font-semibold text-lg py-1.5 px-12 ml-6" href="{{url('/login')}}">Login</a>
                        @else
                        <a class="navlink font-semibold text-lg lg:mx-3 flex flex-row" href="{{route('dashboard')}}">
                            <img class="mr-3 w-6 profile" src="{{ asset('Asset/Image/landing/navbar-profile.svg')}}" alt="">Nama
                        </a>
                         @endif
                        <hr class="lg:hidden border-cWhite my-7 border w-full">
                    </div>
                    <img class="lg:hidden block w-8 mx-5 burger " src="{{ asset('Asset/Image/landing/navbar-burger.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- About Us --}}
    <div id="about" class="about w-full font-sans py-32 px-12 sm:px-48">
        <h1 class="font-extrabold text-cDarkBlue mb-14 text-3xl sm:text-4xl md:text-5xl lg:text-6xl">About Us</h1>
        <div class="w-full flex flex-col lg:flex-row items-center">
            <div class="w-full lg:w-1/2 leading-7">
                <p class="">
                    BNCC (Bina Nusantara Computer Club) is one of the <strong>best technology-based organizations</strong> at Binus University.
                    Since our establishment in 1989, BNCC has been <strong>educating society</strong> through our courses, innovative events,
                    technology products, researches, and more.
                    <br>
                    <br>
                    Entering its 33rd year, we are <strong>ready to take on new challenges</strong> with more innovative programs and events that will help society grow even further.
                    We warmly <strong>invite you to join our family</strong> here at BNCC, where we can have fun and achieve success together!
                </p>
            </div>
        </div>
    </div>

    {{-- Company Video --}}
    <div id="vc" class="vc w-full font-sans my-32 px-12 sm:px-72">
        <h1 class="font-extrabold text-center text-cDarkBlue text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-14">Company Video</h1>
        <div class="w-full flex flex-col lg:flex-row justify-center items-center">
            <iframe
            class="rounded-2xl w-full video shadow-bsVideo"
            height="480"
            src="https://www.youtube.com/embed/pDk94cOADQI"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            </iframe>
        </div>
    </div>

    {{-- Fun Fact --}}
    <div id="ff" class="ff w-full font-sans my-32 px-12 sm:px-48">
        <h1 class="font-extrabold text-cDarkBlue text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-14 text-center">Fun facts about BNCC!</h1>
        <div class="w-full flex flex-col justify-center items-center ml-16">
            <div>
                <div class="boxCont w-full flex flex-row justify-around sm:justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-32.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-regular text-xl text-cBlackHome leading-5 sm:leading-8 md:leading-9 pr-24">
                        BNCC has reached its 32nd year! We've had an amazing journey so far.
                    </div>
                </div>

                <div class="boxCont w-full flex flex-row justify-around sm:justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-partner.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-regular text-xl text-cBlackHome leading-5 sm:leading-8 md:leading-9 pr-12">
                        BNCC has partnered with many big companies, such as Gojek, tiket.com, Shopee, Tokopedia and more!
                    </div>
                </div>

                <div class="boxCont w-full flex flex-row justify-around sm:justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-product.svg')}}" alt="" class="w-24 ff-img">
                    </div>
                    <div class="w-4/6 font-regular text-xl text-cBlackHome leading-5 sm:leading-8 md:leading-9 pr-12">
                        BNCC has a software house (FAVESOLUTION) and online media (Filemagz)!
                    </div>
                </div>

                <div class="boxCont w-full flex flex-row justify-around sm:justify-center items-center mb-8">
                    <div class="w-32 bg-cWhite shadow-bsFf hover:shadow-bsFfhv p-6 rounded-2xl mr-8 duration-300">
                        <img src="{{url('./Asset/Image/landing/ff-schedule.svg')}}" alt="" class="w-20 ff-img">
                    </div>
                    <div class="w-4/6 font-regular text-xl text-cBlackHome leading-5 sm:leading-8 md:leading-9 pr-12">
                        BNCC has organized many national events with more than 1,000 participants,
                        including BNCC Techno Talk  1, BNCC Techno Talk 2, TechnoScape, and more!
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Why BNCC? --}}
    <div id="why" class="why w-full font-sans my-32 px-12 sm:px-48">
        <h1 class="font-extrabold text-cDarkBlue text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-8 text-center">Why BNCC?</h1>
        <div class="w-full flex flex-col flex-wrap justify-between items-center">
            <div class="w-full flex flex-row flex-wrap justify-around lg:justify-center items-center mb-12">
                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">Networking</h2>
                    <p class="text-base text-center leading-7 px-5">
                        You will have a lot of opportunities to connect with big companies,
                        tutor, and other Binusians from various backgrounds.
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-hardskills.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">Hard Skills</h2>
                    <p class="text-base text-center leading-7 px-5">
                        Kickstart your career by learning various on-demand
                        hard skills in BNCC, like mobile apps, web development,
                        UI/UX design, and more!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-softskills.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">Soft Skills</h2>
                    <p class="text-base text-center leading-7 px-5">
                        Having a wide variety of soft skills can be beneficial when
                        applying for a job. Develop your public speaking, leadership,
                        and many more with BNCC!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-sat.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">SAT Points</h2>
                    <p class="text-base text-center leading-7 px-5">
                        Are you worried about obtaining SAT points, which is one of the
                        requirements to pursue your thesis? We've got you covered!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-experience.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">Experience</h2>
                    <p class="text-base text-center leading-7 px-5">
                        You’ll get hands-on work experience from participating in various programs
                        and working in groups that will boost the value of your CV!
                    </p>
                </div>

                <div class="card-why w-min bg-cWhite shadow-bsWhy flex flex-col flex-shrink-0 items-center rounded-3xl py-16 mt-12 mx-4">
                    <img src="{{url('./Asset/Image/landing/why-networking.svg')}}" alt="" class="w-24">
                    <h2 class="font-bold text-xl py-3">Tech Insights</h2>
                    <p class="text-base text-center leading-7 px-5">
                        Stay updated with the hottest tech industry insights. You can also expand
                        your knowledge beyond your current field of study!
                    </p>
                </div>
            </div>
        </div>
        <h1 class="font-bold text-cBlackHome text-2xl lg:text-4xl text-center mt-8 sm:mt-14">And many more!</h1>
    </div>

     {{-- Our Courses --}}
     <div id="ourcourses" class="oc w-full font-sans my-32 px-36 sm:px-72">
        <h1 class="font-extrabold text-cDarkBlue text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-14 text-center">Our Courses</h1>
        <div class="w-full">
            <div class="btnCont w-full flex flex-row flex-wrap justify-center sm:justify-around items-center">
                <div class="ocBox ocBox-active bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-java" class="ocBtn ocBtn-active" viewBox="0 0 64 64" width="64" fill="#B5B7B8">
                        <g id="java-logo">
                            <path d="m62 13h-15v-7c0-.553-.448-1-1-1h-3v-3c0-.553-.448-1-1-1h-32c-.277 0-.527.112-.708.294l-7.998 7.998c-.182.181-.294.431-.294.708v48c0 .553.448 1 1 1h3v3c0 .553.448 1 1 1h40c.552 0 1-.447 1-1v-27h15c.552 0 1-.447 1-1v-20c0-.553-.448-1-1-1zm-17-6v6h-2v-6zm-36-2.586v4.586h-4.586zm-6 6.586h7c.552 0 1-.447 1-1v-7h30v10h-23c-.552 0-1 .447-1 1v20c0 .553.448 1 1 1h23v22h-38zm42 50h-38v-2h35c.552 0 1-.447 1-1v-23h2zm16-28h-42v-18h42z"/>
                            <path d="m5 13h10v2h-10z"/>
                            <path d="m5 17h10v2h-10z"/>
                            <path d="m5 21h10v2h-10z"/>
                            <path d="m5 25h10v2h-10z"/>
                            <path d="m5 29h10v2h-10z"/>
                            <path d="m13 5h26v2h-26z"/>
                            <path d="m13 9h26v2h-26z"/>
                            <path d="m10 52v-3c0-.266-.105-.52-.293-.707l-2.293-2.293 2.293-2.293c.188-.187.293-.441.293-.707v-3c0-.552.449-1 1-1h3v-2h-3c-1.654 0-3 1.346-3 3v2.586l-2.707 2.707c-.391.391-.391 1.023 0 1.414l2.707 2.707v2.586c0 1.654 1.346 3 3 3h3v-2h-3c-.551 0-1-.448-1-1z"/>
                            <path d="m36 42.586v-2.586c0-1.654-1.346-3-3-3h-3v2h3c.551 0 1 .448 1 1v3c0 .266.105.52.293.707l2.293 2.293-2.293 2.293c-.188.187-.293.441-.293.707v3c0 .552-.449 1-1 1h-3v2h3c1.654 0 3-1.346 3-3v-2.586l2.707-2.707c.391-.391.391-1.023 0-1.414z"/>
                            <path d="m24 31c1.654 0 3-1.346 3-3v-9h2v-2h-6v2h2v9c0 .552-.449 1-1 1s-1-.448-1-1v-2h-2v2c0 1.654 1.346 3 3 3z"/>
                            <path d="m33 27h4v4h2v-10c0-2.206-1.794-4-4-4s-4 1.794-4 4v10h2zm2-8c1.103 0 2 .897 2 2v4h-4v-4c0-1.103.897-2 2-2z"/>
                            <path d="m53 27h4v4h2v-10c0-2.206-1.794-4-4-4s-4 1.794-4 4v10h2zm2-8c1.103 0 2 .897 2 2v4h-4v-4c0-1.103.897-2 2-2z"/>
                            <path d="m44.293 30.707c.195.195.451.293.707.293s.512-.098.707-.293l3-3c.188-.187.293-.441.293-.707v-10h-2v9.586l-2 2-2-2v-9.586h-2v10c0 .266.105.52.293.707z"/>
                            <path d="m14.384 45h15.232v1.999h-15.232z" transform="matrix(.394 -.919 .919 .394 -28.946 48.114)"/>
                            <path d="m16.293 41.293-4 4c-.391.391-.391 1.023 0 1.414l4 4 1.414-1.414-3.293-3.293 3.293-3.293z"/>
                            <path d="m31.707 45.293-4-4-1.414 1.414 3.293 3.293-3.293 3.293 1.414 1.414 4-4c.391-.391.391-1.023 0-1.414z"/>
                        </g>
                    </svg>
                </div>
                <div class="ocBox bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-mobile" class="ocBtn" viewBox="0 0 64 64" width="64" fill="#B5B7B8">
                        <g id="mobile-logo">
                            <path d="m25 44h14v2h-14z"/>
                            <path d="m21 44h2v2h-2z"/>
                            <path d="m61 6h-14v-1a3.009 3.009 0 0 0 -3-3h-24a3.009 3.009 0 0 0 -3 3v4h-14a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h14v2a5 5 0 0 0 -5 5v4.09l2 20.95v5.96a1 1 0 0 0 1 1h22a1 1 0 0 0 1-1v-5.68l3.72-5.32h2.28a3.009 3.009 0 0 0 3-3v-1h1a3.985 3.985 0 0 0 2.62-7 3.951 3.951 0 0 0 0-6 3.951 3.951 0 0 0 0-6 3.985 3.985 0 0 0 -2.62-7h-1v-2h14a1 1 0 0 0 1-1v-10a1 1 0 0 0 -1-1zm-21.28-2-.31 1.24a1 1 0 0 1 -.97.76h-12.88a1 1 0 0 1 -.97-.76l-.31-1.24zm-35.72 17v-10h18v10zm32 39h-20v-4h20zm.48-6h-20.57l-1.91-20v-4a3.009 3.009 0 0 1 3-3h7a3 3 0 0 1 0 6h-6a1 1 0 0 0 -1 1v13a3.009 3.009 0 0 0 3 3h19.28zm8.52-7a1 1 0 0 1 -1 1h-24a1 1 0 0 1 -1-1v-12h5a5 5 0 0 0 0-10h-5v-2h4a1 1 0 0 0 1-1v-12a1 1 0 0 0 -1-1h-4v-4a1 1 0 0 1 1-1h2.22l.43 1.73a3 3 0 0 0 2.91 2.27h12.88a3 3 0 0 0 2.91-2.27l.43-1.73h2.22a1 1 0 0 1 1 1v1h-2a1 1 0 0 0 -1 1v10a1 1 0 0 0 1 1h2v2h-1a3.985 3.985 0 0 0 -2.62 7 3.951 3.951 0 0 0 0 6 3.951 3.951 0 0 0 0 6 3.985 3.985 0 0 0 2.62 7h1zm3-3h-4a2 2 0 0 1 0-4h4a2 2 0 0 1 0 4zm0-6h-4a2 2 0 0 1 0-4h4a2 2 0 0 1 0 4zm0-6h-4a2 2 0 0 1 0-4h4a2 2 0 0 1 0 4zm0-10a2 2 0 0 1 0 4h-4a2 2 0 0 1 0-4zm12-6h-16v-8h16z"/>
                            <path d="m6 13h2v2h-2z"/>
                            <path d="m10 13h10v2h-10z"/>
                            <path d="m6 17h14v2h-14z"/>
                            <path d="m46 11h4v2h-4z"/>
                            <path d="m52 11h6v2h-6z"/>
                        </g>
                    </svg>
                </div>
                <div class="ocBox bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-be" class="ocBtn" viewBox="0 0 511.992 511.992" width="64" fill="#B5B7B8">
                        <g>
                            <g>
                                <path d="m99.561 128.935c-4-3.808-10.331-3.651-14.138.351l-28.425 29.87c-3.674 3.861-3.674 9.926 0 13.787l28.425 29.87c3.756 3.946 10.191 4.107 14.138.351 4.001-3.808 4.158-10.137.351-14.138l-21.865-22.977 21.865-22.977c3.807-4.001 3.65-10.33-.351-14.137z"/>
                                <path d="m198.109 203.163c3.946 3.756 10.382 3.596 14.138-.351l28.425-29.87c3.674-3.861 3.674-9.926 0-13.787l-28.425-29.87c-3.808-4.001-10.137-4.157-14.138-.351-4.001 3.808-4.158 10.137-.351 14.138l21.865 22.977-21.865 22.977c-3.806 4-3.65 10.33.351 14.137z"/>
                                <path d="m125.778 204.434c4.643 2.859 10.902 1.368 13.759-3.27l36.799-59.74c2.896-4.703 1.433-10.863-3.27-13.76-4.703-2.896-10.862-1.433-13.759 3.27l-36.799 59.74c-2.896 4.703-1.432 10.863 3.27 13.76z"/>
                                <path d="m235.302 231.017h-171.06c-5.523 0-10 4.478-10 10s4.477 10 10 10h171.06c5.523 0 10-4.478 10-10s-4.477-10-10-10z"/>
                                <path d="m64.242 281.762c-5.523 0-10 4.478-10 10s4.477 10 10 10h122.348c5.523 0 10-4.478 10-10s-4.477-10-10-10z"/>
                                <path d="m230.243 291.762c0 5.522 4.477 10 10 10h85.426c5.522 0 10-4.478 10-10s-4.478-10-10-10h-85.426c-5.523 0-10 4.477-10 10z"/>
                                <path d="m166.82 95.726c3.528 8.476 16.118 7.885 18.8-.92 2.561-8.407-6.694-15.87-14.374-11.671-4.408 2.411-6.362 7.948-4.426 12.591z"/>
                                <path d="m271.78 246.566c3.031 4.522 9.326 5.788 13.869 2.771 4.545-3.019 5.763-9.344 2.761-13.87-3.017-4.548-9.342-5.759-13.87-2.76-4.54 3.006-5.774 9.341-2.76 13.859z"/>
                                <path d="m500.143 148.702-8.451-4.882c-2.723-1.574-2.73-6.542-.002-8.114l8.453-4.883c11.319-6.537 15.214-21.062 8.681-32.378l-15.772-27.316c-6.444-11.16-21.202-15.126-32.375-8.674l-8.464 4.884c-2.816 1.629-7.021-.746-7.021-4.052v-9.774c0-13.07-10.634-23.704-23.704-23.704h-31.538c-13.07 0-23.704 10.634-23.704 23.704v9.774c0 3.309-4.205 5.678-7.023 4.05l-8.459-4.88c-11.176-6.457-25.935-2.486-32.378 8.672l-6.22 10.772h-91.343c-5.523 0-10 4.478-10 10s4.477 10 10 10h80.142c-4.073 10.684.385 23.178 10.328 28.925l8.454 4.881c2.721 1.569 2.72 6.539.002 8.11l-8.476 4.887c-11.31 6.547-15.195 21.071-8.661 32.376l15.768 27.301c6.443 11.168 21.206 15.143 32.387 8.686l8.458-4.889c2.813-1.625 7.021.748 7.021 4.052v9.774c0 12.843 10.608 23.519 23.355 23.703l7.023.431v82.657h-376.624v-221.51c0-5.438 3.517-9.384 8.362-9.384h102.665c5.523 0 10-4.478 10-10s-4.477-10-10-10h-102.665c-15.904 0-28.362 12.908-28.362 29.384v265.057.003c0 14.82 12.987 27.341 28.36 27.341h133.759l-4.874 41.831c-1.082 9.489-9.094 16.638-18.642 16.638-.007 0-.015 0-.022 0-.129-.011-.273.003-.411.008-.082.003-11.432.021-11.432.021-5.523 0-10 4.478-10 10s4.477 10 10 10h173.356c5.522 0 10-4.478 10-10s-4.478-10-10-10c0 0-11.35-.018-11.433-.021-.132-.005-.265-.008-.397-.008-.013-.001-.022-.001-.035 0-9.547-.001-17.56-7.149-18.642-16.638-.001-.008-.002-.017-.003-.024l-4.871-41.807h123.547c15.378 0 28.37-12.521 28.37-27.341l-.005-126.637h4.861c13.07 0 23.704-10.634 23.704-23.704v-9.774c0-3.3 4.202-5.68 7.018-4.054l8.465 4.893c11.178 6.453 25.936 2.479 32.377-8.68l15.773-27.31c6.533-11.316 2.639-25.841-8.68-32.377zm-103.518 204.093v23.547c0 3.466-3.576 7.342-8.362 7.342h-359.9c-4.786 0-8.362-3.876-8.362-7.342v-23.547zm-146.907 94.997c.594 5.198 2.196 10.059 4.596 14.392h-81.791c2.399-4.33 3.999-9.185 4.59-14.377l5.141-44.121h62.325zm241.786-276.714-15.773 27.31c-1.013 1.753-3.295 2.378-5.053 1.362l-8.466-4.893c-15.973-9.223-37.021 2.92-37.021 21.372v9.774c0 2.042-1.662 3.704-3.704 3.704h-31.537c-2.021 0-3.701-1.687-3.701-3.706v-9.769c0-18.456-21.045-30.603-37.029-21.376l-8.463 4.89c-1.739 1.004-4.042.386-5.052-1.36l-15.771-27.309c-1.021-1.767-.411-4.037 1.351-5.056l8.468-4.886c15.819-9.142 15.848-33.615-.002-42.749l-8.454-4.884c-1.693-1.057-2.393-3.277-1.362-5.059l15.771-27.315c1.017-1.76 3.302-2.367 5.061-1.352l8.46 4.881c15.974 9.226 37.021-2.918 37.021-21.372v-9.774c0-2.042 1.662-3.704 3.704-3.704h31.536c2.042 0 3.704 1.662 3.704 3.704v9.774c0 18.451 21.039 30.598 37.02 21.373l8.465-4.884c1.755-1.017 4.042-.403 5.056 1.353l15.772 27.316c1.02 1.767.408 4.035-1.363 5.059l-8.444 4.879c-15.819 9.114-15.839 33.607-.009 42.755l8.454 4.884c1.768 1.024 2.379 3.293 1.361 5.058z"/>
                                <path d="m405.715 98.108c-22.967 0-41.651 18.685-41.651 41.65s18.685 41.65 41.651 41.65c22.971 0 41.658-18.685 41.658-41.65 0-22.708-18.947-41.652-41.658-41.65zm0 63.301c-11.938 0-21.651-9.712-21.651-21.65s9.713-21.65 21.651-21.65c11.777.198 21.658 9.73 21.658 21.65 0 11.938-9.716 21.65-21.658 21.65z"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="ocBox bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-ui" class="ocBtn" viewBox="0 0 479 480" width="64" fill="#B5B7B8">
                        <path d="m368.5 368h-16v32h-144v16h144v24c0 13.253906-10.746094 24-24 24h-176c-8.574219-.011719-16.496094-4.582031-20.800781-12l-13.855469 8c7.171875 12.355469 20.371094 19.972656 34.65625 20h176c22.082031-.027344 39.972656-17.917969 40-40zm0 0"/>
                        <path d="m232.5 432h16v16h-16zm0 0"/>
                        <path d="m280.5 216v-16h-24.40625c-3.988281-51.050781-44.542969-91.605469-95.59375-95.59375v-24.40625h-16v24.40625c-5.390625.414062-10.738281 1.25-16 2.496094v-42.902344h128v-16h-128v-8c0-13.253906 10.746094-24 24-24h176c5.84375 0 11.488281 2.132812 15.871094 6l10.585937-12c-7.304687-6.449219-16.714843-10.00390625-26.457031-10h-176c-22.082031.0273438-39.972656 17.917969-40 40v72c-36.023438 15.089844-60.574219 49.0625-63.59375 88h-24.40625v16h24.425781c3.773438 51.148438 44.425781 91.828125 95.574219 95.632812v24.367188h16v-24.367188c51.148438-3.804687 91.800781-44.484374 95.574219-95.632812zm-136 64v15.632812c-11.160156-1.003906-22.019531-4.140624-32-9.234374v-14.398438c0-22.089844 17.910156-40 40-40s40 17.910156 40 40v14.398438c-9.976562 5.101562-20.839844 8.242187-32 9.257812v-15.65625zm-16-88c0-13.253906 10.746094-24 24-24s24 10.746094 24 24-10.746094 24-24 24-24-10.746094-24-24zm82.664062 81.601562c-.863281.796876-1.785156 1.4375-2.664062 2.175782v-3.777344c-.019531-20.898438-11.675781-40.046875-30.230469-49.664062 12.851563-10.824219 17.566407-28.527344 11.804688-44.308594-5.761719-15.785156-20.773438-26.285156-37.574219-26.285156s-31.8125 10.5-37.574219 26.285156c-5.761719 15.78125-1.046875 33.484375 11.804688 44.308594-18.554688 9.617187-30.210938 28.765624-30.230469 49.664062v3.816406c-.886719-.726562-1.808594-1.410156-2.664062-2.175781-16.578126-14.867187-26.910157-35.460937-28.910157-57.640625h15.574219v-16h-15.59375c3.910156-42.234375 37.359375-75.683594 79.59375-79.59375v15.59375h16v-15.59375c42.234375 3.910156 75.683594 37.359375 79.59375 79.59375h-15.59375v16h15.574219c-2 22.179688-12.332031 42.773438-28.910157 57.640625zm0 0"/>
                        <path d="m456.5 144c4.417969 0 8-3.582031 8-8v-96c0-4.417969-3.582031-8-8-8h-176c-4.417969 0-8 3.582031-8 8v96c0 4.417969 3.582031 8 8 8zm-168-96h160v80h-160zm0 0"/>
                        <path d="m304.5 64h32v16h-32zm0 0"/>
                        <path d="m352.5 64h80v16h-80zm0 0"/>
                        <path d="m304.5 96h128v16h-128zm0 0"/>
                        <path d="m455.085938 160c-6.195313.011719-12.171876 2.285156-16.800782 6.398438l-69.785156 61.523437v-67.921875h-16v80h2.3125l-45.511719 40.160156c-29.609375 1.695313-52.765625 26.179688-52.800781 55.839844v14.113281c.03125 7.9375-4.457031 15.207031-11.574219 18.726563-3.324219 1.65625-5.070312 5.382812-4.21875 8.996094.851563 3.613281 4.078125 6.167968 7.792969 6.164062h56c29.660156-.035156 54.144531-23.191406 55.839844-52.800781l113.808594-128.976563c6.605468-7.492187 8.210937-18.160156 4.097656-27.265625-4.109375-9.105469-13.171875-14.957031-23.160156-14.957031zm-150.585938 208h-36.585938c3.019532-5.476562 4.597657-11.632812 4.585938-17.886719v-14.113281c.027344-20.839844 16.027344-38.179688 36.800781-39.871094l35.070313 35.070313c-1.6875 20.773437-19.03125 36.777343-39.871094 36.800781zm157.648438-176.359375-110.007813 124.679687-27.960937-27.953124 124.679687-110.015626c3.730469-3.273437 9.359375-3.089843 12.871094.417969 3.507812 3.511719 3.691406 9.140625.417969 12.871094zm0 0"/>
                        <path d="m8.5 440h176c4.417969 0 8-3.582031 8-8v-64c0-4.417969-3.582031-8-8-8h-56v-40h-16v40h-104c-4.417969 0-8 3.582031-8 8v64c0 4.417969 3.582031 8 8 8zm8-64h160v48h-160zm0 0"/>
                        <path d="m32.5 392h40v16h-40zm0 0"/>
                        <path d="m88.5 392h72v16h-72zm0 0"/>
                        <path d="m8.5 112h80c4.417969 0 8-3.582031 8-8v-64c0-4.417969-3.582031-8-8-8h-80c-4.417969 0-8 3.582031-8 8v64c0 4.417969 3.582031 8 8 8zm8-64h64v48h-64zm0 0"/>
                        <path d="m32.5 64h32v16h-32zm0 0"/>
                    </svg>
                </div>
                <div class="ocBox bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-fe" class="ocBtn" viewBox="0 0 512 512" width="64" fill="#B5B7B8">
                        <path d="M496,376V40a24.028,24.028,0,0,0-24-24H40A24.028,24.028,0,0,0,16,40V376a24.028,24.028,0,0,0,24,24H198.556l-13.333,80H152a8,8,0,0,0,0,16H360a8,8,0,0,0,0-16H326.777l-13.333-80h68.613l69.589,69.589a24,24,0,0,0,33.941,0h0a24.028,24.028,0,0,0,0-33.941L449.939,400H472A24.028,24.028,0,0,0,496,376ZM321.541,316.856l11.313-11.314,33.94,33.94L355.48,350.8Zm-13.765-8.862-21.852-5.463a23.893,23.893,0,0,1-17.565-17.886l-9.686-41.972,41.972,9.686a23.893,23.893,0,0,1,17.886,17.565l5.463,21.852Zm32.3-17.855-6.024-24.1a39.825,39.825,0,0,0-29.812-29.274L249.8,224.205a8,8,0,0,0-9.594,9.594l12.564,54.443A40,40,0,0,0,260.315,304H32V96H480V304H353.939ZM40,32H472a8.009,8.009,0,0,1,8,8V80H32V40A8.009,8.009,0,0,1,40,32ZM310.556,480H201.444l13.333-80h82.446ZM40,384a8.009,8.009,0,0,1-8-8V320H289.828l16.306,4.076L366.057,384Zm434.273,74.275a8,8,0,0,1-11.314,0L366.794,362.11,378.108,350.8l96.165,96.165A8.01,8.01,0,0,1,474.273,458.275ZM369.939,320H480v56a8.009,8.009,0,0,1-8,8H433.939Z"/>
                        <path d="M272,336H240a8,8,0,0,0,0,16h32a8,8,0,0,0,0-16Z"/>
                        <circle cx="56" cy="56" r="8"/>
                        <circle cx="88" cy="56" r="8"/>
                        <circle cx="120" cy="56" r="8"/>
                        <path d="M104,128h16a8,8,0,0,0,0-16H104a8,8,0,0,0,0,16Z"/>
                        <path d="M152,128h16a8,8,0,0,0,0-16H152a8,8,0,0,0,0,16Z"/>
                        <path d="M72,272H64v-8a8,8,0,0,0-16,0v16a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16Z"/>
                        <path d="M120,272H104a8,8,0,0,0,0,16h16a8,8,0,0,0,0-16Z"/>
                        <path d="M168,272H152a8,8,0,0,0,0,16h16a8,8,0,0,0,0-16Z"/>
                        <path d="M216,112H200a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0V120A8,8,0,0,0,216,112Z"/>
                        <path d="M216,160a8,8,0,0,0-8,8v16a8,8,0,0,0,16,0V168A8,8,0,0,0,216,160Z"/>
                        <path d="M216,208a8,8,0,0,0-8,8v16a8,8,0,0,0,16,0V216A8,8,0,0,0,216,208Z"/>
                        <path d="M216,256a8,8,0,0,0-8,8v8h-8a8,8,0,0,0,0,16h16a8,8,0,0,0,8-8V264A8,8,0,0,0,216,256Z"/>
                        <path d="M56,144a8,8,0,0,0,8-8v-8h8a8,8,0,0,0,0-16H56a8,8,0,0,0-8,8v16A8,8,0,0,0,56,144Z"/>
                        <path d="M56,192a8,8,0,0,0,8-8V168a8,8,0,0,0-16,0v16A8,8,0,0,0,56,192Z"/>
                        <path d="M56,240a8,8,0,0,0,8-8V216a8,8,0,0,0-16,0v16A8,8,0,0,0,56,240Z"/>
                        <path d="M296,192H248a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16Z"/>
                        <path d="M456,192H328a8,8,0,0,0,0,16H456a8,8,0,0,0,0-16Z"/>
                        <path d="M456,224H344a8,8,0,0,0,0,16H456a8,8,0,0,0,0-16Z"/>
                        <path d="M456,112H248a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8H456a8,8,0,0,0,8-8V120A8,8,0,0,0,456,112Zm-8,48H256V128H448Z"/>
                        <path d="M192,152a8,8,0,0,0-8-8H88a8,8,0,0,0-8,8v96a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8Zm-16,88H96V160h80Z"/>
                    </svg>
                </div>
                <div class="ocBox bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-c" class="ocBtn"  viewBox="0 0 75 75" width="64" fill="#B5B7B8">
                        <g transform="translate(0.000000,75.000000) scale(0.100000,-0.100000)" stroke="none">
                        <path d="M60 671 c0 -65 -2 -70 -22 -73 l-23 -3 0 -290 0 -290 338 -3 337 -2
                        0 69 c0 65 2 70 23 73 l22 3 0 290 0 290 -337 3 -338 2 0 -69z m655 9 l0 -35
                        -315 0 -315 0 -3 23 c-8 54 -17 52 320 50 l313 -3 0 -35z m3 -282 c-2 -164 -6
                        -222 -15 -225 -10 -4 -13 45 -15 209 l-3 213 -302 3 c-191 1 -303 6 -303 12 0
                        6 117 10 320 10 l320 0 -2 -222z m-50 139 l3 -37 -318 2 -318 3 -3 23 c-8 54
                        -17 52 320 50 l313 -3 3 -38z m0 -279 l-3 -223 -315 0 -315 0 -3 223 -2 222
                        320 0 320 0 -2 -222z"/>
                        <path d="M580 680 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M620 680 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M670 680 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M530 540 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M580 540 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M620 540 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        <path d="M60 305 l0 -125 175 0 175 0 0 125 0 125 -175 0 -175 0 0 -125z m330
                        0 l0 -105 -155 0 -155 0 0 105 0 105 155 0 155 0 0 -105z"/>
                        <path d="M196 354 c-9 -8 -16 -32 -16 -53 0 -62 55 -94 84 -49 15 24 0 34 -20
                        13 -17 -16 -18 -16 -31 1 -29 39 -2 102 32 74 20 -17 32 -5 15 15 -16 19 -44
                        19 -64 -1z"/>
                        <path d="M430 420 c0 -6 42 -10 105 -10 63 0 105 4 105 10 0 6 -42 10 -105 10
                        -63 0 -105 -4 -105 -10z"/>
                        <path d="M437 384 c-17 -17 13 -24 104 -24 81 0 99 3 99 15 0 12 -18 15 -98
                        15 -54 0 -102 -3 -105 -6z"/>
                        <path d="M430 330 c0 -6 42 -10 105 -10 63 0 105 4 105 10 0 6 -42 10 -105 10
                        -63 0 -105 -4 -105 -10z"/>
                        <path d="M430 280 c0 -6 42 -10 105 -10 63 0 105 4 105 10 0 6 -42 10 -105 10
                        -63 0 -105 -4 -105 -10z"/>
                        <path d="M437 244 c-17 -17 13 -24 104 -24 81 0 99 3 99 15 0 12 -18 15 -98
                        15 -54 0 -102 -3 -105 -6z"/>
                        <path d="M430 190 c0 -6 42 -10 105 -10 63 0 105 4 105 10 0 6 -42 10 -105 10
                        -63 0 -105 -4 -105 -10z"/>
                        <path d="M60 140 c0 -6 103 -10 290 -10 187 0 290 4 290 10 0 6 -103 10 -290
                        10 -187 0 -290 -4 -290 -10z"/>
                        <path d="M60 90 c0 -14 527 -14 535 0 4 7 -87 10 -264 10 -174 0 -271 -4 -271
                        -10z"/>
                        <path d="M620 90 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0
                        -10 -4 -10 -10z"/>
                        </g>
                    </svg>
                </div>
                <div class="ocBox   bg-cWhite rounded-lg shadow-bsOc p-4">
                    <svg id="ocBtn-game" class="ocBtn" viewBox="0 0 512 512" width="64" fill="#B5B7B8">
                        <g>
                            <path d="m130.119 46.588h63.019c4.142 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-63.019c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                            <path d="m503.164 437.688-7.67-38.329c-.813-4.061-4.756-6.696-8.826-5.882-4.061.813-6.695 4.764-5.883 8.826l7.67 38.329c2.471 12.337-.012 24.897-6.988 35.367s-17.613 17.596-29.948 20.065c-3.067.613-6.188.924-9.279.924-19.35 0-37.016-12.159-43.955-30.253l-37.489-97.848c-5.91-15.422-4.729-32.562 3.24-47.023 7.967-14.457 21.82-24.608 38.008-27.848 30.243-6.055 59.784 13.622 65.842 43.868l7.03 35.099c.813 4.061 4.765 6.696 8.826 5.881 4.061-.813 6.694-4.765 5.881-8.827l-7.03-35.099c-6.741-33.659-36.418-56.992-69.502-57.012l.007-.009h-97.451v-222.258c0-30.69-24.964-55.659-55.649-55.659h-196.741c-30.684 0-55.649 24.969-55.649 55.659v296.133c0 30.685 24.964 55.649 55.649 55.649h79.492l-6.056 30.245c-3.257 16.266.016 32.826 9.215 46.63 9.198 13.804 23.222 23.2 39.487 26.457 4.13.827 8.25 1.227 12.32 1.227 25.294-.002 48.499-15.458 57.865-39.901l16.053-41.896h96.592l16.054 41.902c9.15 23.855 32.444 39.883 57.962 39.883 4.076 0 8.187-.409 12.222-1.216 16.265-3.256 30.288-12.652 39.486-26.456 9.199-13.803 12.471-30.363 9.215-46.628zm-439.907-45.246c-22.415 0-40.649-18.235-40.649-40.65v-296.133c0-22.42 18.235-40.66 40.649-40.66h196.741c22.415 0 40.649 18.24 40.649 40.66v222.259h-16.583v-211.369c0-19.276-15.682-34.959-34.959-34.959h-26.82c-4.142 0-7.5 3.358-7.5 7.5v1.29c0 11.524-9.376 20.9-20.9 20.9h-64.508c-11.524 0-20.899-9.376-20.899-20.9v-1.29c0-4.142-3.357-7.5-7.5-7.5h-26.828c-19.277 0-34.959 15.683-34.959 34.959v25.059c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-25.059c0-11.006 8.954-19.96 19.96-19.96h19.867c2.949 16.847 17.683 29.689 35.361 29.689h64.508c17.678 0 32.413-12.843 35.362-29.689h19.857c11.006 0 19.959 8.954 19.959 19.96v211.37h-41.846c-14.039-.107-27.789 3.959-39.732 11.917-15.768 10.508-26.501 26.527-30.222 45.107l-5.19 25.92h-77.925c-11.006 0-19.96-8.958-19.96-19.97v-219.286c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v219.285c0 19.282 15.682 34.969 34.959 34.969h74.922l-3.32 16.581zm178.316 74.29c-8.246 21.522-30.634 33.859-53.232 29.333-12.337-2.47-22.974-9.597-29.95-20.067-6.977-10.47-9.459-23.031-6.988-35.368l20.572-102.744c2.934-14.652 11.397-27.284 23.831-35.57 9.298-6.195 19.981-9.406 30.906-9.406 3.686 0 7.401.366 11.098 1.106 16.189 3.242 30.044 13.394 38.013 27.855 7.968 14.46 9.15 31.596 3.242 47.013zm35.807-51.529 15.691-40.951c7.491-19.551 5.992-41.282-4.113-59.619-4.706-8.542-11.048-15.878-18.539-21.715h99.013c-7.488 5.836-13.828 13.169-18.533 21.708-10.105 18.339-11.604 40.073-4.11 59.629l15.689 40.949h-85.098z"/>
                            <path d="m244.366 331.19c-.924-11.454-10.54-20.492-22.228-20.492s-21.304 9.038-22.228 20.491c-11.453.924-20.491 10.54-20.491 22.228s9.038 21.304 20.491 22.228c.924 11.454 10.54 20.491 22.228 20.491s21.304-9.038 22.228-20.492c11.454-.923 20.491-10.54 20.491-22.228s-9.038-21.303-20.491-22.226zm-1.81 29.528h-5.618c-4.142 0-7.5 3.358-7.5 7.5v5.619c0 4.026-3.275 7.3-7.301 7.3s-7.301-3.275-7.301-7.3v-5.619c0-4.142-3.357-7.5-7.5-7.5h-5.619c-4.025 0-7.3-3.275-7.3-7.301s3.274-7.3 7.3-7.3h5.619c4.142 0 7.5-3.358 7.5-7.5v-5.619c0-4.026 3.275-7.3 7.301-7.3s7.301 3.275 7.301 7.3v5.619c0 4.142 3.357 7.5 7.5 7.5h5.618c4.025 0 7.301 3.275 7.301 7.301s-3.276 7.3-7.301 7.3z"/>
                            <path d="m431.696 355.299c12.296 0 22.299-10.004 22.299-22.3s-10.004-22.3-22.299-22.3c-12.297 0-22.3 10.004-22.3 22.3s10.004 22.3 22.3 22.3zm0-29.601c4.025 0 7.3 3.275 7.3 7.3s-3.274 7.301-7.3 7.301-7.301-3.275-7.301-7.301 3.276-7.3 7.301-7.3z"/>
                            <path d="m391.67 340.299c-12.297 0-22.3 10.004-22.3 22.3s10.004 22.3 22.3 22.3c12.297 0 22.3-10.004 22.3-22.3s-10.004-22.3-22.3-22.3zm0 29.601c-4.025 0-7.301-3.275-7.301-7.301s3.275-7.3 7.301-7.3 7.301 3.275 7.301 7.3-3.276 7.301-7.301 7.301z"/>
                            <path d="m328.79 369.9h-17.733c-10.053 0-18.231 8.178-18.231 18.231 0 10.052 8.179 18.231 18.231 18.231h17.733c10.053 0 18.231-8.178 18.231-18.231s-8.178-18.231-18.231-18.231zm0 21.462h-17.733c-1.782 0-3.231-1.45-3.231-3.231s1.449-3.231 3.231-3.231h17.733c1.782 0 3.231 1.45 3.231 3.231s-1.448 3.231-3.231 3.231z"/>
                            <path d="m116.9 242.616c1.465 1.465 3.385 2.197 5.304 2.197s3.839-.732 5.304-2.197c2.929-2.929 2.929-7.678 0-10.606l-27.004-27.003 27.004-27.004c2.929-2.929 2.929-7.677 0-10.606-2.93-2.928-7.678-2.929-10.607 0l-32.307 32.307c-1.406 1.406-2.196 3.314-2.196 5.303s.79 3.897 2.196 5.303z"/>
                            <path d="m195.751 242.616c1.465 1.465 3.384 2.197 5.304 2.197 1.919 0 3.839-.732 5.304-2.197l32.307-32.306c1.406-1.406 2.196-3.314 2.196-5.303s-.79-3.897-2.196-5.303l-32.307-32.307c-2.93-2.929-7.678-2.929-10.607 0s-2.929 7.678 0 10.606l27.004 27.004-27.004 27.003c-2.93 2.929-2.93 7.677-.001 10.606z"/>
                            <path d="m144.507 268.772c.595.144 1.189.213 1.775.213 3.381 0 6.45-2.302 7.282-5.733l27.416-112.954c.978-4.025-1.494-8.08-5.518-9.057s-8.082 1.494-9.057 5.519l-27.416 112.954c-.978 4.026 1.493 8.081 5.518 9.058z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="ocBigBox bg-cLighterGray shadow-bsOcBig rounded-2xl my-8 sm:my-16 sm:mx-8 p-12 relative">
                <div id="oc-java" class="ocCon ocCon-active w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">Java Programming</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-java.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        Java is well-known for its high performance and flexibility,
                        as it can be used to construct mobile and web-based applications, video games, and more.
                        Through this course, you will learn about object-oriented programming and GUI in Java.
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5  mx-4">
                            Kemanggisan
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Alam Sutera
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Bandung
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Malang
                        </div>
                    </div>
                </div>

                <div id="oc-mobile" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">Mobile Application Development</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-mobile.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        Ever considered mobile app development? In this course,
                        you’ll learn how to develop android applications from scratch.
                        This course is the perfect start for your journey to becoming a mobile apps developer!
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Kemanggisan
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Bandung
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Malang
                        </div>
                    </div>
                </div>

                <div id="oc-be" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">Back-End Development</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-be.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        When you visit several websites every day, have you ever wondered how these websites actually work?
                        If you are curious about the answer or interested in becoming a back-end developer,
                        consider joining our Web Programming course!
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Kemanggisan
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Bandung
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Malang
                        </div>
                    </div>
                </div>

                <div id="oc-ui" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">UI/UX Design</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-ui.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        More of a design person? Well, this course is just for you! Through this course,
                        you will learn how to create a beautiful and user-friendly interface.
                        Improve your sense of design through various researches to achieve the best user satisfaction.
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Kemanggisan
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Alam Sutera
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Bandung
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Malang
                        </div>
                    </div>
                </div>

                <div id="oc-fe" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">Front-End Development</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-fe.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        Want to learn how to make both beautiful and functional websites?
                        If so, our Front-End Development course is a perfect fit for you!
                        You will be able to develop creative displays of a website using HTML, CSS, and Javascript.
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Kemanggisan
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Alam Sutera
                        </div>
                    </div>
                </div>

                <div id="oc-c" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">C Programming</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-c.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        As the foundation for most programming languages, by learning C,
                        you will be able to learn other programming languages much more easily.
                        C can be used in creating softwares, like operating systems, game engines, and many more.
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Alam Sutera
                        </div>
                    </div>
                </div>

                <div id="oc-game" class="ocCon w-full flex flex-col justify-content items-center">
                    <h2 class="font-bold text-cBlacker text-3xl">Game Development</h2>
                    <img class="w-2/12 my-8" src="{{url('./Asset/Image/landing/oc-game.svg')}}" alt="">
                    <p class="text-justify leading-6 sm:leading-7 px-16">
                        Ever thought about developing your own games?
                        By joining this course,
                        you will be able to understand the process of making a game and gain the skills to stand out as a game developer.
                        Turn your passion for gaming into your career!
                    </p>
                    <div class="oc-tags-cont flex flex-row mt-4">
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Bandung
                        </div>
                        <div class="oc-tags w-36 bg-cBabyBlue rounded text-sm text-center text-cLighterBlue py-1.5 mx-4">
                            Malang
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-full">
                <p class="oc-text text-center leading-6 sm:leading-7 px-16">
                    Due to COVID-19, classes are currently being held virtually.
                    We are now <strong>accepting members</strong> for the upcoming semester.
                    No prior knowledge is needed to get started for any of our classes.
                    So, secure your spot now to get that exciting career you’ve been dreaming of!
                </p>
            </div>
        </div>
    </div>

    {{-- Our Event --}}
    <div class="w-full h-screen font-sans my-32 xl:px-72 lg:px-40 px-10 text-base ">
        <h1 class="font-extrabold text-cDarkBlue sm:text-5xl text-3xl md:mb-14 mb-5">Our Events</h1>
        <div class="text-base md:mb-14 mb-5">Here are some of our event highlights. Through events, we improve our knowledge, try new experiences, and build a sense of belonging in the BNCC family. More exciting events are on the way!</div>

        <div style="max-width: 800px; margin: 0 auto;" class="relative w-full carousel-event rounded-xl md:h-80 sm:h-60 h-52 overflow-hidden">
            <div class="w-full h-full slide absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Company Visit</div>
            </div>
            <div class="w-full h-full slide slide-right absolute">
                <div class="w-full h-full layer absolute z-20 "></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic2.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">BNCC Techno Talk</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic3.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">BNCC Webinar Series</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic4.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">LnT Webinar</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic5.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">BNCC Birthday Party</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic6.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">
                    <span class="sm:text-3xl text-xl">Technoscape:</span> <br>
                    <span style="color: #BDC1F0; ">Virtual Conference</span>
                </div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic7.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">
                    <span class="sm:text-3xl text-xl">Technoscape:</span> <br>
                    <span style="color: #FFAAA5; ">Developer Workshop</span>
                </div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic8.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">
                    <span class="sm:text-3xl text-xl">Technoscape:</span> <br>
                    <span style="color: #85E4F1; ">Hackathon</span>
                </div>
            </div>
            <div class="w-full h-full slide slide-left absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic9.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Training Web Design</div>
            </div>

            <div class="cursor-pointer h-full sm:w-28 w-16 z-20 left-0 absolute arrow-cont prev flex flex-row justify-center items-center"><img class="sm:w-6 w-3" src="{{ asset('Asset/Image/landing/event-arrow-prev.svg')}}" alt=""></div>
            <div class="cursor-pointer h-full sm:w-28 w-16 z-20 right-0 absolute arrow-cont next flex flex-row justify-center items-center"><img class="sm:w-6 w-3" style="transform: rotate(-180deg);" src="{{ asset('Asset/Image/landing/event-arrow-next.svg')}}" alt=""></div>
        </div>
        <div class="w-full flex flex-row mt-10 justify-center dot-cont-event px-5">
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg on"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
            </div>
    </div>

    {{-- BOS Events --}}
    <div id="bos-events" class="bose w-full font-sans my-32 px-12 sm:px-48">
        <h1 class="font-extrabold text-center text-cDarkBlue text-3xl sm:text-4xl md:text-5xl mb-14">BNCC Opening Season Events</h1>
        <div class="w-full flex flex-col md:flex-row flex-wrap justify-center items-center">
            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl mb-4">BNCC Expo</h2>
                <p class="text-cBlackHome mb-4">
                    A session to introduce BNCC to everyone who comes and satisfies their curiosity.
                </p>
                <p class="bose-cs text-cLntBlue mb-4 cursor-pointer">
                    Click here to see schedule
                </p>
                <div class="bose-cc mb-4 hidden">
                    <h5 class="font-semibold text-cDarkBlue text-lg mb-4">Schedule</h5>
                    1st Batch: August 7, 2021 at 2.00 - 3.00 PM WIB
                    <br>
                    2nd Batch: August 14, 2021 at 2.00 - 3.00 PM WIB
                    <br>
                    3rd Batch: August 21, 2021 at 2.00 - 3.00 PM WIB
                    <br>
                    4th Batch: August 28, 2021 at 2.00 - 3.00 PM WIB

                    <div class="bose-ch text-cLntBlue mb-4 cursor-pointer">
                        Click here to hide schedule
                    </div>
                </div>
                <a class="w-full bg-cLntBlue hover:bg-cDarkerLightBlue transition duration-300 ease-in-out text-center
                text-cWhite font-semibold rounded py-2"
                href="https://teams.microsoft.com/l/channel/19%3a243424fa3e5946ec839266c9f5c41dd8%40thread.tacv2/
                BNCC%2520(Bina%2520Nusantara%2520Computer%2520Club)?groupId=4d3e8a58-c835-4687-9c43-9e2b075500d8&ten
                antId=3485b963-82ba-4a6f-810f-b5cc226ff898">Join Now</a>
            </div>

            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl mb-4">LIVE Session QnA</h2>
                <p class="text-cBlackHome mb-4">
                    A live session where attendees can ask BNCC colleagues any questions they have regarding the organization.
                </p>
                <p class="bose-cs text-cLntBlue mb-4 cursor-pointer">
                    Click here to see schedule
                </p>
                <div class="bose-cc mb-4 hidden">
                    <h5 class="font-semibold text-cDarkBlue text-lg mb-4">Schedule</h5>
                        Every Monday to Saturday
                        <br>
                        August 2 - 28, 2021
                        <br>
                        05.00 - 10.00 PM
                    <div class="bose-ch text-cLntBlue mb-4 cursor-pointer">
                        Click here to hide schedule
                    </div>
                </div>
                <a class="w-full bg-cLntBlue hover:bg-cDarkerLightBlue transition duration-300 ease-in-out text-center
                text-cWhite font-semibold rounded py-2"
                href="">Join Now</a>
            </div>

            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl text-cBlackHome mb-2">Twibbon Challenge</h2>
                <h5 class="font-semibold text-cDarkBlue text-lg mb-4">Ends in August DD, 2021</h5>
                <p class="text-cBlackHome mb-4">
                    Show to the world that you are going to be a part of BNCC family and get your chance to win valuable prizes!
                </p>
                <a class="w-full flex flex-row justify-center items-center
                bg-cBluishGray
                transition duration-300
                ease-in-out text-center
                text-cWhite font-semibold rounded py-2
                cursor-default">
                    Coming Soon
                </a>
                {{-- <a class="w-full flex flex-row justify-center items-center
                bg-cLntBlue
                hover:bg-cDarkerLightBlue
                transition duration-300
                ease-in-out text-center
                text-cWhite font-semibold rounded py-2" href="">
                <img class="w-6 mr-2" src="{{url('./Asset/Image/landing/bose-download.svg')}}" alt="">
                    Download
                </a> --}}
            </div>

            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl text-cBlackHome mb-2">Codesign: Front-End Development</h2>
                <h5 class="font-semibold text-cDarkBlue text-lg mb-4">August 26, 2021</h5>
                <p class="text-cBlackHome mb-4">
                    An online workshop that will teach you the fundamentals of how to design and build a website.
                </p>
                <a class="w-full flex flex-row justify-center items-center
                bg-cBluishGray
                transition duration-300
                ease-in-out text-center
                text-cWhite font-semibold rounded py-2
                cursor-default">
                    Coming Soon
                </a>
                {{-- <a class="w-full bg-cLntBlue hover:bg-cDarkerLightBlue transition duration-300 ease-in-out text-center
                text-cWhite font-semibold rounded py-2"
                href="">Join Now</a> --}}
            </div>

            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl text-cBlackHome mb-2">Codesign: UI/UX Design</h2>
                <h5 class="font-semibold text-cDarkBlue text-lg mb-4">August 25, 2021</h5>
                <p class="text-cBlackHome mb-4">
                    A challenge encouraging you to help BNCC by sharing your unique photo for a chance to win a reward.
                </p>
                <a class="w-full flex flex-row justify-center items-center
                bg-cBluishGray
                transition duration-300
                ease-in-out text-center
                text-cWhite font-semibold rounded py-2
                cursor-default">
                    Coming Soon
                </a>
                {{-- <a class="w-full bg-cLntBlue hover:bg-cDarkerLightBlue transition duration-300 ease-in-out text-center
                text-cWhite font-semibold rounded py-2"
                href="">Join Now</a> --}}
            </div>

            <div class="card rounded-xl flex flex-col p-8 shadow-bsWhy">
                <h2 class="font-bold text-2xl text-cBlackHome mb-2">BNCC Launching</h2>
                <h5 class="font-semibold text-cDarkBlue text-lg mb-4">August 31 - September 2, 2021</h5>
                <p class="text-cBlackHome mb-4">
                    Sessions to welcome new members and discover more about BNCC.
                </p>
                <a class="w-full bg-cLntBlue hover:bg-cDarkerLightBlue transition duration-300 ease-in-out text-center
                text-cWhite font-semibold rounded py-2"
                href="{{url('/register')}}">Register Now</a>
            </div>

        </div>
    </div>

    {{-- What They Say? --}}
    <div id="what" class="what w-full font-sans my-32 xl:px-72 lg:px-40 sm:px-10 px-5">
        <h1 class="font-extrabold text-cDarkBlue sm:text-5xl sm:mb-14 text-3xl mb-5 sm:text-left text-center w-full say-title">What they say about BNCC?</h1>
        <div class="relative say-card-cont sm:h-56 h-44">
            <div class="flex flex-row items-center say-card say-card-visible absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person1.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Kevin Bryan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Pesanku untuk Binusian 2025, langsung aja daftar BNCC karena journey di BNCC itu benar-benar seru banget dan pelajaran yang akan kalian dapatkan pasti bakal sangat berguna di perkuliahan maupun masa yang akan datang.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person2.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Clario Johan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Menurutku kesempatan join BNCC itu it’s now or never, apakah kalian mau ambil kesempatan yang akan berguna bagi masa depan kalian atau tidak, jadi langsung aja yah daftar BNCC, see you in BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person3.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Benedic Matthew Halim</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Pengalaman dan koneksi yang didapatkan sangat berharga dan tidak dapat dinilai dengan apapun.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person6.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Felisha Kwan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Bagiku BNCC adalah wadah untuk menyalurkan aspirasi dan mengembangkan diri.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person4.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Yesaya Kevin</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Buat aku BNCC itu bagaikan sebuah batu loncatan untuk keluar dari zona nyamanku, dan saranku bagi kalian yang ingin berkembang juga, kalian wajib banget nih join BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-52 lg:h-52 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person5.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Muhammad Rafi W P</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Di BNCC aku belajar time management yang baik dan kita selalu dituntut untuk tetap profesional karena bisa dikatakan BNCC sudah layaknya sebuah perusahaan.”</div>
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-evenly width-full mt-10">
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 say-pic-active mb-2" src="{{ asset('Asset/Image/landing/say-person1.png')}}" alt="">
                <span>Kevin</span>
            </div>
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 mb-2" src="{{ asset('Asset/Image/landing/say-person2.png')}}" alt="">
                <span>Clario</span>

            </div>
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 mb-2" src="{{ asset('Asset/Image/landing/say-person3.png')}}" alt="">
                <span>Benedic</span>

            </div>
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 mb-2" src="{{ asset('Asset/Image/landing/say-person6.png')}}" alt="">
                <span>Felicia</span>

            </div>
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 mb-2" src="{{ asset('Asset/Image/landing/say-person4.png')}}" alt="">
                <span>Yesaya</span>

            </div>
            <div class="text-center font-bold cursor-pointer say-btn flex flex-col items-center">
                <img class="rounded-full md:w-20 md:h-20 w-14 h-14 mb-2" src="{{ asset('Asset/Image/landing/say-person5.png')}}" alt="">
                <span>Rafi</span>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div id="faq" class="faq w-full font-sans my-32 px-72">
        <h1 class="font-extrabold text-cDarkBlue text-3xl sm:text-4xl md:text-5xl lg:text-7xl mb-14 text-center">Frequently Asked Questions</h1>
        <div class="w-full flex flex-col justify-center items-center">
            <div class="ques w-full flex flex-col">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">What is BNCC?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    BNCC (Bina Nusantara Computer Club) is the best computer-based organization in
                    Binus University that has already reached its 32nd year. This organization has built a strong
                    foundation and experiences in educating people about computers, technology business, and organizational skills.
                    For further information, you can access the following <a class="font-bold underline" href="https://bncc.net/"> link</a>.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">What are the benefits offered by BNCC?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    At BNCC, LnT offers courses and workshops to enhance your <strong>hard skills</strong>. In addition,
                    you can also gain <strong>organizational experience</strong>, <strong>networking</strong> with people in the
                    technology industry, soft skills such as public speaking, time management, and many
                    more.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">
                        Do I have to come from the School of
                        Computer Science or School of Information Systems to join BNCC?
                    </h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    BNCC is open to all Binusians. Even though you are not from School of
                    Computer Science or School of Information Systems, you can still become a member of BNCC.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">What materials are available at LnT classes in BNCC?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    LnT is divided into 4 regions, namely Kemanggisan, Alam Sutera, Bandung, and Malang regions.
                    Presented below are each region's LnT materials.
                    <br>
                    <li><strong>LnT Kemanggisan:</strong> Mobile Application Development, Java Programming, Back-End Development,
                        Front-End Development, and UI/UX Design.</li>
                    <li><strong>LnT Alam Sutera:</strong> Java Programming, Front-End Development, UI/UX Design, and C Programming.</li>
                    <li><strong>LnT Bandung & Malang:</strong> Mobile Application Development, Java Programming, Back-End Development,
                        UI/UX Design, and Game Development.</li>
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">How is the learning schedule at LnT?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    The learning schedule is flexible, where members can choose a schedule that they can follow weekly so that it will not
                    clash with the lecture schedule.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">How to join BNCC?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    To become a BNCC member, you can directly register yourself on
                    <a class="font-bold underline" href="{{url('/login')}}">this</a> website.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">Where can I get the latest info about BNCC Expo?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    The latest information regarding BNCC Expo can be obtained
                    through the
                    <a class="font-bold underline" href="https://teams.microsoft.com/l/channel/19%3a243424fa3e5946ec839266c9f5c41dd8%40thread.tacv2/
                    BNCC%2520(Bina%2520Nusantara%2520Computer%2520Club)?groupId=4d3e8a58-c835-4687-9c43-9e2b075500d8&
                    tenantId=3485b963-82ba-4a6f-810f-b5cc226ff898">Microsoft Teams</a> platform as well as
                    <a class="font-bold underline" href="https://www.instagram.com/bnccbinus/">Instagram</a>.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">How is the LnT learning process during the pandemic?</h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    The learning will take place online using a video conferencing platform or Discord voice channel.
                </div>
            </div>

            <div class="ques w-full flex flex-col mt-12">
                <div class="top w-full flex flex-row justify-between py-8 px-16">
                    <h1 class="text-2xl text-cDarkBlue font-bold">If I have further questions, who should I contact ? </h1>
                    <img class="arrow" src="{{url('./Asset/Image/landing/faq-arrow.svg')}}" alt="">
                </div>
                <div class="bot bg-cGray w-full text-cBlackHome font-medium text-lg leading-8 py-8 px-20">
                    If you still have further questions, you can reach out to the contact persons listed
                    <a class="font-bold underline" href="#footer">below</a> for more information.
                </div>
            </div>

        </div>
    </div>

    {{-- Sponsor --}}
    <div id="sponsor" class="sponsor w-full font-sans my-32 xl:px-72 lg:px-40 sm:px-10 px-5">
        <h1 class="font-extrabold text-cDarkBlue sm:text-5xl text-4xl mb-14 text-center">Our Sponsors</h1>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center">
            <span class=" sm:text-2xl text-xl font-medium -mt-5 bg-cWhite px-5">Gold Sponsor</span>
            <div class="sm:p-5 p-0">
                <img class="sm:h-52 h-28 m-5" src="{{ asset('Asset/Image/landing/sponsor-gold.svg')}}" alt="">
            </div>
        </div>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center mt-14 ">
            <span class="sm:text-2xl text-xl font-medium -mt-5 bg-cWhite px-5">Silver Sponsor</span>
            <div class="sm:p-5 p-0 flex flex-row justify-around w-full flex-wrap">
                <img class="sm:h-20 h-12 m-5" src="{{ asset('Asset/Image/landing/sponsor-silver1.svg')}}" alt="">
                <img class="sm:h-20 h-12 m-5" src="{{ asset('Asset/Image/landing/sponsor-silver2.svg')}}" alt="">
            </div>
        </div>
        <div class="rounded-xl border-2 border-cLightGray flex flex-col items-center mt-14 ">
            <span class="sm:text-2xl text-xl font-medium -mt-5 bg-cWhite px-5">Bronze Sponsor</span>
            <div class="sm:p-5 p-0 flex flex-row justify-around w-full flex-wrap">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze1.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze2.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze3.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze4.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze5.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze6.svg')}}" alt="">
                <img class="sm:h-16 h-8 m-5" src="{{ asset('Asset/Image/landing/sponsor-bronze7.svg')}}" alt="">
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div id="footer" class="footer footer-sec w-full font-sans relative bg-bgSpace">

        <img class="w-screen absolute" src="{{ asset('Asset/Image/landing/footer-cloud1.svg')}}" alt="">
        <img class="w-screen absolute" src="{{ asset('Asset/Image/landing/footer-cloud2.svg')}}" alt="">

        <div class="flex flex-row footer-content absolute z-10 text-cWhite ">
            <div class="gotaq-cont p-12 border-r-4">
                <div class="text-3xl font-medium text-cWhite tracking-wide got-question">Got a question? Contact us!</div>
                <div class="flex flex-row justify-around text-lg mt-3">
                    <div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-user.svg')}}" alt=""> Astrid
                        </div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-phone.svg')}}" alt=""> 081287422520
                        </div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-line.svg')}}" alt=""> astriddwrn
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-user.svg')}}" alt=""> Samuel
                        </div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-phone.svg')}}" alt=""> 081251442125
                        </div>
                        <div class="flex flex-row items-center  mt-3">
                            <img class="w-6 mr-4" src="{{ asset('Asset/Image/landing/footer-icon-line.svg')}}" alt=""> ssam223
                        </div>
                    </div>
                </div>
            </div>
            <div class="socmed-cont p-12">
                <div class="h-full flex flex-col justify-end">
                    <div class="text-2xl font-medium w-80">Check our Social Media:</div>
                    <div class="w-full flex flex-row justify-between mt-3 social">
                        <a class="w-12" href="https://www.instagram.com/bnccbinus/" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/instagram.svg')}}" alt="BNCC Launching"></a>
                        <a class="w-12" href="https://www.linkedin.com/company/bina-nusantara-computer-club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/linkedin.svg')}}" alt="BNCC Launching" ></a>
                        <a class="w-12" href="https://www.youtube.com/channel/UC0BND4Aekeg90GQ1_ZX79Yw" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/youtube.svg')}}" alt="BNCC Launching"></a>
                        <a class="w-12" href="https://twitter.com/BNCC_Binus" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/twitter.svg')}}" alt="BNCC Launching"></a>
                        <a class="w-12" href="https://www.facebook.com/bina.nusantara.computer.club" target = "_blank"><img class="" src="{{asset('Asset/Image/comingSoon/facebook.svg')}}" alt="BNCC Launching" ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bottom-0 absolute p-10">
            <div class="flex flex-row justify-between items-end pb-5 border-b-4 border-cWhite">
                <a class="" href="https://bncc.net/" target = "_blank"><img class="" src="{{asset('Asset/Image/landing/footer-logo-bncc.svg')}}" alt="BNCC Launching" ></a>
                <a class="" href="https://www.gojek.com/en-id/" target = "_blank"><img class="" src="{{asset('Asset/Image/landing/footer-logo-gojek.svg')}}" alt="BNCC Launching" ></a>
            </div>
            <div class="flex flex-row justify-between items-end mt-5 text-cWhite">
                <div>All Right Reserved BNCC 2021 © Bina Nusantara Computer Club</div>
                <div>Privacy Policy & Terms of Service</div>
            </div>
        </div>

    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/landing.js')}}"></script>
</body>
</html>
