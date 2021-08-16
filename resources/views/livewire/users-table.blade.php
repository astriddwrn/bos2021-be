            <div>
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
                        <button wire:click="$set('region', 'ASO')" class="btnAllReg btnRegion @if($region == 'ALL') btnRegion-active @endif">
                            ASO
                        </button>
                        <button wire:click="$set('region', 'BKS')" class="btnKMG btnRegion @if($region == 'KMG') btnRegion-active @endif">
                            BKS
                        </button>
                        <button wire:click="$set('region', 'OL')" class="btnKMG btnRegion @if($region == 'KMG') btnRegion-active @endif">
                            OL
                        </button>
                        <button wire:click="$set('region', 'SNY')" class="btnKMG btnRegion @if($region == 'KMG') btnRegion-active @endif">
                            SNY
                        </button>
                        @endif
                    </span>

                    <a href="{{route('download_users',['region'=>$region])}}" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
                        <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                        Download Participant Data
                    </a>
                </div>

                <div class="flex flex-row-reverse mb-4">
                    <div class="mr-4"><input type="text" wire:model="search" placeholder="Search something..."></div>
                </div>

                {{-- ALL REGION --}}
                <div class="tblAllReg tbl tbl-active overflow-auto" style="height: calc(100vh - 13rem);">
                    <table class="overflow-visible">
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
                            @if($region == "BDG")<th>E-Sport Community</th>@endif {{-- For Bandung --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $i => $user)
                            <tr>
                                <td>
                                    {{($limit * ($page - 1))+ $i + 1}}{{-- <br />
                                    {{$user['id']--}}
                                </td>
                                <td>
                                    @if($auth->role >= 2)
                                    <div class="w-24 flex flex-row justify-center">
                                        <button data-id="{{$user['id']}}" class="editBtnParticipant p-2 bg-cLntBlue hover:bg-cDarkerLightBlue rounded-md mr-2 cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-edit.svg')}}" alt="">
                                        </button>
                                        {{-- <button data-id="{{$user['id']}}" class="deleteBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200"> --}}
                                        <button data-id="{{$user['id']}}" class="deleteParticipantBtn p-2 bg-cReddeny hover:bg-cDarkerReddeny rounded-md cursor-pointer duration-200">
                                            <img class="w-8" src="{{ asset('Asset/Image/userDashboard/menu-x.svg')}}" alt="">
                                        </button>
                                    </div>
                                    @endif
                                </td>
                                @php
                                    $eva = $user['email_verified_at'] ?? '';
                                    $eva = explode("\n", $eva);
                                    $eva = join("<br />", $eva);
                                @endphp
                                <td>{!!$eva!!}</td>
                                <td data-id="{{$user['id']}}" data-type="fullname">{{$user['fullName'] ?? ''}}</td>
                                <td>{{$user['gender'] ?? ''}}</td>
                                <td>{{$user['birthDate'] ?? ''}}</td>
                                <td>{{$user['placeBirth'] ?? ''}}</td>
                                <td>{{$user['domicile'] ?? ''}}</td>
                                <td>{{$user['address'] ?? ''}}</td>
                                <td>{{$user['personal_email'] ?? ''}}</td>
                                <td>{{$user['email'] ?? ''}}</td>
                                <td>{{$user['line_id'] ?? ''}}</td>
                                <td>{{$user['whatsapp'] ?? ''}}</td>
                                <td data-id="{{$user['id']}}" data-type="nim">{{$user['nim'] ?? ''}}</td>
                                <td data-id="{{$user['id']}}" data-type="campus">{{$user['campus'] ?? ''}}</td>
                                <td>{{$user['major'] ?? ''}}</td>
                                <td>{{$user['batch'] ?? ''}}</td>
                                <td>
                                    @foreach ($user['schedule'] as $schedule)
                                        {{ $schedule }}<br />
                                    @endforeach
                                </td>
                                <td>{{$user['lnt_course'] ?? ''}}</td>
                                @if($region == "BDG")<td>{{$user['is_esport'] ? "Yes" : "No"}}</td>@endif
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
