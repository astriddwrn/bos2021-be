<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="schedules" content="{{ $schedules->toJson() }}">

    <title>Admin Dashboard | BNCC Launching</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}?t=202108242145">
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superadminDashboard.css') }}?t=202108242145">

    <style>
        .simple th{
            padding: 0.5rem 1rem;
        }
    </style>

    @livewireStyles

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
    <div class="pop-up fixed verify-user w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to verify this participant’s payment?
                Participant’s name: Doni Santoso</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center verify-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Go Back</div>
                <form action="{{-- {{route('verify')}} --}}" method="POST" >
                    @csrf
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Verify</button>
                </form>
            </div>
        </div>
    </div>
    <div class="pop-up fixed reject-user w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to reject this participant’s payment?
                Participant’s name: Doni Santoso</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center reject-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Go Back</div>
                <form action="{{-- {{route('reject')}} --}}" method="POST" >
                    @csrf
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Reject</button>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="pop-up fixed delete-user w-screen h-screen z-30 hidden"> --}}
    <div class="pop-up fixed delete-participant w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center py-4">
            {{-- <img class="w-30 mt-4" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching"> --}}
            <div class="mt-5 font-medium text-2xl">Are you sure you want to delete this user?</div>
            <div class="overflow-auto w-full my-8 flex justify-center">
                <table class="simple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>NIM</th>
                            <th>Campus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="delete-name">The Name</td>
                            <td id="delete-nim">2550060914</td>
                            <td id="delete-campus">KMG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div class="flex flex-row justify-between w-full mt-5 button-cont">
                    <div class="text-center deleteParticipant-back text-cLightBlue mx-2 border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Cancel</div>
                    <button class="submitDeleteParticipant text-center modal-continue mx-2 text-cWhite font-bold text-xl rounded-lg p-2 bg-cReddeny w-100 mb-5 hover:bg-cDarkerReddeny transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Delete</button>
                </div>
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
        <div class="menu-cont menu-off xl:w-1/5 sm:w-80 w-60 h-screen flex flex-col items-center fixed xl:left-0 right-0 xl:flex z-10 bg-cWhite shadow-bsBtn">
            <div class="mt-10 text-lg menu-list w-52">

                <div class="menu mt-7 flex flex-row items-center font-semibold menu-participant cursor-pointer">
                    <img class="mr-4 w-9 hidden off" src="{{ asset('Asset/Image/userDashboard/menu-profile-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 on" src="{{ asset('Asset/Image/userDashboard/menu-profile-on.svg')}}" alt="BNCC Launching">
                    Participants</div>

                @if($user->role >= 2)
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-payment cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-payment-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-payment-on.svg')}}" alt="BNCC Launching">
                    Payment</div>
                @endif

                @if($user->role == 2)
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-reregistration cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-on.svg')}}" alt="BNCC Launching">
                    Re-Registered</div>
                @endif

            </div>
            <div class="absolute return-list bottom-10 text-lg w-52">
                <div class="mt-5 flex flex-row items-center font-semibold text-md cursor-pointer">
                    <img class="mr-4  w-9" src="{{ asset('Asset/Image/userDashboard/menu-home-off.svg')}}" alt="BNCC Launching">
                    <a href="{{url('/')}}">Return to Home</a></div>
                <div class="mt-7 logout flex flex-row items-center font-semibold text-md text-cLightBlue cursor-pointer">
                    <img class="mr-3 px-2" src="{{ asset('Asset/Image/userDashboard/menu-logout.svg')}}" alt="BNCC Launching">Log out</div>
            </div>
        </div>

        <div class="w-full xl:w-4/5 right-cont bg-cLightGray absolute right-0 min-h-screen">

            {{-- PARTICIPANT --}}
            <div class="section participant-sec bg-cLightGray h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Participant</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <!-- isi nya -->
                @livewire('users-table')

                {{-- CLOSED SECTION PARTICIPANTS --}}
            </div>

            {{-- PAYMENT --}}
            <div class="section payment-sec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>


                <!-- isi nya -->
                @livewire("payments-table")

                {{-- CLOSED SECTION PAYEMNT  --}}
            </div>

            {{-- REREGIS --}}
            <div class="section reregistration-sec bg-cLightGray h-full hidden">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Re-Registered Members</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                @livewire('members-table')

                {{-- CLOSE SECTION REREGIST --}}
            </div>

            {{-- EDIT DATA PARTICIPANT--}}
            <div class="section editdata-participantsec bg-cLightGray h-full hidden">
                @livewire('edit-participant-meta-data')

                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Edit Data Participant</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                {{-- Isi nya --}}
                <form id="form-editdata-participant" class="main-container bg-cWhite rounded-xl px-8 py-5 f m-8 xl:w-7/12" action="{{route('update.participant')}}" enctype="application/x-www-form-urlencoded" method="POST">
                    @csrf
                    <div class="xl:w-10/12 sm:w-8/12 w-full">
                        <input class="data-part" type="hidden" name="id">
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Full Name</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 my-1 border-0" type="text" name="fullName" id="fullName" placeholder="e.g. John Doe" value="">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Gender</div>
                            <div class="custom-select gender-select w-full">
                                <select id="custom-select gender-select" name="gender">
                                    <option class="off" value="0">Select your gender</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Date of Birth</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 my-1 @error('birthDate') border-error @enderror border-0" type="text" id="birthDate" name="birthDate" placeholder="mm/dd/yyyy" onfocus="(this.type='date')" min="1920-01-01" max="2020-01-01" value="{{ old('birthDate') }}">
                            <span class="msg-error">
                                @error('birthDate')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Place of Birth</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 my-1  @error('placeBirth') border-error @enderror border-0" type="text" name="placeBirth" id="placeBirth" placeholder="e.g. Jakarta" value="{{ old('placeBirth') }}">
                            <span class="msg-error">
                                @error('placeBirth')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Domicile City</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 my-1 @error('domicile') border-error @enderror border-0" type="text" name="domicile" id="domicile" placeholder="e.g. Jakarta" value="{{ old('domicile') }}">
                            <span class="msg-error">
                                @error('domicile')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Full Address</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 my-1 @error('address') border-error @enderror border-0" type="text" name="address" id="address" placeholder="e.g Jl. Kebon Jeruk Raya No. 27, Kebon..." value="{{ old('address') }}">
                            <span class="msg-error">
                                @error('address')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Binusian Email</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 my-1 @error('email') border-error @enderror border-0" type="email" name="email" id="email" placeholder="example@binus.ac.id" value="{{ old('email') }}">
                            <span class="msg-error"></span>
                            @error('email')
                            <span class="msg-error">This email has already been taken</span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Personal Email</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 my-1 @error('personal_email') border-error @enderror border-0" type="email" name="personal_email" id="personal_email" placeholder="example@email.com" value="{{old('personal_email')}}">
                            <span class="msg-error">
                                @error('personal_email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LINE ID</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 my-1 @error('line_id') border-error @enderror border-0" type="text" name="line_id" id="line_id" placeholder="e.g. line_id" value="{{ old('line_id') }}">
                            <span class="msg-error">
                                @error('line_id')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">WhatsApp Number</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 my-1 @error('whatsapp') border-error @enderror border-0" type="number" name="whatsapp" id="whatsapp" placeholder="08XXXXXXXXXX" value="{{ old('whatsapp') }}">
                            <span class="msg-error">
                                @error('whatsapp')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">NIM / Student ID</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 my-1  @error('nim') border-error @enderror border-0" type="number" name="nim" id="nim" placeholder="25XXXXXXXX" value="{{ old('nim') }}">
                            <span class="msg-error">
                                @error('nim')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Campus Area</div>
                            <div class="custom-select campus-select w-full">
                                <select id="campus-select" name="campus">
                                    <option class="off" value="0">Select your campus location</option>
                                    <option value="ALS">Alam Sutera</option>
                                    <option value="ASO">ASO</option>
                                    <option value="BDG">Bandung</option>
                                    <option value="BKS">Bekasi</option>
                                    <option value="KMG">Kemanggisan</option>
                                    <option value="MLG">Malang</option>
                                    <option value="OL">Online Learning</option>
                                    <option value="SNY">Senayan</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Major</div>
                            <div class="custom-select major-select w-full">
                                <select id="major-select" name="major">
                                    <option class="off" value="0">Select your major</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">FYP Batch</div>
                            <div class="custom-select fyp-select w-full">
                                <select id="fyp-select" name="batch">
                                    <option class="off" value="0">Select your batch</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LnT Course</div>
                            <div class="custom-select palnt-select lnt-select w-full">
                                <select id="palnt-select" name="">
                                    <option class="off" value="0">Select your course</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">BNCC Launching Schedule</div>
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
                            </span>
                            <!-- Bandung -->
                            <span class="schedule-bdg schedule hidden">
                                <span class="multiple">

                                </span>
                                <span class="msg-error"></span>

                                <div class="mt-5 text-cDarkBlue font-sans font-medium w-100 text-xl mb-4">Do You Want to Join Our Esports Community?</div>
                                <div class="flex esport-radio">
                                    <span class="radio">
                                        <input type="radio" id="radio-1" class="radio-input" value="yes"/>
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

                        <div class="flex flex-row justify-between mt-20 mb-14">
                            <div {{-- onClick="window.location.reload();" --}} class="cancel-editPart text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Cancel</div>
                            <div class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Save Changes</div>
                        </div>
                    </div>
                </form>

                {{-- CLOSED SECTION EDIT DATA PARTICIPANT--}}
            </div>

            {{-- EDIT DATA REREGISTRATION --}}
            <div class="section editdata-reregistrationsec bg-cLightGray h-full hidden">
                @livewire('edit-member-meta-data')

                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Edit Data Reregistration</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                {{-- Isi nya --}}
                <form id="form-editdata-reregis" class="main-container bg-cWhite rounded-xl px-8 py-5 f m-8 xl:w-7/12" action="{{--  --}}" enctype="multipart/form-data" method="POST">
                    <div>
                        <input id="data-reregis" type="hidden" name="id">
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
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-lh my-1 border-0" type="text" name="githubUrl" id="githubUrl" placeholder="e.g. https://www.github.com/jungkook/">
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LnT Course</div>
                            <div class="custom-select relnt-select lnt-select w-full">
                                <select id="relnt-select" name="">
                                    <option class="off" value="0">Select Your Course</option>
                                </select>
                            </div>
                            <span class="msg-error"></span>
                        </div>
                        <div class="mt-5">
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
                        </div>

                        <div class="flex flex-row justify-between">
                            <div {{-- onClick="window.location.reload();" --}} class="cancel-editReregis text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Cancel Edit</div>
                            <button class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Submit Edit</button>
                        </div>
                    </div>
                </form>

                {{-- CLOSED SECTION EDIT DATA REREGIS --}}
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/superadminDashboard.js')}}?t=202108240303"></script>

</body>
</html>

