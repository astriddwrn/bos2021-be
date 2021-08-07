                <div class="w-100 flex flex-row justify-between items-center py-12 px-8 font-bold text-cDarkBlue">
                    <span class="text-2xl">
                        <button wire:click="$set('region', 'ALL')" class="btnAllReg btnRegion btnRegion-active">
                            All Region
                        </button>
                        <button wire:click="$set('region', 'KMG')" class="btnKMG btnRegion">
                            KMG
                        </button>
                        <button wire:click="changeRegion('ALS')" class="btnAS btnRegion">
                            ALS
                        </button>
                        <button wire:click="$set('region', 'BDG')" class="btnBDG btnRegion">
                            BDG
                        </button>
                        <button wire:click="changeRegion('MLG')" class="btnMLG btnRegion">
                            MLG
                        </button>
                    </span>
                    <button type="submit" class="flex flex-row justify-center items-center bg-cLightBlue hover:bg-cDarkerLightBlue text-cWhite font-semibold rounded px-4 py-2">
                        <img class="w-4 mr-2" src="{{ asset('Asset/Image/userDashboard/menu-download.svg')}}" alt="">
                        Download Participant Data
                    </button>
                </div>

                {{ $region }}

@livewire('users-table')

                <div>
                    {{-- {{$users->onEachSide(0)->links()}} --}}
                    {{-- <div>Showing <span>10</span> users from <span>200</span> results</div>
                    <div>Page <span>10</span> of <span>20</span></div> --}}
                </div>
