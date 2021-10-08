<div>
    <!-- isi nya -->
    <div class="w-100 flex flex-row justify-between items-center py-4 px-8 font-bold text-cDarkBlue">
        <span class="text-2xl">
            @if($auth->role <= 2)
            <button wire:click="$set('region', 'ALL')" class="btnAllReg btnRegion @if($region == 'ALL') btnRegion-active @endif">
                All Region
            </button>
            <button wire:click="$set('region', 'KMG')" class="btnKMG btnRegion @if($region == 'KMG') btnRegion-active @endif">
                KMG
            </button>
            @endif

            @if($auth->role <= 2 || $auth->role == 3)
            <button wire:click="$set('region', 'ALS')" class="btnAS btnRegion @if($region == 'ALS') btnRegion-active @endif">
                ALS
            </button>
            @endif

            @if($auth->role <= 2 || $auth->role == 4)
            <button wire:click="$set('region', 'BDG')" class="btnBDG btnRegion @if($region == 'BDG') btnRegion-active @endif">
                BDG
            </button>
            @endif

            @if($auth->role <= 2 || $auth->role == 5)
            <button wire:click="$set('region', 'MLG')" class="btnMLG btnRegion @if($region == 'MLG') btnRegion-active @endif">
                MLG
            </button>
            @endif

            @if($auth->role <= 2)
            <button wire:click="$set('region', 'ASO')" class="btnASO btnRegion @if($region == 'ASO') btnRegion-active @endif">
                ASO
            </button>
            <button wire:click="$set('region', 'BKS')" class="btnBKS btnRegion @if($region == 'BKS') btnRegion-active @endif">
                BKS
            </button>
            <button wire:click="$set('region', 'OL')"  class="btnOL btnRegion @if($region == 'OL') btnRegion-active @endif">
                OL
            </button>
            <button wire:click="$set('region', 'SNY')" class="btnSNY btnRegion @if($region == 'SNY') btnRegion-active @endif">
                SNY
            </button>
            @endif
        </span>
        <button type="submit" wire:click="downloadMembers" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
            <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
            Download Participant Data
        </button>
    </div>

    <div class="flex flex-row-reverse mb-4">
        <div class="mr-4"><input type="text" wire:model="search" placeholder="Search something..."></div>
    </div>

    {{-- ALL REGION --}}
    <div class="tblAllReg tbl tbl-active overflow-auto" style="height: calc(100vh - 13rem);">
        <table class="overflow-visible">
            <thead class="sticky top-0">
                <tr>
                    <th>No</th>
                    <th>Actions </th>
                    <th>Time Stamp </th>
                    <th>Full Name</th>
                    <th>NIM</th>
                    <th>Campus</th>
                    <th>BNCC ID</th>
                    <th>Email</th>
                    <th>LinkedIn</th>
                    <th>GitHub</th>
                    <th>LnT Course</th>
                    {{-- <th>KTP</th>
                    <th>FYP Card</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $i => $member)
                <tr>
                    <td>{{($limit * ($page - 1))+ $i + 1}}</td>
                    <td>
                        <div class="w-24 flex flex-row justify-center">
                            <button data-id="{{ $member->id }}" class="editBtnReregis p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                            </button>
                            {{-- <button class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                            </button> --}}
                        </div>
                    </td>
                    <td>Not Supported</td>
                    <td>{{ $member->fullName }}</td>
                    <td>{{ $member->nim }}</td>
                    <td>{{ $member->campus }}</td>
                    <td>{{ $member->bnccid }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->linkedinUrl }}</td>
                    <td>{{ $member->githubUrl }}</td>
                    <td>{{ $member->lnt_course }}</td>
                    {{-- <td>
                        <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                            <a href="{{ asset('ktp/' . $member['ktp-upload']) }}" target="_blank" class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="flex flex-row justify-center items-center bg-cLnTBlue">
                            <a href="{{ asset('fyp/' . $member['fyp-upload']) }}" target="_blank" class="p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md cursor-pointer duration-200">
                                <img class="w-6" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                            </a>
                        </div>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-between my-2 px-4 content-center">
        <div>Showing <input type="number" wire:model="limit"> users from <span>{{$total}}</span> results</div>
        <div>Page <input type="number" wire:model="page" min="1" max="{{$page_total}}"> of <span>{{$page_total}}</span>
        </div>
    </div>

</div>
