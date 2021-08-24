<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class EditMemberMetaData extends Component
{
    public $auth;
    public $region;

    public $member_id;

    protected $listeners = ['changeMemberId' => 'changeId'];

    public function checkRegion(){
        $this->auth = Auth::user();

        if($this->auth->role == 1) $this->region = '';
        else if($this->auth->role == 2) $this->region = $this->region;
        else if($this->auth->role == 3) $this->region = 'ALS';
        else if($this->auth->role == 4) $this->region = 'BDG';
        else if($this->auth->role == 5) $this->region = 'MLG';
        else $this->region = '';
    }

    public function changeId($id){
        $this->member_id = $id;
        return $id;
    }

    public function render()
    {
        $this->checkRegion();

        $member = Member::find($this->member_id);

        if($member == null) $member = collect([]);
        else{
            if($this->auth->role == 2) ""; // don't do anything.
            else if($this->region != $member->campus) $member = collect([]);
        }

        return view('livewire.edit-member-meta-data', compact('member'));
    }
}
