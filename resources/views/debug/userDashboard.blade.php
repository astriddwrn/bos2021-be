<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">


</head>
<body>
    <div class="pop-up fixed success-reregistration w-screen h-screen z-10">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 w-6/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="">
            <div class="mt-7 font-medium text-2xl">Registration Success!</div>
        </div>
    </div>
    <div class="pop-up fixed success-schedule w-screen h-screen z-10">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 w-6/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="">
            <div class="mt-7 font-medium text-2xl">Your Schedule has been Updated Successfully!</div>
        </div>
    </div>
    <div class="pop-up fixed success-payment w-screen h-screen z-10">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 w-6/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="">
            <div class="mt-7 font-medium text-2xl">Payment Submission Success!</div>
        </div>
    </div>
    <div class="pop-up fixed loggingout w-screen h-screen z-10">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 w-6/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/loggingout.svg') }}" alt="">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to log out?</div>
            <div class="flex flex-row justify-evenly w-full mt-8">
                <div class="text-center modal-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Go Back</div>
                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <div class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Log Out</div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-row w-screen">
        <div class="w-3/12 h-screen flex flex-col items-center fixed left-0">
            <img class="w-28 h-28 rounded-full mt-10" src="{{ asset('Asset/Image/userDashboard/profile.svg')}}" alt="">
            <div class="text-sm font-medium mt-3">Welcome Back,</div>
            <div class="text-xl font-semibold mt-1">{{(Auth::user()->fullName)}}</div>
            <div class="mt-8 text-lg menu-list">
                <div class="flex flex-row items-center font-semibold menu-schedule cursor-pointer">
                    <img class="mr-4 w-9 off hidden" src="{{ asset('Asset/Image/userDashboard/menu-schedule-off.svg')}}" alt="">
                    <img class="mr-4 w-9 on" src="{{ asset('Asset/Image/userDashboard/menu-schedule-on.svg')}}" alt="">
                    Schedule</div>
                <div class="mt-8 flex flex-row items-center font-semibold menu-payment cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-payment-off.svg')}}" alt="">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-payment-on.svg')}}" alt="">
                    Payment</div>
                <div class="mt-8 flex flex-row items-center font-semibold menu-reregistration cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-off.svg')}}" alt="">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-on.svg')}}" alt="">
                    Re-Registration</div>
                <div class="mt-8 flex flex-row items-center font-semibold menu-profile cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-profile-off.svg')}}" alt="">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-profile-on.svg')}}" alt="">Profile</div>
            </div>
            <div class="absolute bottom-10 text-lg">
                <div class="mt-5 flex flex-row items-center font-semibold text-md cursor-pointer">
                    <img class="mr-4  w-9" src="{{ asset('Asset/Image/userDashboard/menu-home-off.svg')}}" alt="">
                    <img class="mr-4  w-9 hidden " src="{{ asset('Asset/Image/userDashboard/menu-home-on.svg')}}" alt="">Return to Home</div>
                <div class="mt-8 logout flex flex-row items-center font-semibold text-md text-cLightBlue cursor-pointer">
                    <img class="mr-3 px-2" src="{{ asset('Asset/Image/userDashboard/menu-logout.svg')}}" alt="">Log out</div>
            </div>
        </div>

        <div class="w-9/12 right-cont bg-cLightGray absolute right-0 min-h-screen">
            <div class="section schedule-sec bg-cLightGray h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Schedule</span>
                    <img class="h-8" src="{{ asset('Asset/Image/userDashboard/logo.svg')}}" alt="">
                </div>

                <div class="grid-cont-schedule ">
                    <div class="join rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">Join Our Launch!</div>
                        <div class="text-md font-medium">Don’t forget to join our BNCC Launching on:</div>
                        <div class="mt-2">
                            <div class="flex flex-row items-center text-lg font-semibold"><img class="mr-3 w-9" src="{{ asset('Asset/Image/userDashboard/menu-schedule-on.svg')}}" alt="">Tuesday, August 31, 2021</div>
                            <div class="flex flex-row items-center text-lg font-semibold mt-3"><img class="mr-3 w-9" src="{{ asset('Asset/Image/userDashboard/time.svg')}}" alt="">11.20 - 13.00 (GMT +07.00)</div>
                        </div>
                        <div class="w-96 mt-5 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-1 text-center cursor-pointer hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Join Now</div>
                    </div>

                    <form id="form-schedule" class="schedule rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">Change Your Schedule</div>
                        <div class="text-md font-medium">Unable to attend your previous schedule? Feel free to book for new schedule!</div>
                        <div><div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Schedule</div>
                        <div class="custom-select schedule-select w-full">
                                <select id="schedule-select">
                                    <option class="off" value="0">Select Your Course</option>
                                    <option value="ALS">Alam Sutera</option>
                                    <option value="BDG">Bandung</option>
                                    <option value="KMG">Kemanggisan</option>
                                    <option value="MLG">Malang</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="btn schedule-btn w-96 mt-5 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-1 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn cursor-pointer">Submit</div>
                    </form>

                    <div class="contact rounded-xl bg-cWhite px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">Contact Person</div>
                        <div class="text-md font-medium">Got a question in mind? Reach out our contact person!</div>
                        <div class="w-100 flex flex-row justify-around mt-2">
                            <div class="flex flex-col items-center">
                                <img class="w-12" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="">
                                <div class="text-center font-bold my-2 font-lg">Astrid</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081287422520</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">astriddwrn</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="w-12" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="">
                                <div class="text-center font-bold my-2 font-lg">Samuel</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081251442125</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">ssam223</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="section payment-sec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8" src="{{ asset('Asset/Image/userDashboard/logo.svg')}}" alt="">
                </div>
                <!-- SEBELUM UPLOAD PAYMENT -->
                <div class="">
                    <div class="grid-cont-payment">
                        <div class="info bg-cWhite rounded-xl px-8 py-5 ">
                            <div class="text-2xl font-bold text-cDarkBlue my-3">Hi, {{(Auth::user()->fullName)}}!</div>
                            <div class="text-lg font-medium">Welcome to BNCC! Thank you for attending BNCC Launching. <br><br>Don’t forget to complete the re-registration procedure on time so that you could be a part of BNCC Family</div>
                        </div>

                        <div class="procedure bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                            <div class="text-2xl font-bold text-cDarkBlue">Payment Procedure</div>
                            <div class="">Proceed your payment via transfer to following BCA account <br>
                                            <b>5271723327 (Felisha Miranda)</b> <br>
                                            *Format detail: Full Name - NIM<br><br>

                                            Send your payment receipt to our contact person and upload it below
                                            <ul style="list-style-type: inherit;" class="pl-5">
                                                <li>Astrid - 081287422520 -  LINE: astriddwrn</li>
                                                <li>Samuel - 081251442125 - LINE: ssam223</li>
                                            </ul>
                            </div>
                        </div>
                        <form id="form-payment" class="submission bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly" action="{{ route('submit_pay') }}" enctype="multipart/form-data" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="text-2xl font-bold text-cDarkBlue">Payment Submission</div>

                            <div class="text-cDarkBlue font-medium text-xl">Payment Proof</div>
                            <div class="relative -mt-1">
                                <div class="bg-cLightGray font-sans rounded-xl py-2 px-3 text-lg flex flex-row justify-between overflow-hidden">
                                    <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your Payment Proof Here </span>
                                </div>
                                <img class="absolute top-2 right-3" src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="">
                                <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="payment_pic" id="payment-upload" accept="image/png, image/jpeg, image/jpg">
                                <div class="file-constraint">Your payment receipt must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                            </div>
                            <div class="btn payment-btn w-full mt-3 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-2 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Submit</div>
                        </form>
                    </div>
                </div>

                <!-- PAYMENT UPLOADED -->
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute hidden w-8/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="w-48" src="{{ asset('Asset/Image/userDashboard/verify-payment-icon.svg')}}" alt="">
                        <div class="text-2xl font-extrabold mt-10">Your Payment is Being Verified</div>
                        <div class="font-medium mt-3">Thank you for registering, your payment receipt is now being validated by our crew. Your payment will be validated no later than 1 x 24 hours.</div>
                    </div>
                </div>

                <!-- PAYMENT VERIFIED -->
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute hidden w-8/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="w-48" src="{{ asset('Asset/Image/userDashboard/verify-payment-icon.svg')}}" alt="">
                        <div class="text-2xl font-extrabold mt-10">Payment Success</div>
                        <div class="font-medium mt-3">Thank you for registering, your payment has been verified successfully! Now, you can continue to the Re-Registration step.</div>
                    </div>
                </div>

                <!-- PAYMENT REJECTED -->
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute w-8/12 hidden">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="w-48" src="{{ asset('Asset/Image/userDashboard/rejected-payment-icon.svg')}}" alt="">
                        <div class="text-2xl font-extrabold mt-10">Oops! There’s an Error in Verifying Your Payment</div>
                        <div class="font-medium mt-3">Ask for our contact person’s help below to assist you with your payment verification.</div>
                        <div class="w-100 flex flex-row justify-around mt-5 w-96 bg-cWhite rounded-xl p-5">
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Astrid</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081287422520</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">astriddwrn</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-center font-bold mb-2 font-lg">Samuel</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081251442125</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">ssam223</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- USER REGISTERED -->
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute hidden w-8/12">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="w-48" src="{{ asset('Asset/Image/userDashboard/registered-icon.svg')}}" alt="">
                        <div class="text-2xl font-extrabold mt-10">You Have Been Registered Successfully</div>
                        <div class="font-medium mt-3">Thank you for registering! You are now registered as a member of BNCC.</div>
                    </div>
                </div>
            </div>

            <div class="section reregistration-sec  hidden bg-cLightGray  h-full">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8" src="{{ asset('Asset/Image/userDashboard/logo.svg')}}" alt="">
                </div>

                <!-- SEBELUM MEREKA REGIS -->
                <form id="form-reregistration" class="bg-cWhite rounded-xl px-8 py-5 f m-8 w-8/12 ">
                    <div class="w-10/12">
                        <div class="text-2xl font-bold text-cDarkBlue my-3">Re-Registration Form</div>

                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">BNCC ID</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-lg my-1 border-0" type="text" name="bnnid" id="bnccid" placeholder="e.g. BNCC21xxx">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">linkedIn URL</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-lg my-1 border-0" type="text" name="linkedinUrl" id="linkedinUrl" placeholder="e.g. https://www.linkedin.com/in/abc/">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">GitHub URL</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-lh my-1 border-0" type="text" name="githubUrl" id="githubUrl" placeholder="e.g. https://www.github.com/jungkook/">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LnT Course</div>
                            <div class="custom-select lnt-select w-full">
                                <select id="lnt-select">
                                    <option class="off" value="0">Select Your Course</option>
                                    <!-- ALS -->
                                    <option value="Front-End Development">Front-End Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="C Programming">C Programming</option>
                                    <option value="Java Programming">Java Programming</option>
                                    <!-- BDG & MLG-->
                                    <option value="Back-End Development">Back-End Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="C Programming">C Programming</option>
                                    <option value="Mobile Application Development">Mobile Application Development</option>
                                    <option value="Game Development">Game Development</option>
                                    <!-- KMG -->
                                    <option value="Back-End Development">Back-End Development</option>
                                    <option value="Front-End Development">Front-End Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Java Programming">Java Programming</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">KTP or Binusian Card</div>
                            <div class="relative">
                                <div class="w-full bg-cLightGray font-sans rounded p-2 text-lh my-1 border-0 flex flex-row justify-between overflow-hidden">
                                    <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your KTP or Binusan Card Here</span>
                                </div>
                                <img class="absolute top-2 right-3 " src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="">
                                <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="ktp-upload" id="ktp-upload" accept="image/png, image/jpeg, image/jpg" >
                                <div class="file-constraint">Your KTP or Binusian Card must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">FYP Card</div>
                            <div class="relative">
                                <div class="w-full bg-cLightGray font-sans rounded p-2 text-lh my-1 border-0 flex flex-row justify-between overflow-hidden">
                                    <span style="color: rgba(32, 32, 32, 0.2);" class="file-name">Upload Your FYP Card Here</span>
                                </div>
                                <img class="absolute top-2 right-3" src="{{ asset('./Asset/Image/userDashboard/upload-payment-icon.svg')}}" alt="">
                                <input class="input-payment absolute top-0 right-3 w-10 h-8 bg-cLightGray font-sans rounded-xl p-2 my-1 opacity-0" type="file" name="fyp-upload" id="fyp-upload" accept="image/png, image/jpeg, image/jpg" >
                                <div class="file-constraint">Your FYP Card must be in .jpg, .jpeg, or .png format. <br>Max. file size is 5MB.</div>
                            </div>
                        </div>

                        <div class="btn reregistration-btn w-full mt-16 bg-cLightBlue text-cWhite text-lg font-semibold rounded-lg p-2 text-center hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Submit</div>
                    </div>
                </form>

                <!-- SETELAH MEREKA REGIS -->
                <div style="top:50%; left:50%; transform:translate(-50%, -50%);" class="absolute hidden">
                    <div class="w-full flex flex-col items-center text-center">
                        <img class="w-48" src="{{ asset('Asset/Image/userDashboard/registered-icon.svg')}}" alt="">
                        <div class="text-2xl font-extrabold mt-10">You Have Been Registered Successfully</div>
                        <div class="font-medium mt-3">Thank you for registering! You are now registered as a member of BNCC.</div>
                    </div>
                </div>
            </div>

            <div class="section profile-sec hidden bg-cLightGray  h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Profile</span>
                    <img class="h-8" src="{{ asset('Asset/Image/userDashboard/logo.svg')}}" alt="">
                </div>
                <div class="grid-cont-profile">
                    <div class="personal bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly ">
                        <div class="text-2xl font-bold text-cDarkBlue">Personal Info</div>
                        <div><div class="">Name</div>
                        <div class="flex flex-row items-center text-lg font-semibold">{{(Auth::user()->fullName)}}</div></div>
                        <div><div class="">Gender</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Male</div></div>
                        <div> <div class="">Date of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">February 29, 1945</div></div>
                        <div><div class="">Place of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Seoul</div></div>
                        <div><div class="">Domicile City</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Bekasi</div></div>
                        <div> <div class="">Full Address</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Jl. Merah Kuning Hijau B123</div></div>
                        <div><div class="">LINE ID</div>
                        <div class="flex flex-row items-center text-lg font-semibold">jungkookgans123</div></div>
                        <div><div class="">Whatsapp Number</div>
                        <div class="flex flex-row items-center text-lg font-semibold">081234567890</div></div>
                        <div> <div class="">Binusian Email</div>
                        <div class="flex flex-row items-center text-lg font-semibold">jkjkjkjk@binus.ac.id</div></div>

                    </div>

                    <div class="student bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">Student Credentials</div>
                        <div><div class="">Name</div>
                        <div class="flex flex-row items-center text-lg font-semibold">{{(Auth::user()->fullName)}}</div></div>
                        <div> <div class="">Gender</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Male</div></div>
                        <div><div class="">Date of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">February 29, 1945</div></div>
                        <div><div class="">Place of Birth</div>
                        <div class="flex flex-row items-center text-lg font-semibold">Seoul</div></div>

                    </div>

                    <div class="contact bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly ">
                        <div class="text-2xl font-bold text-cDarkBlue">Contact Person</div>
                        <div class="text-md font-medium">Got a question in mind? Reach out our contact person!</div>
                        <div class="w-full flex flex-row justify-around mt-2">
                            <div class="flex flex-col items-center">
                                <img class="" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="">
                                <div class="text-center font-bold my-2 font-lg">Astrid</div>
                                <div>
                                    <div class="flex flex-row items-center"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081287422520</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">astriddwrn</div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="" src="{{ asset('Asset/Image/userDashboard/contact-icon.svg')}}" alt="">
                                <div class="text-center font-bold my-2 font-lg">Samuel</div>
                                <div>
                                    <div class="flex flex-row items-center font-base"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-wa.svg')}}" alt="">081251442125</div>
                                    <div class="flex flex-row items-center mt-1"><img class="mr-2" src="{{ asset('Asset/Image/userDashboard/contact-line.svg')}}" alt="">ssam223</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="bncc bg-cWhite rounded-xl px-8 py-5 flex flex-col justify-evenly">
                        <div class="text-2xl font-bold text-cDarkBlue">BNCC Registration</div>
                        <div>
                            <div class="">BNCC Launching Schedule</div>
                            <div class="flex flex-row items-center text-lg font-semibold">Tuesday, August 32, 2021 <br>11.20 - 13.00 (GMT +07.00)</div>
                        </div>
                        <div>
                            <div class="">BNCC Launching Schedule</div>
                            <div class="flex flex-row items-center text-lg font-semibold">Tuesday, August 32, 2021 <br>11.20 - 13.00 (GMT +07.00)</div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/userDashboard.js')}}"></script>

</body>
</html>
