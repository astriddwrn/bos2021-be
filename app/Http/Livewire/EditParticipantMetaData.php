<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class EditParticipantMetaData extends Component
{
    public $auth;
    public $region;

    public $user_id;

    protected $listeners = ['changeId' => 'changeId'];

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
        $this->user_id = $id;
        return $id;
    }

    public function render()
    {
        $this->checkRegion();

        $user = User::find($this->user_id);

        if($user == null) $user = collect([]);
        else{
            if($this->auth->role == 2) ""; // don't do anything.
            else if($this->region != $user->campus) $user = collect([]);
        }

        return view('livewire.edit-participant-meta-data', compact('user'));
    }
}
