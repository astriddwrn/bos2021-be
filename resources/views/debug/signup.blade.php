<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="flex flex-row font-sans">
        <div class="w-5/12 h-screen flex flex-col items-center">
            <a href="#"><img class="mt-20" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>
            <div class="w-10/12 progress-bar flex flex-row mt-11  justify-evenly">
                <div class="flex flex-col items-center w-11 text-center">
                    <span class="dot active-dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">1</span>
                    <div class="title active-title text-sm text-cDarkerGray mt-1">Personal Info</div>
                </div>
                
                <div class="flex flex-col items-center w-11 text-center relative">
                    <div class="line w-32 bg-cDarkerGray h-2 absolute"></div>
                    <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">2</span>
                    <div class="title text-sm text-cDarkerGray mt-1">Student Credentials</div>
                </div>
                <div class="flex flex-col items-center w-11 text-center relative">
                    <div class="line bg-cDarkerGray h-2 absolute"></div>
                    <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">3</span>
                    <div class="title text-sm text-cDarkerGray mt-1">BNCC Registration</div>
                </div>
                <div class="flex flex-col items-center w-11 text-center relative">
                    <div class="line bg-cDarkerGray h-2 absolute"></div>
                    <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">4</span>
                    <div class="title text-sm text-cDarkerGray  mt-1">Account Setup</div>
                </div>
                <div class="flex flex-col items-center w-11 text-center relative">
                    <div class="line bg-cDarkerGray h-2 absolute"></div>
                    <span class="dot bg-cDarkerGray rounded-full h-10 w-10 text-center align-middle inline-block leading-10 text-cWhite">5</span>
                    <div class="title text-sm text-cDarkerGray  mt-1">Join Group</div>
                </div>
            </div>

            <form class="w-8/12 relative" action="" method="post">
                <div class="personal-sec w-full section absolute left-section">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Full Name</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="text" name="fullName" id="fullName" placeholder="e.g. John Doe">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Gender</div>
                        <div class="custom-select gender-select w-full">
                            <select id="custom-select gender-select">
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
                    <div class="btn-continue text-center text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn">Continue</div>
                    </div>
                    
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href=""><span class="text-cLightBlue">Login here</span></a></div>
                
                </div>

                <div class="student-sec w-full section absolute ">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">NIM / Student ID</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="number" name="nim" id="nim" placeholder="25XXXXXXXX">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Campus Area</div>
                        <div class="custom-select campus-select w-full">
                            <select id="custom-select campus-select">
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
                            <select id="custom-select major-select">
                                <option class="off" value="0">Select your major</option>
                                <option value="ALS">Computer Science</option>
                                <option value="BDG">System Information</option>
                                <option value="KMG">dll</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">FYP Batch</div>
                        <div class="custom-select fyp-select w-full">
                            <select id="custom-select fyp-select">
                                <option class="off" value="0">Select your batch</option>
                                <option value="ALS">Computer Science</option>
                                <option value="BDG">System Information</option>
                                <option value="KMG">dll</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded p-2 hover:bg-cDarkerLightBlue hover:border-0 w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>                   
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Continue</div>                     
                    </div>
                    
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href=""><span class="text-cLightBlue">Login here</span></a></div>
                
                </div>

                <div class="bncc-sec w-full section absolute right-section">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">BNCC Launching Schedule</div>
                        <div class="custom-select bncc-select w-full">
                            <select id="custom-select bncc-select">
                                <option class="off" value="0">Select your schedule</option>
                                <option value="ALS">Alam Sutera</option>
                                <option value="BDG">Bandung</option>
                                <option value="KMG">Kemanggisan</option>
                                <option value="MLG">Malang</option>
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">LnT Course</div>
                        <div class="custom-select lnt-select w-full">
                            <select id="lnt-select">
                                <option class="off" value="0">Select your course</option>
                             
                            </select>
                        </div>
                        <span class="msg-error"></span>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded p-2 hover:bg-cDarkerLightBlue hover:border-0 w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>                   
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Continue</div>                     
                    </div>
                    
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href=""><span class="text-cLightBlue">Login here</span></a></div>
                
                </div>

                <div class="account-sec w-full section absolute right-section">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Email</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="email" id="email" placeholder="example@binus.ac.id">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="password" name="password" placeholder="Example123">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Confirm Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" name="confirm" id="confirm" placeholder="Example123">
                        <span class="msg-error"></span>
                    </div>


                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded p-2 hover:bg-cDarkerLightBlue hover:border-0 w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>                   
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Continue</div>                     
                    </div>
                
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href=""><span class="text-cLightBlue">Login here</span></a></div>
                
                </div>

                <div class="join-sec w-full section absolute right-section">
                    <div class="flex flex-col items-center w-full">
                        <div class="mt-11 text-cDarkBlue font-bold text-center text-3xl">Join Our Line Group!</div>
                        <div class="mt-5"><img src="{{asset('./Asset/Image/auth/qrCode.svg')}}" alt=""></div>
                        <div class="mt-5 text-xl">or join us <a class="text-cLightBlue font-bold underline" href="">here</a></div>
                        <div class="mt-8 text-lg text-center mb-2">Got a question? Reach our contact person!</div>
                        <div class="w-full flex flex-row justify-evenly text-lg">
                            <div class="mb-1">
                                <div class="mb-1">Astrid</div>
                                <div class="flex flex-row items-center mb-1">
                                    <img class="mr-2" src="{{asset('./Asset/Image/auth/icon-wa.svg')}}" alt="">
                                    <div>081287422520</div>
                                </div>
                                <div class="flex flex-row items-center mb-1">
                                    <img class="mr-2"  src="{{asset('./Asset/Image/auth/icon-line.svg')}}" alt="">
                                    <div>astriddwrn</div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <div class="mb-1">Samuel</div>
                                <div class="flex flex-row items-center mb-1">
                                    <img class="mr-2"  src="{{asset('./Asset/Image/auth/icon-wa.svg')}}" alt="">
                                    <div>081251442125</div>
                                </div>
                                <div class="flex flex-row items-center mb-1">
                                    <img class="mr-2"  src="{{asset('./Asset/Image/auth/icon-line.svg')}}" alt="">
                                    <div>ssam223</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="flex flex-row justify-between">
                        <div class="text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded p-2 hover:bg-cDarkerLightBlue hover:border-0 w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Back</div>                   
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Register</div>                     
                    </div>
                
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Already registered?</span><a href=""><span class="text-cLightBlue">Login here</span></a></div>
                
                </div>

            </form>
        </div>
        <div class="w-7/12 h-screen bg-bgSpace h-screen overflow-hidden fixed right-0">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="">
            <img class="rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="">
        </div>
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>