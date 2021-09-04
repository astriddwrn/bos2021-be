<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="schedules" content="{{ $schedules_from_region->toJson() }}">
    <meta name="user" content="{{ $user->toJson() }}">


    <title>User Dashboard | BNCC Launching</title>
    <link rel="image_src" href="{{ asset('Asset/Image/auth/logo-png')}}" />
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}?t=202121082452">


</head>
<body class="text-base">
    <div class="pop-up fixed success-reregistration w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 lg:w-6/12 w-96 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Registration Success!</div>
        </div>
    </div>
    <div class="pop-up fixed success-schedule w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 lg:w-6/12 w-96 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Your Schedule has been Updated Successfully!</div>
        </div>
    </div>
    <div class="pop-up fixed success-payment w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 lg:w-6/12 w-96 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Payment Submission Success!</div>
        </div>
    </div>
    <div class="pop-up fixed loggingout w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/loggingout.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to log out?</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center modal-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Go Back</div>
                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Log Out</button>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-row w-screen">
        <div class="menu-cont menu-off xl:w-3/12 sm:w-80 w-60 h-screen flex flex-col items-center fixed xl:left-0 right-0 xl:flex z-10 bg-cWhite shadow-bsBtn">
            <img class="xl:hidden absolute left-5 top-3 arrow-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/arrow-icon.svg')}}" alt="BNCC Launching">
            <img class="w-28 h-28 rounded-full mt-10 cursor-pointer" src="{{ asset('Asset/Image/userDashboard/profile.svg')}}" alt="BNCC Launching">
            <div class="text-sm font-medium mt-3">Welcome Back,</div>
            <div class="text-xl font-semibold mt-1">
                {!! \Illuminate\Support\Str::words($user->fullName, 2,'')  !!}
            </div>
            <div class="mt-7 text-lg menu-list w-52">
                <div class="menu flex flex-row items-center font-semibold menu-schedule cursor-pointer">
                    <img class="mr-4 w-9 off hidden" src="{{ asset('Asset/Image/userDashboard/menu-schedule-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 on" src="{{ asset('Asset/Image/userDashboard/menu-schedule-on.svg')}}" alt="BNCC Launching">
                    Schedule</div>
                @if (!$diff_payment->invert)
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-payment cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-payment-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-payment-on.svg')}}" alt="BNCC Launching">
                    Payment</div>
                @endif
                @if (!$diff_reregis->invert && $user->status==1 &&
                ($user->campus=='KMG'||$user->campus=='SNY'||$user->campus=='OL'||$user->campus=='ASO'||$user->campus=='BKS'))
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-reregistration cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-on.svg')}}" alt="BNCC Launching">
                    Re-Registration</div>
                @endif
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-profile cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-profile-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-profile-on.svg')}}" alt="BNCC Launching">Profile</div>
            </div>
            <div class="absolute return-list bottom-10 text-lg w-52">
                <div class="mt-5 flex flex-row items-center font-semibold text-md cursor-pointer">
                    <img class="mr-4  w-9" src="{{ asset('Asset/Image/userDashboard/menu-home-off.svg')}}" alt="BNCC Launching">
                    <!-- <img class="mr-4  w-9 hidden " src="{{ asset('Asset/Image/userDashboard/menu-home-on.svg')}}" alt="BNCC Launching"> -->
                    <a href="{{url('/')}}">Return to Home</a></div>
                <div class="mt-7 logout flex flex-row items-center font-semibold text-md text-cLightBlue cursor-pointer">
                    <img class="mr-3 px-2" src="{{ asset('Asset/Image/userDashboard/menu-logout.svg')}}" alt="BNCC Launching">Log out</div>
            </div>
        </div>

        <div class="xl:w-9/12 w-full right-cont bg-cLightGray absolute right-0 min-h-screen w-full">
            <div class="section schedule-sec bg-cLightGray h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Schedule</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer curson-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>
                <!-- SEBELUM REREGIST -->
                @if ($user->is_reregistered==0)
                <div class="main-container">
                    <div class="grid-cont-schedule">
                        <div class="card join rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                            <div class="text-2xl font-bold text-cDarkBlue">Join Our Launch!</div>
                            <div class="text-md font-medium">Don’t forget to join our BNCC Launching on:</div>

                            @foreach ($schedules as $schedule)
                            <div class="mt-4">
                                <div class="flex flex-row items-center text-lg font-semibold"><img class="mr-3 w-9" src="{{ asset('Asset/Image/userDashboard/menu-schedule-on.svg')}}" alt="BNCC Launching">
                                {{$schedule->formatting_date()}} @if($user->campus=='BDG'||$user->campus=='MLG')({{$schedule->lnt_course}})@endif
                                </div>
                                <div class="flex flex-row items-center text-lg font-semibold mt-3"><img class="mr-3 w-9" src="{{ asset('Asset/Image/userDashboard/time.svg')}}" alt="BNCC Launching">
                                    {{$schedule->start_date()}} - {{$schedule->end_date()}} (GMT +07.00)
                                </div>
                            </div>
                            @php
                                $now = Carbon\Carbon::now('GMT+7');
                                $dt_now = (new \DateTime($now))->modify("+10 minutes");
                                $diff = ((new \DateTime($schedule->date))->diff($dt_now));
                                $is_waiting_end = !$diff->invert;
                            @endphp
                            <a class="mb-5 sm:w-96 w-full mt-5 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-1 text-center cursor-pointer hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn"
                            href="{{$is_waiting_end ? $schedule->link1 : route("countdown") . "?s=" . $schedule->id}}">
                                Join Now
                            </a>
                            @endforeach

                        </div>

                        @if ($diff_change_schedule->invert)
                        <form action="{{ route('dashboard') }}" method="POST" enctype="application/x-www-form-urlencoded" id="form-schedule" class="card schedule rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                            @csrf
                            @method('PATCH')

                            <div class="text-2xl font-bold text-cDarkBlue">Change Your Schedule</div>
                            <div class="text-md font-medium">Unable to attend your previous schedule? Feel free to book for new schedule!</div>
                            <div>
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl mt-5">Schedule</div>

                                <span class="schedule-input schedule-select-cont schedule xl:w-full sm:w-96 w-full hidden">
                                    <div class="custom-select schedule-select xl:w-full sm:w-96 w-full">
                                        <select id="schedule-select">
                                            <option class="off" value="0">Select Your Course</option>
                                        </select>
                                    </div>
                                    <span class="msg-error"></span>
                                </span>

                                <span class="schedule-input schedule-checkbox-cont schedule xl:w-full sm:w-96 w-full">
                                    <span class="schedule-checkbox multiple w-full ">

                                    </span>
                                    <span class="msg-error"></span>
                                </span>

                            </div>
                            <div class="btn schedule-btn xl:w-full sm:w-96 w-full mt-5 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-1 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn cursor-pointer">Submit</div>
                        </form>
                        @endif

                        <div class="contact card rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                            <div class="text-2xl font-bold text-cDarkBlue">Contact Person</div>
                            <div class="text-md font-medium">Got a question in mind? Reach out our contact person!</div>
                            <div class="xl:w-full sm:w-96 w-full flex sm:flex-row flex-col sm:justify-around mt-2">
                                @if($user->campus == 'MLG')
                                <div class="flex flex-col sm:items-center">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Novelia</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082301020777</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">agatha.s_</div>
                                    </div>
                                </div>
                                @elseif($user->campus == 'ALS')
                                <div class="flex flex-col sm:items-center">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Nikita</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">087886316523</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Nikitafelicia</div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:items-center sm:mt-0 mt-3">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Jeta</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">087871447555</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Jetaaa1</div>
                                    </div>
                                </div>
                                @elseif($user->campus == 'BDG')
                                <div class="flex flex-col sm:items-center">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Rhenal</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">0818235657</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Add by phone</div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:items-center sm:mt-0 mt-3">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Fajar</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082114365818</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">fajarhamka21</div>
                                    </div>
                                </div>
                                @else
                                <div class="flex flex-col sm:items-center">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Astrid</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">081287422520</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">astriddwrn</div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:items-center sm:mt-0 mt-3">
                                    <img class="w-12 sm:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                    <div class="sm:text-center font-bold my-2 font-lg">Samuel</div>
                                    <div>
                                        <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">081251442125</div>
                                        <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">ssam223</div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- USER REGISTERED -->
                @if ($user->is_reregistered==1)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class=" absolute main-container md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/registered-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold mt-10">You Have Been Registered Successfully</div>
                        <div class="font-medium mt-3">Thank you for registering! You are now registered as a member of BNCC.</div>
                    </div>
                </div>
                @endif

            </div>

            <div class="section payment-sec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>
                <!-- SEBELUM UPLOAD PAYMENT -->
                @if ($user->payment_pic==NULL)
                <div class="main-container">
                    <div class="grid-cont-payment">
                        <div class="info card bg-cWhite rounded-xl px-8 py-5 ">
                            <div class="text-2xl font-bold text-cDarkBlue my-3">
                                Hi, {!! \Illuminate\Support\Str::words($user->fullName, 2,'')  !!}!
                            </div>
                            <div class="text-lg font-medium">Welcome to BNCC! Thank you for attending BNCC Launching. <br><br>Don’t forget to complete the re-registration procedure on time so that you could be a part of BNCC Family</div>
                        </div>

                        <div class="procedure card bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                            <div class="text-2xl font-bold text-cDarkBlue">Payment Procedure</div>
                            <div class="">Proceed your payment via transfer to following BCA account <br>
                                            <b>
                                            @if ($user->campus=='BDG')
                                            7772324173 (Rhenal Za Maulana Wongso)
                                            @elseif ($user->campus=='ALS')
                                            5271723327 (Felisha Miranda)
                                            @elseif ($user->campus=='MLG')
                                            5271723327 (Felisha Miranda)
                                            @else
                                            5271723327 (Felisha Miranda)
                                            @endif

                                            </b> <br>

                                            *Format detail: NIM - Full Name <br><br>

                                            Send your payment receipt to our contact person and upload it below
                                            <ul style="list-style-type: inherit;" class="pl-5">
                                                @if ($user->campus=='ALS')
                                                <li>Fraderic - 089649499832 -  LINE: fazbear</li>
                                                <li>Jeta - 087871447555 - LINE: jetaaa1</li>

                                                @elseif ($user->campus=='BDG')
                                                <li>Rhenal - 0818235657 -  LINE: Add by phone</li>
                                                <li>Fajar - 082114365818 - LINE: fajarhamka21</li>

                                                @elseif ($user->campus=='MLG')
                                                <li>Novelia - 082301020777 - LINE: agatha.s_</li>

                                                @else
                                                <li>Camelia - 085714990994 -  LINE: claudiacameliaa</li>
                                                <li>Natasya Febryani - 081315304769 - LINE: natasyafebryani</li>
                                                <li>Carissa Christie - 082386151732 - LINE: carissa107</li>
                                                @endif
                                            </ul>
                            </div>
                        </div>
                        <form id="form-payment" class="card submission bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly" action="{{ route('submit_pay') }}" enctype="multipart/form-data" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="text-2xl font-bold text-cDarkBlue">Payment Submission</div>

                            <div class="text-cDarkBlue font-medium text-xl">Payment Proof</div>
                            <div class="relative -mt-1 w-full">
                                <div class="bg-cLightGray font-sans rounded p-2 flex flex-row justify-between overflow-hidden">
                                    <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your Payment Proof Here </span>
                                </div>
                                <img class="absolute top-2 right-3" src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="BNCC Launching">
                                <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="payment_pic" id="payment-upload" accept="image/png, image/jpeg, image/jpg">
                                <div class="file-constraint">Your payment receipt must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                            </div>
                            <div class="btn payment-btn w-full mt-3 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-2 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Submit</div>
                        </form>
                    </div>
                </div>
                @endif


                <!-- PAYMENT UPLOADED -->
                @if ($user->payment_pic!=NULL && $user->status==NULL && $user->is_reregistered==0)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class=" main-container absolute md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/verify-payment-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold mt-10">Your Payment is Being Verified</div>
                        <div class="font-medium mt-3">Thank you for registering, your payment receipt is now being validated by our crew. Your payment will be validated no later than 1 x 24 hours.</div>
                    </div>
                </div>
                @endif



                <!-- PAYMENT VERIFIED -->

                @if ($user->payment_pic!=NULL && $user->status==1 && $user->is_reregistered==0)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute main-container md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/verify-payment-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold mt-10">Payment Success</div>
                        <div class="font-medium mt-3">Thank you for registering, your payment has been verified successfully! Now, you can continue to the Re-Registration step.</div>
                    </div>
                </div>
                @endif


                <!-- PAYMENT REJECTED -->
                @if ($user->payment_pic!=NULL && $user->status==2 && $user->is_reregistered==0)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute main-container md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/rejected-payment-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold xs:mt-10 mt-5">Oops! There’s an Error in Verifying Your Payment</div>
                        <div class="font-medium mt-3">Ask for our contact person’s help below to assist you with your payment verification.</div>
                        <div class="reject-contact-cont w-100 flex flex-row justify-around mt-5 w-97 bg-cWhite rounded-xl xs:p-5 p-3">
                            @if ($user->campus=='ALS')
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Fraderic</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">089649499832</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">fazbear</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Jeta</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">087871447555</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">jetaaa1</div>
                                </div>
                            </div>
                            @elseif ($user->campus=='BDG')
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Fajar</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082114365818</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">fajarhamka21</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Rhenal</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">0818235657</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Add by phone</div>
                                </div>
                            </div>
                            @elseif ($user->campus=='MLG')
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Novelia</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082301020777</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">agatha.s_</div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Camelia</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">085714990994</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">claudiacameliaa</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Natasya Febryani</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">081315304769</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">natasyafebryani</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Carissa Christie</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082386151732</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">carissa107</div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif



                <!-- USER REGISTERED -->
                @if ($user->is_reregistered==1)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute main-container md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/registered-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold mt-10">You Have Been Registered Successfully</div>
                        <div class="font-medium mt-3">Thank you for registering! You are now registered as a member of BNCC.</div>
                    </div>
                </div>
                @endif

            </div>

            <div class="section reregistration-sec  hidden bg-cLightGray  h-full">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Re-Registration</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <!-- SEBELUM MEREKA REGIS -->
                @if ($user->is_reregistered==0)
                <form id="form-reregistration" class="main-container bg-cWhite rounded-xl px-8 py-5 f m-8 xl:w-8/12" action="{{ route('reregister') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                        <div class="xl:w-10/12 sm:w-8/12 w-full">
                            <div class="text-2xl font-bold text-cDarkBlue my-3">Re-Registration Form</div>

                            <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">BNCC ID</div>
                                <input class="w-full bg-cLightGray font-sans rounded p-2 text-lg my-1 border-0" type="text" name="bnccid" id="bnccid" placeholder="e.g. BNCC21xxx">
                                <span class="msg-error"></span>
                            </div>
                            <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">linkedIn URL</div>
                                <input class="w-full bg-cLightGray font-sans rounded p-2 text-lg my-1 border-0" type="text" name="linkedinUrl" id="linkedinUrl" placeholder="e.g. https://www.linkedin.com/in/abc/">
                                <span class="msg-error"></span>
                            </div>
                            <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">GitHub URL</div>
                                <input class="w-full bg-cLightGray font-sans rounded p-2 text-lh my-1 border-0" type="text" name="githubUrl" id="githubUrl" placeholder="e.g. https://github.com/jungkook/">
                                <span class="msg-error"></span>
                            </div>
                            <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LnT Course</div>
                                <div class="custom-select lnt-select w-full">
                                    <select id="lnt-select" name="lnt_course">
                                        <option class="off" value="0">Select Your Course</option>

                                        @if ($user->campus=='ALS')
                                        <option value="Front-End Development">Front-End Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="C Programming">C Programming</option>
                                        <option value="Java Programming">Java Programming</option>
                                        @endif

                                        @if ($user->campus=='MLG')
                                        <option value="Back-End Development">Back-End Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Java Programming">Java Programming</option>
                                        <option value="Mobile Application Development">Mobile Application Development</option>
                                        <option value="Game Development">Game Development</option>
                                        @endif

                                        @if ($user->campus=='BDG')
                                        <option value="None">None</option>
                                        <option value="Back-End Development">Back-End Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Java Programming">Java Programming</option>
                                        <option value="Mobile Application Development">Mobile Application Development</option>
                                        <option value="Game Development">Game Development</option>
                                        @endif

                                        @if ($user->campus=='KMG' || $user->campus=='OL' || $user->campus=='SNY' || $user->campus=='BKS' || $user->campus=='ASO')
                                        <option value="Back-End Development">Back-End Development</option>
                                        <option value="Front-End Development">Front-End Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Java Programming">Java Programming</option>
                                        <option value="Mobile Application Development">Mobile Application Development</option>
                                        @endif

                                    </select>
                                </div>
                                <span class="msg-error"></span>
                            </div>
                            {{-- <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">KTP or Binusian Card</div>
                                <div class="relative">
                                    <div class="w-full bg-cLightGray font-sans rounded p-2 my-1 border-0 flex flex-row justify-between overflow-hidden">
                                        <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your KTP or Binusan Card Here</span>
                                    </div>
                                    <img class="absolute top-2 right-3 " src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="BNCC Launching">
                                    <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="ktp-upload" id="ktp-upload" accept="image/png, image/jpeg, image/jpg" >
                                    <div class="file-constraint">Your KTP or Binusian Card must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">FYP Card</div>
                                <div class="relative">
                                    <div class="w-full bg-cLightGray font-sans rounded p-2 my-1 border-0 flex flex-row justify-between overflow-hidden">
                                        <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your FYP Card Here</span>
                                    </div>
                                    <img class="absolute top-2 right-3" src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="BNCC Launching">
                                    <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="fyp-upload" id="fyp-upload" accept="image/png, image/jpeg, image/jpg" >
                                    <div class="file-constraint">Your FYP Card must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                                </div>
                            </div> --}}

                            <button class="btn reregistration-btn w-full mt-16 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-2 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Submit</button>
                        </div>
                    </form>
                @endif


                <!-- SETELAH MEREKA REGIS -->
                @if ($user->is_reregistered==1)
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute main-container md:w-8/12 w-11/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="xs:w-48 w-28" src="{{ asset('Asset/Image/userDashboard/registered-icon.svg')}}" alt="BNCC Launching">
                        <div class="text-2xl font-extrabold mt-10">You Have Been Registered Successfully</div>
                        <div class="font-medium mt-3">Thank you for registering! You are now registered as a member of BNCC.</div>
                    </div>
                </div>
                @endif

            </div>

            <div class="section profile-sec hidden bg-cLightGray  h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Profile</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>
                <div class="grid-cont-profile main-container">
                    <div class="card1 personal bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly ">
                        <div class="text-2xl font-bold text-cDarkBlue">Personal Info</div>
                        <div>
                            <div class="mt-3">Name</div>
                            <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->fullName)}}
                            </div>
                        </div>
                        <div><div class="mt-3">Gender</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->gender)}}
                        </div></div>
                        <div> <div class="mt-3">Date of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{$birthDate}}
                        </div></div>
                        <div><div class="mt-3">Place of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->placeBirth)}}
                        </div></div>
                        <div><div class="mt-3">Domicile City</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->domicile)}}
                        </div></div>
                        <div> <div class="mt-3">Full Address</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->address)}}
                        </div></div>
                        <div><div class="mt-3">LINE ID</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->line_id)}}
                        </div></div>
                        <div><div class="mt-3">WhatsApp Number</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->whatsapp)}}
                        </div></div>
                        <div> <div class="mt-3">Binusian Email</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->email)}}
                        </div></div>

                    </div>

                    <div class="card student bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">Student Credentials</div>
                        <div><div class="mt-3">Name</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->fullName)}}
                        </div></div>
                        <div> <div class="mt-3">Gender</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->gender)}}
                        </div></div>
                        <div><div class="mt-3">Date of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{$birthDate}}
                        </div></div>
                        <div><div class="mt-3">Place of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">
                            {{($user->placeBirth)}}
                        </div></div>
                    </div>

                    <div class="card bncc bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">BNCC Registration</div>
                        <div>
                            <div class="mt-5">BNCC Launching Schedule</div>
                            @foreach ($schedules as $schedule)
                            <div class="flex flex-row items-center text-lg font-semibold">
                                {{$schedule->formatting_date()}} <br>{{$schedule->start_date()}} - {{$schedule->end_date()}} (GMT +07.00)
                            </div>
                            @endforeach
                        </div>
                        <div>
                            <div class="mt-5">LnT Course</div>
                            @if ($user->campus=="KMG"||
                                 $user->campus=="OL"||
                                 $user->campus=="ASO"||
                                 $user->campus=="BKS"||
                                 $user->campus=="SNY")
                                <div class="flex flex-row items-center text-lg font-semibold">
                                    {{($user->lnt_course)}}
                                </div>
                            @else
                                @foreach ($schedules as $schedule)
                                    <div class="flex flex-row items-center text-lg font-semibold">
                                        {{($schedule->lnt_course)}}
                                    </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="card contact bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly ">
                        <div class="text-2xl font-bold text-cDarkBlue">Contact Person</div>
                        <div class="text-md font-medium">Got a question in mind? Reach out our contact person!</div>
                        <div class="w-full flex lg:flex-row flex-col lg:justify-around mt-2">
                            @if ($user->campus=='ALS')
                            <div class="flex flex-col lg:items-center">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Nikita</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">087886316523</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Nikitafelicia</div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-center mt-3 lg:mt-0">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Jeta</div>
                                <div>
                                    <div class="flex flex-row items-center font-base"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">087871447555</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Jetaaa1</div>
                                </div>
                            </div>
                            @elseif ($user->campus=='BDG')
                            <div class="flex flex-col lg:items-center">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Rhenal</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">0818235657</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">Add by phone</div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-center mt-3 lg:mt-0">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Fajar</div>
                                <div>
                                    <div class="flex flex-row items-center font-base"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082114365818</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">fajarhamka21</div>
                                </div>
                            </div>
                            @elseif ($user->campus=='MLG')
                            <div class="flex flex-col lg:items-center">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Novelia</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">082301020777</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">agatha.s_</div>
                                </div>
                            </div>
                            @else
                            <div class="flex flex-col lg:items-center">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Astrid</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">081287422520</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">astriddwrn</div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-center mt-3 lg:mt-0">
                                <img class="lg:block hidden" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="BNCC Launching">
                                <div class="lg:text-center font-bold my-2 font-lg">Samuel</div>
                                <div>
                                    <div class="flex flex-row items-center font-base"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="BNCC Launching">081251442125</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="BNCC Launching">ssam223</div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            const json1 = JSON.parse($("meta[name=user]").attr("content"));
            const json2 = JSON.parse($("meta[name=schedules]").attr("content"));

            const campus = json1.campus;
            var schedule =  json2;
    }
        });

    </script>

    <script src="{{ asset('js/userDashboard.js')}}?t=202108251712"></script>

</body>
</html>

