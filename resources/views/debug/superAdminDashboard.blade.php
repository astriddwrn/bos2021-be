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
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">


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
            <div class="mt-10 text-lg menu-list w-52">

                <div class="menu mt-7 flex flex-row items-center font-semibold menu-participant cursor-pointer">
                    <img class="mr-4 w-9 hidden off" src="{{ asset('Asset/Image/userDashboard/menu-payment-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 on" src="{{ asset('Asset/Image/userDashboard/menu-payment-on.svg')}}" alt="BNCC Launching">
                    Participants</div>
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-payment cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-payment-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-payment-on.svg')}}" alt="BNCC Launching">
                    Payment</div>
                <div class="menu mt-7 flex flex-row items-center font-semibold menu-reregistration cursor-pointer">
                    <img class="mr-4 w-9 off" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-off.svg')}}" alt="BNCC Launching">
                    <img class="mr-4 w-9 hidden on" src="{{ asset('Asset/Image/userDashboard/menu-reregistration-on.svg')}}" alt="BNCC Launching">
                    Re-Registration</div>


            </div>
            <div class="absolute return-list bottom-10 text-lg w-52">
                <div class="mt-5 flex flex-row items-center font-semibold text-md cursor-pointer">
                    <img class="mr-4  w-9" src="{{ asset('Asset/Image/userDashboard/menu-home-off.svg')}}" alt="BNCC Launching">
                    <a href="{{url('/')}}">Return to Home</a></div>
                <div class="mt-7 logout flex flex-row items-center font-semibold text-md text-cLightBlue cursor-pointer">
                    <img class="mr-3 px-2" src="{{ asset('Asset/Image/userDashboard/menu-logout.svg')}}" alt="BNCC Launching">Log out</div>
            </div>
        </div>

        <div class="xl:w-9/12 w-full right-cont bg-cLightGray absolute right-0 min-h-screen w-full">

            <div class="section participant-sec bg-cLightGray h-full">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Participant</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <!-- isi nya -->
                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">BNCC Bandung Admin</span>
                    <button type="submit" class="flex flex-row justify-center items-center bg-cLightBlue text-cWhite font-semibold rounded px-4 py-2">
                        <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                        Download Participant Data
                    </button>
                </div>

                {{-- Table --}}
                <table class="px-8">
                <thead>
                    <tr>
                      <th >No</th>
                      <th >Status</th>
                      <th >Name</th>
                      <th >Gender</th>
                      <th >DOB</th>
                      <th >POB</th>
                      <th >City</th>
                      <th >Adress</th>
                      <th >P. Email</th>
                      <th >B. Email</th>
                      <th >LINE ID</th>
                      <th >WA</th>
                      <th >NIM</th>
                      <th >Campus</th>
                      <th >Major</th>
                      <th >Batch</th>
                      <th >Schedule</th>
                      <th >LnT Course</th>
                      <th >E-Sport Community</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td >No</td>
                        <td >Status</td>
                        <td >Naruto yes tiga delapan</td>
                        <td >Gender</td>
                        <td >DOB</td>
                        <td >POB</td>
                        <td >City</td>
                        <td >Adress</td>
                        <td >P. Email</td>
                        <td >B. Email</td>
                        <td >LINE ID</td>
                        <td >WA</td>
                        <td >NIM</td>
                        <td >Campus</td>
                        <td >Major</td>
                        <td >Batch</td>
                        <td >Schedule</td>
                        <td >LnT Course</td>
                        <td >E-Sport Community</td>
                      </tr>

                      <tr>
                        <td >No</td>
                        <td >Status</td>
                        <td >Naruto yes tiga delapan</td>
                        <td >Gender</td>
                        <td >DOB</td>
                        <td >POB</td>
                        <td >City</td>
                        <td >Adress</td>
                        <td >P. Email</td>
                        <td >B. Email</td>
                        <td >LINE ID</td>
                        <td >WA</td>
                        <td >NIM</td>
                        <td >Campus</td>
                        <td >Major</td>
                        <td >Batch</td>
                        <td >Schedule</td>
                        <td >LnT Course</td>
                        <td >E-Sport Community</td>
                      </tr>
                  </tbody>
                </table>

            </div>

            <div class="section payment-sec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>


                <!-- isi nya -->
                <div class="w-100 flex flex-row justify-start items-center py-12 px-8 font-bold text-cDarkBlue">
                    <button id="" class="w-28 btnRegion rounded-3xl text-xl font-medium py-1 px-4 mx-2">
                        KMG
                    </button>
                    <button class="w-28 btnRegion rounded-3xl text-xl font-medium py-1 px-4 mx-2">
                        AS
                    </button>
                    <button class="w-28 btnRegion rounded-3xl text-xl font-medium py-1 px-4 mx-2">
                        BDG
                    </button>
                    <button class="w-28 btnRegion rounded-3xl text-xl font-medium py-1 px-4 mx-2">
                        MLG
                    </button>
                </div>


                {{-- Table --}}
                <table class="px-8">
                    <thead>
                        <tr>
                          <th >No</th>
                          <th >Time Stamp</th>
                          <th >Status</th>
                          <th >Full Name</th>
                          <th >LnT Course</th>
                          <th >View Payment</th>
                          <th >Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                            <td >No</td>
                            <td >Time Stamp</td>
                            <td >Status</td>
                            <td >Full Name</td>
                            <td >LnT Course</td>
                            <td >View Payment</td>
                            <td >Actions</td>
                            </tr>

                            <tr>
                            <td >No</td>
                            <td >Time Stamp</td>
                            <td >Status</td>
                            <td >Full Name</td>
                            <td >LnT Course</td>
                            <td >View Payment</td>
                            <td >Actions</td>
                            </tr>
                      </tbody>
                    </table>

            </div>

            <div class="section reregistration-sec  hidden bg-cLightGray  h-full">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Re-Registration</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>


                <!-- isi nya -->
            </div>



        </div>

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/userDashboard.js')}}"></script>

</body>
</html>

