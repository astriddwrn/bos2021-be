<div>
    <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
        <span class="text-2xl">
            @if($auth->role <= 2)
            <button class="btnAllReg btnRegion @if($region == 'ALL') btnRegion-active @endif">
                All Region
            </button>
            <button class="btnKMG btnRegion @if($region == 'KMG') btnRegion-active @endif">
                KMG
            </button>
            @endif

            @if($auth->role <= 3)
            <button class="btnAS btnRegion @if($region == 'ALS') btnRegion-active @endif">
                ALS
            </button>
            @endif

            @if($auth->role <= 2 || $auth->role == 4)
            <button class="btnBDG btnRegion @if($region == 'BDG') btnRegion-active @endif">
                BDG
            </button>
            @endif

            @if($auth->role <= 2 || $auth->role == 5)
            <button class="btnMLG btnRegion @if($region == 'MLG') btnRegion-active @endif">
                MLG
            </button>
            @endif
        </span>
    </div>

    {{-- ALL REGION --}}
    <div class="tblAllReg tbl tbl-active overflow-auto" style="height: calc(100vh - 13rem);">
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
                @foreach ($users as $user)
                <tr>
                    <td>{{($limit * ($page - 1))+ $i + 1}}</td>
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
                    <td>{{$user->updated_at}}</td>
                    <td>{{$user->status == 1 ? "Verified" : $user->status == 2 ? "Rejected" : "Unverified"}}</td>
                    <td>{{$user->fullName}}</td>
                    <td>{{$user->lnt_course}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-between my-2 px-4 content-center">
        <div>Showing <input type="number" wire:model="limit"> users from <span>{{$total}}</span> results</div>
        <div>Page <input type="number" wire:model="page" min="1" max="{{$page_total}}"> of <span>{{$page_total}}</span></div>
    </div>

</div>
