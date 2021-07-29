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
        .footer-sec{
            height:900px;
        }
        .footer-content{
            top: 45%;
            left: 50%;
            transform: translate(-50%, 0%);
        }
        .footer-sec .got-question{
            width: 450px;
        }
        .footer-sec .social img{
            width: 50px;
            height: 50px;
        }

        .footer-sec .social a {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            transition: 0.3s;
        }

        .footer-sec .social a:hover{
            cursor: pointer;
            box-shadow:0 0 10px .5px  #FBFBFB;
            transition: 0.3s;
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

    {{-- footer --}}
    <div class="footer-sec w-full font-sans relative bg-bgSpace">
        
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

        });



    </script>
</body>
</html>
