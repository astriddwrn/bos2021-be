<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/landing.css') }}"> -->

    <style>
        /* say css */
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

        /* NEW CSS */
        @media all and ( max-width: 479px) {
            .say-card img{
                width: 80px;
                height: 80px;
            }
            .say-card .text-sm{
                font-size: .7rem;
                line-height: .9rem;
            }
            .say-btn{
                font-size: .6rem;
                font-weight: 600;
            }
            .say-btn img{
                width: 30px;
                height: 30px;
            }
            .say-card-cont{
                height: 130px;
            }
            .say-card-cont .title{
                font-size: .8rem;
            }
            .say-title{
                /* font-size: 1.2rem; */
            }
            .text-base{
                font-size: .8rem;
                line-height: 1.2rem;
            }
        }


    }
    </style>
</head>
<body class="bg-cWhite">


    {{-- Sponsor --}}

    <div class="w-full font-sans my-32 xl:px-72 lg:px-40 sm:px-10 px-5">
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

    {{-- say --}}
    <div class="w-full font-sans my-32 xl:px-72 lg:px-40 sm:px-10 px-5">
        <h1 class="font-extrabold text-cDarkBlue sm:text-5xl sm:mb-14 text-3xl mb-5 sm:text-left text-center w-full say-title">What they say about BNCC?</h1>
        <div class="relative say-card-cont sm:h-56 h-44">
            <div class="flex flex-row items-center say-card say-card-visible absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person1.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Kevin Bryan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Pesanku untuk Binusian 2025, langsung aja daftar BNCC karena journey di BNCC itu benar-benar seru banget dan pelajaran yang akan kalian dapatkan pasti bakal sangat berguna di perkuliahan maupun masa yang akan datang.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person2.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Clario Johan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Menurutku kesempatan join BNCC itu it’s now or never, apakah kalian mau ambil kesempatan yang akan berguna bagi masa depan kalian atau tidak, jadi langsung aja yah daftar BNCC, see you in BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person3.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Benedic Matthew Halim</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Pengalaman dan koneksi yang didapatkan sangat berharga dan tidak dapat dinilai dengan apapun.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person6.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Felisha Kwan</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Bagiku BNCC adalah wadah untuk menyalurkan aspirasi dan mengembangkan diri.”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person4.png')}}" alt="">
                <div>
                    <div class="sm:text-2xl text-xl font-bold sm:my-3 my-0 title h-full">Yesaya Kevin</div>
                    <div class="w-full font-medium sm:text-base text-sm sm:leading-7">“Buat aku BNCC itu bagaikan sebuah batu loncatan untuk keluar dari zona nyamanku, dan saranku bagi kalian yang ingin berkembang juga, kalian wajib banget nih join BNCC!”</div>
                </div>
            </div>
            <div class="flex flex-row items-center say-card absolute h-full">
                <img class="rounded-full lg:w-62 lg:h-62 sm:w-40 sm:h-40 h-24 w-24 lg:mx-7 mr-3" src="{{ asset('Asset/Image/landing/say-person5.png')}}" alt="">
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

    {{-- event --}}
    <div class="w-full h-screen font-sans my-32 xl:px-72 lg:px-40 sm:px-10 px-5 text-base ">
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
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic9.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Training Web Design</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic10.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Training Menulis Artikel</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic11.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Training Motion Graphic</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic12.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">Training Video Editing</div>
            </div>
            <div class="w-full h-full slide slide-behind absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic13.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">
                    <span class="sm:text-3xl text-xl">Corporate Social</span> <br>
                    <span style="">Responsibility (CSR)</span>
                </div>
            </div>
            <div class="w-full h-full slide slide-left absolute">
                <div class="w-full h-full layer absolute z-20"></div>
                <img  class="absolute w-full rounded-xl z-10 h-full w-full object-cover" src="{{ asset('Asset/Image/landing/event-pic14.svg')}}" alt="">
                <div class="absolute z-30 w-full text-center sm:bottom-10 bottom-5 sm:text-4xl text-2xl font-bold text-cWhite">BNCC Meet Up</div>
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
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>
                <div class="h-2 w-6 sm:mr-5 mr-2 rounded-lg"></div>

            </div>

    </div>

    <div id="footer" class="footer footer-sec w-full font-sans relative bg-bgSpace">

<img class="w-screen absolute" src="{{ asset('Asset/Image/landing/footer-cloud1.svg')}}" alt="">
<img class="w-screen absolute" src="{{ asset('Asset/Image/landing/footer-cloud2.svg')}}" alt="">

<div class="flex flex-row footer-content absolute z-10 text-cWhite ">
    <div class="p-12 border-r-4">
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
    <div class="p-12">
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


        });



    </script>
</body>
</html>
