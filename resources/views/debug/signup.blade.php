<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="schedules" content="{{ $schedules->toJson() }}">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

    <div class="pop-up fixed success w-screen h-screen z-10">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 w-6/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center px-20 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/auth/success-icon.svg') }}" alt="">
            <div class="mt-7 font-medium text-2xl">Registration Success!</div>
        </div>
    </div>

    <div class="flex flex-row font-sans">
        <div class="w-5/12 h-screen flex flex-col items-center">
            <form class="w-full relative" action="{{ route('debug.view', 'sample_show') }}" method="POST">
                @csrf
                <div class="flex flex-col items-center w-full">
                    <a href="#"><img class="mt-20" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>
                    <div class="w-full px-5 progress-bar flex flex-row mt-11  justify-between">
                        <div class="flex flex-col items-center w-11 text-center">
                            <span class="dot active-dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">1</span>
                            <div class="title active-title text-xs text-cDarkerGray mt-1">Personal Info</div>
                        </div>

                        <div class="flex flex-col items-center w-11 text-center relative">
                            <div class="line w-32 bg-cDarkerGray h-2 absolute"></div>
                            <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">2</span>
                            <div class="title text-xs text-cDarkerGray mt-1">Student Credentials</div>
                        </div>
                        <div class="flex flex-col items-center w-11 text-center relative">
                            <div class="line bg-cDarkerGray h-2 absolute"></div>
                            <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">3</span>
                            <div class="title text-xs text-cDarkerGray mt-1">BNCC Registration</div>
                        </div>
                        <div class="flex flex-col items-center w-11 text-center relative">
                            <div class="line bg-cDarkerGray h-2 absolute"></div>
                            <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">4</span>
                            <div class="title text-xs text-cDarkerGray  mt-1">Account Setup</div>
                        </div>
                    </div>
                </div>


                <div class="personal-sec w-full section absolute  px-24 ">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Full Name</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="fullName" id="fullName" placeholder="e.g. John Doe">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Gender</div>
                        <div class="custom-select gender-select w-full">
                            <select id="custom-select gender-select" name="gender">
                                <option class="off" value="0">Select your gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Date of Birth</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" id="birthDate" name="birthDate" placeholder="dd/mm/yyyy" onfocus="(this.type='date')" min="1920-01-01" max="2020-01-01">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Place of Birth</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="placeBirth" id="placeBirth" placeholder="e.g. Jakarta">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Domicile City</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="domicile" id="domicile" placeholder="e.g. Jakarta">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Full Address</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="address" id="address" placeholder="e.g. DKI Jakarta, Jakarta Barat, Kebon...">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Line ID</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="line_id" id="line_id" placeholder="e.g. line_id">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Whatsapp Number</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="number" name="whatsapp" id="whatsapp" placeholder="08XXXXXXXXXX">
                        <span class="msg-error"></span>
                    </div>

                    <div>
                    <div class="btn-continue text-center text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Continue</div>
                    </div>

                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href="{{url('/login')}}"><span class="text-cLightBlue">Login here</span></a></div>

                </div>

                <div class="student-sec w-full section absolute right-section  px-24">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">NIM / Student ID</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="number" name="nim" id="nim" placeholder="25XXXXXXXX">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Campus Area</div>
                        <div class="custom-select campus-select w-full">
                            <select id="custom-select campus-select" name="campus">
                                <option class="off" value="0">Select your campus location</option>
                                <option value="ALS">Alam Sutera</option>
                                <option value="BDG">Bandung</option>
                                <option value="KMG">Kemanggisan</option>
                                <option value="MLG">Malang</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Major</div>
                        <div class="custom-select major-select w-full">
                            <select id="major-select" name="major">
                                <option class="off" value="0">Select your major</option>

                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">FYP Batch</div>
                        <div class="custom-select fyp-select w-full">
                            <select id="fyp-select" name="batch">
                                <option class="off" value="0">Select your batch</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Continue</div>
                    </div>

                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href="{{url('/login')}}"><span class="text-cLightBlue">Login here</span></a></div>

                </div>

                <div class="bncc-sec w-full section absolute right-section px-24">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">LnT Course</div>
                        <div class="custom-select lnt-select w-full">
                            <select id="lnt-select" name="lnt_course">
                                <option class="off" value="0">Select your course</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">BNCC Launching Schedule</div>
                        <!-- Kemanggisan -->
                        <span class="schedule-kmg hidden schedule">
                            <div class="custom-select bncc-select-kmg w-full">
                                <select id="bncc-select-kmg">
                                    <option class="off" value="0">Select your schedule</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </span>
                        <!-- alsut -->
                        <span class="schedule-als hidden schedule">
                            <div class="custom-select bncc-select-als w-full">
                                <select id="bncc-select-als">
                                    <option class="off" value="0">Select your schedule</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                            <div class="mt-8">
                                Note: If you can't attend the BNCC Launching schedule according to your selected course, you are still required to choose one of the available BNCC Launching schedules.
                            </div>
                        </span>
                        <!-- Bandung -->
                        <span class="schedule-bdg schedule hidden">
                            <span class="multiple">

                            </span>
                            <span class="msg-error"></span>

                            <div class="mt-11 text-cDarkBlue font-sans font-medium w-100 text-2xl mb-4">Do You Want to Join Our E-Sport Community?</div>
                            <div class="flex">
                                <span class="radio">
                                    <input type="radio" id="radio-1" class="radio-input" value="yes" checked/>
                                    <label for="radio-1"></label>
                                    <span class="text-xl ml-3">Yes</span>
                                </span>
                                <span class="radio ml-5">
                                    <input type="radio" id="radio-2" class="radio-input" value="no"/>
                                    <label for="radio-2"></label>
                                    <span class="text-xl ml-3">No</span>
                                </span>
                            </div>

                        </span>
                        <!-- malang -->
                        <span class="schedule-mlg hidden schedule">
                            <span class="multiple">
                              
                            </span>
                            <span class="msg-error"></span>
                        </span>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Continue</div>
                    </div>

                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href="{{url('/login')}}"><span class="text-cLightBlue">Login here</span></a></div>

                </div>

                <div class="account-sec w-full section absolute right-section  px-24">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Binusian Email</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="email" id="email" placeholder="example@binus.ac.id">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11 relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="password" name="password" placeholder="Example123">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11 relative">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Confirm Password</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" name="password_confirmation" id="confirm" placeholder="Example123">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-open" src="{{asset('./Asset/Image/auth/eye-open.svg')}}" alt="">
                        <img class="absolute x-30 top-12 mt-1 right-3 eye-close hidden" src="{{asset('./Asset/Image/auth/eye-close.svg')}}" alt="">
                        <span class="msg-error"></span>
                    </div>
                    <label class="mt-11 main">I certify that the information I have provided is true and accurate
                        <input type="checkbox" id="checkbox">
                        <span class="mark"></span>
                    </label>
                    <span class="msg-error"></span>



                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Register</div>
                    </div>

                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href="{{url('/login')}}"><span class="text-cLightBlue">Login here</span></a></div>

                </div>

            </form>
        </div>
        <div class="w-7/12 h-screen bg-bgSpace h-screen overflow-hidden fixed right-0">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="">
            <img class="rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="">
        </div>
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            const json = JSON.parse($("meta[name=schedules]").attr("content"));
            var outputKMG =  json.filter(schedule => schedule.campus == "kmg");
            var outputALS =  json.filter(schedule => schedule.campus == "als");
            var outputMLG =  json.filter(schedule => schedule.campus == "mlg");
            var outputBDG =  json.filter(schedule => schedule.campus == "bdg");
            // console.log(outputKMG);
            for (const [key, val] of Object.entries(outputKMG)) {
                $('#bncc-select-kmg').append(new Option(`${val.text}`, `${val.text}`));
            }
            for (const [key, val] of Object.entries(outputALS)) {
                $('#bncc-select-als').append(new Option(`${val.text}`, `${val.text}`));
            }
            for (const [key, val] of Object.entries(outputMLG)) {
                $('.schedule-mlg .multiple').append('<label class="my-2 main">'+ `${val.text}` + '<input type="checkbox" name="schedule[]" value="'+ `${val.text}` + '"> <span class="mark"></span> </label>');
            }
            for (const [key, val] of Object.entries(outputBDG)) {
                $('.schedule-bdg .multiple').append('<label class="my-2 main">'+ `${val.text}` + '<input type="checkbox" name="schedule[]" value="'+ `${val.text}` + '"> <span class="mark"></span> </label>');
            }
        })
    </script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>
