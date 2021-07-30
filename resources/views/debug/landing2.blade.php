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

    <style>
        .say-pic-active{
            box-shadow:5px 14px 13px #CDCDCD;
            transition: all .5s ease-in-out;
        }
        .say-card{
            opacity: 0;
        }
        .say-card-visible{
            opacity: 1 !important;
            transition: opacity 1s ease-in-out;
        }


        /* Event CSS */
        .carousel-event .layer{
            background: linear-gradient(179.23deg, rgba(0, 0, 0, 0) 46.65%, rgba(0, 0, 0, 0.54) 101.2%);
        }
        .carousel-event .arrow-cont.prev{
            background: linear-gradient(88.13deg, rgba(0, 0, 0, 0.3) -2.23%, rgba(0, 0, 0, 0) 91.21%);
            transition: all .5s ease-in-out;

        }
        .carousel-event .arrow-cont.prev:hover{
            background: linear-gradient(88.13deg, rgba(255, 255, 255, 0.4) -2.23%, rgba(255, 255, 255, 0) 96.08%);
            transition: all .5s ease-in-out;

        }
        .carousel-event .arrow-cont.next{
            background: linear-gradient(88.13deg, rgba(0, 0, 0, 0.3) -2.23%, rgba(0, 0, 0, 0) 91.21%);
            transform: matrix(-1, 0, 0, 1, 0, 0);
            transition: all .5s ease-in-out;

        }
        .carousel-event .arrow-cont.next:hover{
            background: linear-gradient(88.13deg, rgba(255, 255, 255, 0.4) -2.23%, rgba(255, 255, 255, 0) 96.08%);
            transform: matrix(-1, 0, 0, 1, 0, 0);
            transition: all .5s ease-in-out;
        }
        .carousel-event .slide{
            left:0;
            transition: all 1s linear;
            z-index: 5;

        }
        .carousel-event .slide-right{
            transform: translate(100%, 0);
            transition: all 1s linear;
            z-index: 4;

        }
        .carousel-event .slide-left{
            transform: translate(-100%, 0);
            transition: all 1s linear;
            z-index: 4;

        }
        .carousel-event .slide-behind{
            left:0;
            z-index: -1 !important;
        }
        .dot-cont-event div{
            background: #CDD8DD;
            transition: all 1s ease-in-out;
        }
        .dot-cont-event .on{
            background: #0054A5 !important;
            transition: all 1s ease-in-out;
        }


    }
    </style>
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

    {{-- say --}}
    <div class="w-full font-sans my-32 px-72">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14">What they say about BNCC?</h1>
        <div class="relative h-56">
            <div class="flex flex-row say-card say-card-visible absolute">
                <img class="rounded-full w-52 h-52 mx-7" src="{{ asset('Asset/Image/landing/say-person1.png')}}" alt="">
                <div>
                    <div class="text-2xl font-bold my-3">Kevin Bryan</div>
                    <div class="font-medium leading-7">“Pesanku untuk Binusian 2025, langsung aja daftar BNCC karena journey di BNCC itu benar-benar seru banget dan pelajaran yang akan kalian dapatkan pasti bakal sangat berguna di perkuliahan maupun masa yang akan datang.”</div>
                </div>
            </div>
            <div class="flex flex-row say-card absolute">
                <img class="rounded-full w-52 h-52 mx-7" src="{{ asset('Asset/Image/landing/say-person2.png')}}" alt="">
                <div>
                    <div class="text-2xl font-bold my-3">Clario Johan</div>
                    <div class="font-medium leading-7">“Menurutku kesempatan join BNCC itu it’s now or never, apakah kalian mau ambil kesempatan yang akan berguna bagi masa depan kalian atau tidak, jadi langsung aja yah daftar BNCC, see you in BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row say-card absolute">
                <img class="rounded-full w-52 h-52 mx-7" src="{{ asset('Asset/Image/landing/say-person3.png')}}" alt="">
                <div>
                    <div class="text-2xl font-bold my-3">Benedic Matthew Halim</div>
                    <div class="font-medium leading-7">“Pengalaman dan koneksi yang didapatkan sangat berharga dan tidak dapat dinilai dengan apapun.”</div>
                </div>
            </div>
            <div class="flex flex-row say-card absolute">
                <img class="rounded-full w-52 h-52 mx-7" src="{{ asset('Asset/Image/landing/say-person4.png')}}" alt="">
                <div>
                    <div class="text-2xl font-bold my-3">Yesaya Kevin</div>
                    <div class="font-medium leading-7">“Buat aku BNCC itu bagaikan sebuah batu loncatan untuk keluar dari zona nyamanku, dan saranku bagi kalian yang ingin berkembang juga, kalian wajib banget nih join BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row say-card absolute">
                <img class="rounded-full w-52 h-52 mx-7" src="{{ asset('Asset/Image/landing/say-person5.png')}}" alt="">
                <div>
                    <div class="text-2xl font-bold my-3">Muhammad Rafi Wira Pratama</div>
                    <div class="font-medium leading-7">“Di BNCC aku belajar time management yang baik dan kita selalu dituntut untuk tetap profesional karena bisa dikatakan BNCC sudah layaknya sebuah perusahaan.”</div>
                </div>
            </div>
        </div>



        <div class="flex flex-row justify-evenly width-full mt-10">
            <div class="text-center font-bold cursor-pointer say-btn">   
                <img class="rounded-full w-24 h-24 say-pic-active mb-3" src="{{ asset('Asset/Image/landing/say-person1.png')}}" alt="">
                Kevin
            </div>
            <div class="text-center font-bold cursor-pointer say-btn">   
                <img class="rounded-full w-24 h-24 mb-3" src="{{ asset('Asset/Image/landing/say-person2.png')}}" alt="">
                Clario
            </div>
            <div class="text-center font-bold cursor-pointer say-btn">   
                <img class="rounded-full w-24 h-24 mb-3" src="{{ asset('Asset/Image/landing/say-person3.png')}}" alt="">
                Benedic
            </div>
            <div class="text-center font-bold cursor-pointer say-btn">   
                <img class="rounded-full w-24 h-24 mb-3" src="{{ asset('Asset/Image/landing/say-person4.png')}}" alt="">
                Yesaya
            </div>
            <div class="text-center font-bold cursor-pointer say-btn">   
                <img class="rounded-full w-24 h-24 mb-3" src="{{ asset('Asset/Image/landing/say-person5.png')}}" alt="">
                Rafi
            </div>
        </div>
    </div>

    {{-- event --}}
    <div class="w-full h-screen font-sans my-32 px-72">
        <h1 class="font-extrabold text-cDarkBlue text-5xl mb-14">Our Events</h1>
        <div class="text-base mb-14">Here are some of our event highlights. Through events, we improve our knowledge, try new experiences, and build a sense of belonging in the BNCC family. More exciting events are on the way!</div>

        <div class="relative w-full carousel-event rounded-xl h-3/6 overflow-hidden">
            <div class="w-full h-full slide  absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">Technoscape</div>
            </div>
            <div class="w-full h-full slide slide-right absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">BTT1</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">BTT2</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">Expo</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">CSR</div>
            </div>
            <div class="w-full h-full slide slide-left absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10" src="{{ asset('Asset/Image/landing/event-pic1.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center bottom-10 text-4xl font-bold text-cWhite">DLL</div>
            </div>
            
            <div class="cursor-pointer h-full w-28 z-20 left-0 absolute arrow-cont prev flex flex-row justify-center items-center"><img src="{{ asset('Asset/Image/landing/event-arrow-prev.svg')}}" alt=""></div>
            <div class="cursor-pointer h-full w-28 z-20 right-0 absolute arrow-cont next flex flex-row justify-center items-center"><img  style="transform: rotate(-180deg);" src="{{ asset('Asset/Image/landing/event-arrow-next.svg')}}" alt=""></div>
        
            
        </div>
        <div class="w-full flex flex-row mt-10 justify-center dot-cont-event">
                <div class="h-2 w-10 mr-5 rounded-lg on"></div>
                <div class="h-2 w-10 mr-5 rounded-lg"></div>
                <div class="h-2 w-10 mr-5 rounded-lg"></div>
                <div class="h-2 w-10 mr-5 rounded-lg"></div>
                <div class="h-2 w-10 mr-5 rounded-lg"></div>
                <div class="h-2 w-10 rounded-lg"></div>
            </div>
        
    </div>
    


    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/landing.js')}}"></script>

    <script>
        $(document).ready(function(){
            let sayCurrNum = 0;
            $('.say-btn').click(function(){
                let sayThisNum = $(this).index();
                $('.say-btn img').removeClass('say-pic-active');
                $(this).find('img').addClass('say-pic-active');
                $('.say-card').removeClass('say-card-visible');
                $('.say-card').eq(sayThisNum).addClass('say-card-visible');


            });


            // Event JS
            let eventCurrNum = 0;
            $(".carousel-event .next").click(function(){
                if($(this).hasClass('non-clickable')){
                    return false;
                }
                $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-left');
                eventCurrNum++;
                eventCurrNum>5 ? eventCurrNum=0 : '';
                let a=eventCurrNum;
                let b=eventCurrNum;
                a -=2;
                a==-2 ? a=4 : '';
                a==-1 ? a=5 : '';
                b +=1;
                b>5 ? b=0 : '';
                $(".carousel-event .slide").eq(a).removeClass('slide-left').addClass('slide-behind');
                $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-right');
                $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-right');
                $(".dot-cont-event div").removeClass('on');
                $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

                $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
                setTimeout(function(){
                     $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
                },1000);
                
            });
            $(".carousel-event .prev").click(function(){
                if($(this).hasClass('non-clickable')){
                    return false;
                }
                $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-right');
                eventCurrNum--;
                eventCurrNum<0 ? eventCurrNum=5 : '';
                let a=eventCurrNum;
                let b=eventCurrNum;
                a +=2;
                a==7 ? a=1 : '';
                a==6 ? a=0 : '';
                b -=1;
                b<0 ? b=5 : '';
                $(".carousel-event .slide").eq(a).removeClass('slide-right').addClass('slide-behind');
                $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-left');
                $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-left');
                $(".dot-cont-event div").removeClass('on');
                $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

                $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
                setTimeout(function(){
                     $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
                },1000);
            });


        });



    </script>
</body>
</html>
