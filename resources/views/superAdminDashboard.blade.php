<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Admin Dashboard | BNCC Launching</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
    <meta name="title" content="BNCC Launching">
    <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superadminDashboard.css') }}">
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
    <div class="pop-up fixed delete-user w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to delete this user?
                User’s name: Doni Santoso</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center delete-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Cancel</div>
                <form action="{{-- {{route('reject')}} --}}" method="POST" >
                    @csrf
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cReddeny w-100 mb-5 hover:bg-cDarkerReddeny transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Delete</button>
                </form>
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

        <div class="xl:w-4/5 w-full right-cont bg-cLightGray absolute right-0 min-h-screen w-full">

            {{-- PARTICIPANT --}}
            <div class="section participant-sec bg-cLightGray h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Participant</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <!-- isi nya -->
                @if(in_array($user->role, [1, 2]))
                    @livewire('users-table', ['auth' => $user])
                @elseif($user->role == 3)
                    @livewire('users-table', ['region'=>'ALS', 'lock_region' => true, 'auth' => $user])
                @elseif($user->role == 4)
                    @livewire('users-table', ['region'=>'BDG', 'lock_region' => true, 'auth' => $user])
                @elseif($user->role == 5)
                    @livewire('users-table', ['region'=>'MLG', 'lock_region' => true, 'auth' => $user])
                @endif

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
                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">
                        <button class="btnAllReg btnRegion btnRegion-active">
                            All Region
                        </button>
                        <button class="btnKMG btnRegion">
                            KMG
                        </button>
                        <button class="btnAS btnRegion">
                            AS
                        </button>
                        <button class="btnBDG btnRegion">
                            BDG
                        </button>
                        <button class="btnMLG btnRegion">
                            MLG
                        </button>
                    </span>
                </div>

                {{-- ALL REGION --}}
                <div class="tblAllReg tbl tbl-active">
                    <table>
                        <thead>
                        <tr>
                            <th >No</th>
                            <th >Actions</th>
                            <th >Time Stamp</th>
                            <th >Status</th>
                            <th >Full Name</th>
                            <th >LnT Course</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon ALL REGION</td>
                                <td >Java Programming</td>
                            </tr>

                            <tr>
                                <td >2.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook</td>
                                <td >Java Programming</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- REGION KEMANGGISAN --}}
                <div class="tblKMG tbl">
                    <table>
                        <thead>
                        <tr>
                            <th >No</th>
                            <th >Actions</th>
                            <th >Time Stamp</th>
                            <th >Status</th>
                            <th >Full Name</th>
                            <th >LnT Course</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook KMG</td>
                                <td >Java Programming</td>
                            </tr>

                            <tr>
                                <td >2.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook</td>
                                <td >Java Programming</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- REGION ALSUT --}}
                <div class="tblAS tbl">
                    <table>
                        <thead>
                        <tr>
                            <th >No</th>
                            <th >Actions</th>
                            <th >Time Stamp</th>
                            <th >Status</th>
                            <th >Full Name</th>
                            <th >LnT Course</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung AS</td>
                                <td >Java Programming</td>
                            </tr>

                            <tr>
                                <td >2.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook</td>
                                <td >Java Programming</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- REGION BANDUNG --}}
                <div class="tblBDG tbl">
                    <table>
                        <thead>
                        <tr>
                            <th >No</th>
                            <th >Actions</th>
                            <th >Time Stamp</th>
                            <th >Status</th>
                            <th >Full Name</th>
                            <th >LnT Course</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung BDG</td>
                                <td >Java Programming</td>
                            </tr>

                            <tr>
                                <td >2.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook</td>
                                <td >Java Programming</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- REGION MALANG --}}
                <div class="tblMLG tbl">
                    <table>
                        <thead>
                        <tr>
                            <th >No</th>
                            <th >Actions</th>
                            <th >Time Stamp</th>
                            <th >Status</th>
                            <th >Full Name</th>
                            <th >LnT Course</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung MLG</td>
                                <td >Java Programming</td>
                            </tr>

                            <tr>
                                <td >2.</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                        <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                        </button>
                                        <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Verified</td>
                                <td >Jeon Jung Kook</td>
                                <td >Java Programming</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- CLOSED SECTION PAYEMNT  --}}
            </div>

            {{-- REREGIS --}}
            <div class="section reregistration-sec bg-cLightGray h-full hidden">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Re-Registered Members</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <!-- isi nya -->
                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">
                        <button class="btnAllReg btnRegion btnRegion-active">
                            All Region
                        </button>
                        <button class="btnKMG btnRegion">
                            KMG
                        </button>
                        <button class="btnAS btnRegion">
                            AS
                        </button>
                        <button class="btnBDG btnRegion">
                            BDG
                        </button>
                        <button class="btnMLG btnRegion">
                            MLG
                        </button>
                    </span>
                    <button type="submit" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
                        <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                        Download Participant Data
                    </button>
                </div>

                {{-- ALL REGION --}}
                <div class="tblAllReg tbl tbl-active">
                    <table>
                        <thead>
                            <tr>
                              <th >No</th>
                              <th >Actions </th>
                              <th >Time Stamp </th>
                              <th >Full Name</th>
                              <th >BNCC ID</th>
                              <th >LinkedIn</th>
                              <th >GitHub</th>
                              <th >LnT Course</th>
                              <th >KTP</th>
                              <th >FYP Card</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td >1</td>
                                <td >
                                    <div class="w-24 flex flex-row justify-center">
                                        <button class="editBtnReregis p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Jeon Jung ALL REGION</td>
                                <td >BNCC20123</td>
                                <td >https://linkedin.com/..</td>
                                <td >https://github.com..</td>
                                <td >UI/UX Design</td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                              </tr>

                          </tbody>
                    </table>
                </div>

                {{-- REGION KEMANGGISAN --}}
                <div class="tblKMG tbl">
                    <table>
                        <thead>
                            <tr>
                              <th >No</th>
                              <th >Actions </th>
                              <th >Time Stamp </th>
                              <th >Full Name</th>
                              <th >BNCC ID</th>
                              <th >LinkedIn</th>
                              <th >GitHub</th>
                              <th >LnT Course</th>
                              <th >KTP</th>
                              <th >FYP Card</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td >1</td>
                                <td >
                                    <div class="w-24 flex flex-row justify-center">
                                        <button class="editBtn p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Jeon Jung KMG</td>
                                <td >BNCC20123</td>
                                <td >https://linkedin.com/..</td>
                                <td >https://github.com..</td>
                                <td >UI/UX Design</td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                              </tr>

                          </tbody>
                    </table>
                </div>

                {{-- REGION ALSUT --}}
                <div class="tblAS tbl">
                    <table>
                        <thead>
                            <tr>
                              <th >No</th>
                              <th >Actions </th>
                              <th >Time Stamp </th>
                              <th >Full Name</th>
                              <th >BNCC ID</th>
                              <th >LinkedIn</th>
                              <th >GitHub</th>
                              <th >LnT Course</th>
                              <th >KTP</th>
                              <th >FYP Card</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td >1</td>
                                <td >
                                    <div class="w-24 flex flex-row justify-center">
                                        <button class="editBtn p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Jeon Jung AS</td>
                                <td >BNCC20123</td>
                                <td >https://linkedin.com/..</td>
                                <td >https://github.com..</td>
                                <td >UI/UX Design</td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                              </tr>

                          </tbody>
                    </table>
                </div>

                {{-- REGION BANDUNG --}}
                <div class="tblBDG tbl">
                    <table>
                        <thead>
                            <tr>
                              <th >No</th>
                              <th >Actions </th>
                              <th >Time Stamp </th>
                              <th >Full Name</th>
                              <th >BNCC ID</th>
                              <th >LinkedIn</th>
                              <th >GitHub</th>
                              <th >LnT Course</th>
                              <th >KTP</th>
                              <th >FYP Card</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td >1</td>
                                <td >
                                    <div class="w-24 flex flex-row justify-center">
                                        <button class="editBtn p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Jeon Jung BDG</td>
                                <td >BNCC20123</td>
                                <td >https://linkedin.com/..</td>
                                <td >https://github.com..</td>
                                <td >UI/UX Design</td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                              </tr>

                          </tbody>
                    </table>
                </div>

                {{-- REGION MALANG --}}
                <div class="tblMLG tbl overflow-visible">
                    <table>
                        <thead>
                            <tr>
                              <th >No</th>
                              <th >Actions </th>
                              <th >Time Stamp </th>
                              <th >Full Name</th>
                              <th >BNCC ID</th>
                              <th >LinkedIn</th>
                              <th >GitHub</th>
                              <th >LnT Course</th>
                              <th >KTP</th>
                              <th >FYP Card</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td >1</td>
                                <td >
                                    <div class="w-24 flex flex-row justify-center">
                                        <button class="editBtn p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >10-04-19 12:00:17</td>
                                <td >Jeon Jung MLG</td>
                                <td >BNCC20123</td>
                                <td >https://linkedin.com/..</td>
                                <td >https://github.com..</td>
                                <td >UI/UX Design</td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                                <td >
                                    <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                                        <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                            <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                        </button>
                                    </div>
                                </td>
                              </tr>

                          </tbody>
                    </table>
                </div>

                {{-- CLOSE SECTION REREGIST --}}
            </div>

            {{-- EDIT DATA PARTICIPANT--}}
            <div class="section editdata-participantsec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Edit Data Participant</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                {{-- Isi nya --}}
                <form id="form-editdata-participant" class="main-container bg-cWhite rounded-xl px-8 py-5 f m-8 xl:w-7/12" action="{{--  --}}" enctype="multipart/form-data" method="POST">
                    <div class="xl:w-10/12 sm:w-8/12 w-full">
                        <input type="hidden" name="id" value="passed">
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Full Name</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 border-0" type="text" name="fullName" id="fullName" placeholder="e.g. John Doe" value="{{ old('fullName') }}">
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
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('birthDate') border-error @enderror border-0" type="text" id="birthDate" name="birthDate" placeholder="mm/dd/yyyy" onfocus="(this.type='date')" min="1920-01-01" max="2020-01-01" value="{{ old('birthDate') }}">
                            <span class="msg-error">
                                @error('birthDate')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Place of Birth</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1  @error('placeBirth') border-error @enderror border-0" type="text" name="placeBirth" id="placeBirth" placeholder="e.g. Jakarta" value="{{ old('placeBirth') }}">
                            <span class="msg-error">
                                @error('placeBirth')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Domicile City</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('domicile') border-error @enderror border-0" type="text" name="domicile" id="domicile" placeholder="e.g. Jakarta" value="{{ old('domicile') }}">
                            <span class="msg-error">
                                @error('domicile')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Full Address</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('address') border-error @enderror border-0" type="text" name="address" id="address" placeholder="e.g Jl. Kebon Jeruk Raya No. 27, Kebon..." value="{{ old('address') }}">
                            <span class="msg-error">
                                @error('address')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Personal Email</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('personal_email') border-error @enderror border-0" type="email" name="personal_email" id="personal_email" placeholder="example@email.com" value="{{old('personal_email')}}">
                            <span class="msg-error">
                                @error('personal_email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">LINE ID</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('line_id') border-error @enderror border-0" type="text" name="line_id" id="line_id" placeholder="e.g. line_id" value="{{ old('line_id') }}">
                            <span class="msg-error">
                                @error('line_id')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">WhatsApp Number</div>
                            <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1 @error('whatsapp') border-error @enderror border-0" type="number" name="whatsapp" id="whatsapp" placeholder="08XXXXXXXXXX" value="{{ old('whatsapp') }}">
                            <span class="msg-error">
                                @error('whatsapp')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">NIM / Student ID</div>
                            <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1  @error('nim') border-error @enderror border-0" type="number" name="nim" id="nim" placeholder="25XXXXXXXX" value="{{ old('nim') }}">
                            <span class="msg-error">
                                @error('nim')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-5">
                            <div class="text-cDarkBlue font-sans font-medium w-100 text-xl">Campus Area</div>
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
                            <div class="custom-select lnt-select w-full">
                                <select id="lnt-select" name="lnt_course">
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
                                <div class="mt-8">
                                    Note: If you can't attend the BNCC Launching schedule according to your selected course, you are still required to choose one of the available BNCC Launching schedules.
                                </div>
                            </span>
                            <!-- Bandung -->
                            <span class="schedule-bdg schedule hidden">
                                <span class="multiple">

                                </span>
                                <span class="msg-error"></span>

                                <div class="mt-5 text-cDarkBlue font-sans font-medium w-100 text-xl mb-4">Do You Want to Join Our E-Sport Community?</div>
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
                            <div {{-- onClick="window.location.reload();" --}} class="cancel-editPart text-center btn-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mt-11 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Cancel Edit</div>
                            <button class="text-center btn-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mt-11 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-5/12">Submit Edit</button>
                        </div>
                    </div>
                </form>

                {{-- CLOSED SECTION EDIT DATA PARTICIPANT--}}
            </div>

            {{-- EDIT DATA REREGISTRATION --}}
            <div class="section editdata-reregistrationsec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Edit Data Reregistration</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                {{-- Isi nya --}}
                <form id="form-editdata-reregis" class="main-container bg-cWhite rounded-xl px-8 py-5 f m-8 xl:w-7/12" action="{{--  --}}" enctype="multipart/form-data" method="POST">
                    <div>
                        <input type="hidden" name="id" value="passed">
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
                            <div class="custom-select lnt-select w-full">
                                <select id="lnt-select" name="lnt_course">
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

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/superadminDashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    @livewireScripts

</body>
</html>

