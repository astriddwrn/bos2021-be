<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class MembersTable extends Component
{
    public $auth;
    public $region = "ALL";

    public $limit = 10;
    public $page = 1;
    public $total = 0;
    public $page_total = 0;
    public $skip = 0;

    public $search = "";

    public function checkRegion(){
        $this->auth = Auth::user();

        if(in_array($this->auth->role, [1, 2])) $this->region = $this->region;
        else if($this->auth->role == 3) $this->region = 'ALS';
        else if($this->auth->role == 4) $this->region = 'BDG';
        else if($this->auth->role == 5) $this->region = 'MLG';
        else $this->region = '';
    }

    public function render()
    {
        $this->checkRegion();

        $region = "";
        $region = $this->region;
        if($region == "ALL") $region = '%%';

        $members = Member::where('campus', 'like', $region);

        $this->total = $members->count();
        $this->page_total = ceil($this->total / $this->limit);
        if($this->page < 1 || $this->page > $this->page_total) $this->page = 1;
        $this->skip = ($this->page - 1) * $this->limit;

        return view('livewire.members-table', [
            'members' => $members->orderBy('id','asc')->limit($this->limit)
                                ->skip($this->skip)->get()
        ]);
    }
}
