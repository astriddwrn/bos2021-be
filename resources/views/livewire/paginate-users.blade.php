<div>
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
    {{-- <div class="pop-up fixed verify-user w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to verify this participant’s payment?
                Participant’s name: Doni Santoso</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center verify-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Go Back</div>
                <form wire:submit="verify({{$user->id}})>
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
                <form wire:submit="reject({{$user->id}})">
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Reject</button>
                </form>
            </div>
        </div>
    </div> --}}
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
    <div class="pop-up fixed edit-user w-screen h-screen z-30 hidden">
        <div class="fixed z-10 overlay w-screen h-screen bg-cBlack opacity-50"></div>
        <div class="modal fixed z-20 xl:w-6/12 lg:w-8/12 w-11/12 h-3/6 bg-cWhite rounded-xl flex flex-col justify-center items-center sm:px-20 px-5 text-center">
            <img class="w-30" src="{{ asset('Asset/Image/userDashboard/acceptsquare.svg') }}" alt="BNCC Launching">
            <div class="mt-7 font-medium text-2xl">Are you sure you want to edit this user?
                User’s name: Doni Santoso</div>
            <div class="flex flex-row justify-evenly w-full mt-8 button-cont">
                <div class="text-center edit-back text-cLightBlue border-2 border-cLightBlue font-bold text-xl rounded-lg p-2 hover:bg-cDarkerLightBlue hover:border-cDarkerLightBlue hover:text-cWhite w-100 mb-5 bg-cWhite transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Cancel</div>
                <form action="{{-- {{route('reject')}} --}}" method="POST" >
                    @csrf
                    <button class="text-center modal-continue text-cWhite font-bold text-xl rounded-lg p-2 bg-cLightBlue w-100 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn w-44">Edit</button>
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
                    Re-Registered</div>


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
                    <span class="text-2xl">
                        @if (Auth::user()->role==3)
                            BNCC Alam Sutera Admin
                        @elseif (Auth::user()->role==4)
                            BNCC Bandung Admin
                        @elseif (Auth::user()->role==5)
                            BNCC Malang Admin
                        @endif
                    </span> {{-- Ganti per Region --}}
                    <form action=
                    "@if (Auth::user()->role==3)
                        {{route('download_ALS')}}
                    @elseif (Auth::user()->role==4)
                        {{route('download_BDG')}}
                    @elseif (Auth::user()->role==5)
                        {{route('download_MLG')}}
                    @endif">
                        <button type="submit" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
                            <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                            Download Participant Data
                        </button>
                    </form>
                </div>

                {{-- Table --}}
                <table>
                <thead>
                    <tr>
                      <th >No</th>
                      <th >Actions </th>
                      <th >Time Stamp </th>
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
                      @if (Auth::user()->role==4)
                        <th >E-Sport Community</th>
                      @endif                            {{-- NOTES BANDUNG ONLY --}}
                    </tr>
                  </thead>
                  <tbody>
                      @if (Auth::user()->role==3)
                        @foreach ($als as $user)
                        <tr>
                            <td >{{++$no}}</td>
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
                            <td > {{$user->email_verified_at}} </td>
                            <td >{{$user->fullName}}</td>
                            <td >{{$user->gender}}</td>
                            <td >{{$user->birthDate}}</td>
                            <td >{{$user->placeBirth}}</td>
                            <td >{{$user->domicile}}</td>
                            <td >{{$user->address}}</td>
                            <td >{{$user->personal_email}}</td>
                            <td >{{$user->email}}</td>
                            <td >{{$user->line_id}}</td>
                            <td >{{$user->whatsapp}}</td>
                            <td >{{$user->nim}}</td>
                            <td >{{$user->campus}}</td>
                            <td >{{$user->major}}</td>
                            <td >{{$user->batch}}</td>
                            <td >
                                @foreach ($user->schedules() as $schedule)
                                    {{$schedule->date}};
                                @endforeach
                            </td>
                            <td >{{$user->lnt_course}}</td>

                        </tr>
                        @endforeach
                      @elseif (Auth::user()->role==4)
                        @foreach ($bdg as $user)
                        <tr>
                            <td >{{++$no}}</td>
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
                            <td > {{$user->email_verified_at}} </td>
                            <td >{{$user->fullName}}</td>
                            <td >{{$user->gender}}</td>
                            <td >{{$user->birthDate}}</td>
                            <td >{{$user->placeBirth}}</td>
                            <td >{{$user->domicile}}</td>
                            <td >{{$user->address}}</td>
                            <td >{{$user->personal_email}}</td>
                            <td >{{$user->email}}</td>
                            <td >{{$user->line_id}}</td>
                            <td >{{$user->whatsapp}}</td>
                            <td >{{$user->nim}}</td>
                            <td >{{$user->campus}}</td>
                            <td >{{$user->major}}</td>
                            <td >{{$user->batch}}</td>
                            <td >
                                @foreach ($user->schedules() as $schedule)
                                    {{$schedule->date}};
                                @endforeach
                            </td>
                            <td >{{$user->lnt_course}}</td>
                            <td >{{$user->is_esport}}</td>
                        </tr>
                        @endforeach

                        @elseif (Auth::user()->role==5)
                        @foreach ($mlg as $user)
                        <tr>
                            <td >{{++$no}}</td>
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
                            <td > {{$user->email_verified_at}} </td>
                            <td >{{$user->fullName}}</td>
                            <td >{{$user->gender}}</td>
                            <td >{{$user->birthDate}}</td>
                            <td >{{$user->placeBirth}}</td>
                            <td >{{$user->domicile}}</td>
                            <td >{{$user->address}}</td>
                            <td >{{$user->personal_email}}</td>
                            <td >{{$user->email}}</td>
                            <td >{{$user->line_id}}</td>
                            <td >{{$user->whatsapp}}</td>
                            <td >{{$user->nim}}</td>
                            <td >{{$user->campus}}</td>
                            <td >{{$user->major}}</td>
                            <td >{{$user->batch}}</td>
                            <td >
                                @foreach ($user->schedules() as $schedule)
                                    {{$schedule->date}};
                                @endforeach
                            </td>
                            <td >{{$user->lnt_course}}</td>
                        </tr>
                        @endforeach
                      @endif
                  </tbody>
                </table>
                @if (Auth::user()->role==3)
                    {{$als->onEachSide(0)->links()}}
                @elseif (Auth::user()->role==4)
                    {{$bdg->onEachSide(0)->links()}}
                @elseif (Auth::user()->role==5)
                    {{$mlg->onEachSide(0)->links()}}
                @endif
            </div>

            <div class="section payment-sec bg-cLightGray h-full hidden">
                <div class="w-100 bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Payment</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>


                <!-- isi nya -->
                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">
                        @if (Auth::user()->role==3)
                            BNCC Alam Sutera Admin
                        @elseif (Auth::user()->role==4)
                            BNCC Bandung Admin
                        @elseif (Auth::user()->role==5)
                            BNCC Malang Admin
                        @endif
                    </span> {{-- Ganti per Region --}}
                </div>

                {{-- Table --}}
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
                        @if (Auth::user()->role==3)
                            @foreach ($als_pay as $user)
                            <tr>
                                <td >{{++$no}}</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <form action="{{route('download_payment', $user->id)}}">
                                            <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                            </button>
                                        </form>

                                        <form wire:submit.prevent="verify({{$user->id}})">
                                            <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                            </button>
                                        </form>

                                        <form wire:submit.prevent="reject({{$user->id}})">
                                            <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </form>


                                    </div>
                                </td>
                                <td >{{$user->updated_at}}</td>
                                <td >
                                    @if ($user->status==1)
                                        Verified
                                    @else
                                        Unverified
                                    @endif
                                </td>
                                <td >{{$user->fullName}}</td>
                                <td >{{$user->lnt_course}}</td>
                            </tr>
                            @endforeach
                        @elseif (Auth::user()->role==4)
                            @foreach ($bdg_pay as $user)
                            <tr>
                                <td >{{++$no}}</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <form action="{{route('download_payment', $user->id)}}">
                                            <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                            </button>
                                        </form>
                                        <form wire:submit="verify({{$user->id}})">
                                            <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                            </button>
                                        </form>
                                        <form wire:submit="reject({{$user->id}})">
                                            <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td >{{$user->updated_at}}</td>
                                <td >
                                    @if ($user->status==1)
                                        Verified
                                    @else
                                        Unverified
                                    @endif
                                </td>
                                <td >{{$user->fullName}}</td>
                                <td >{{$user->lnt_course}}</td>
                            </tr>
                            @endforeach
                        @elseif (Auth::user()->role==5)
                            @foreach ($mlg_pay as $user)
                            <tr>
                                <td >{{++$no}}</td>
                                <td>
                                    <div class="flex flex-row justify-around">
                                        <form action="{{route('download_payment', $user->id)}}">
                                            <button class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                                            </button>
                                        </form>
                                        <form wire:submit="verify({{$user->id}})">
                                            <button class="verifyBtn p-2 bg-cGreenacc hover:bg-cDarkerGreenacc rounded-md mr-2 cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-tick.svg')}}" alt="">
                                            </button>
                                        </form>
                                        <form wire:submit="reject({{$user->id}})">
                                            <button class="rejectBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td >{{$user->updated_at}}</td>
                                <td >
                                    @if ($user->status==1)
                                        Verified
                                    @else
                                        Unverified
                                    @endif
                                </td>
                                <td >{{$user->fullName}}</td>
                                <td >{{$user->lnt_course}}</td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                @if (Auth::user()->role==3)
                    {{$als_pay->onEachSide(0)->links()}}
                @elseif (Auth::user()->role==4)
                    {{$bdg_pay->onEachSide(0)->links()}}
                @elseif (Auth::user()->role==5)
                    {{$mlg_pay->onEachSide(0)->links()}}
                @endif
            </div>

            <div class="section reregistration-sec bg-cLightGray h-full hidden">
                <div class="w-100  bg-cWhite flex flex-row justify-between items-center py-4 px-8 text-2xl font-bold text-cDarkBlue">
                    <span>Re-Registered Members</span>
                    <img class="h-8 logo-icon" src="{{ asset('Asset/Image/auth/logo.svg')}}" alt="BNCC Launching">
                    <img class="h-8 menu-icon cursor-pointer" src="{{ asset('Asset/Image/userDashboard/menu-icon.svg')}}" alt="BNCC Launching">
                </div>

                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">BNCC Bandung Admin</span> {{-- Ganti per Region --}}
                    <button type="submit" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
                        <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                        Download Participant Data
                    </button>
                </div>

                <!-- isi nya -->
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
                            <td >Jeon Jung Kook</td>
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

        </div>

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/adminDashboard.js')}}"></script>
</div>
