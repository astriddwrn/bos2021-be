<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User2;

class UsersTable extends Component
{
    public $auth;

    public $lock_region = false;
    public $region = "ALL";
    // public $_region = '%%';

    public $limit = 10;
    public $page = 1;
    public $total = 0;
    public $page_total = 0;
    public $skip = 0;

    public $search = "";

    protected $listeners = ['deleteParticipant' => 'deleteParticipant'];

    public function checkRegion(){
        $this->auth = Auth::user();

        if(in_array($this->auth->role, [1, 2])) $this->region = $this->region;
        else if($this->auth->role == 3) $this->region = 'ALS';
        else if($this->auth->role == 4) $this->region = 'BDG';
        else if($this->auth->role == 5) $this->region = 'MLG';
        else $this->region = '';
    }

    public function deleteParticipant($id){
        $this->checkRegion();

        $user = User2::find($id);

        if($this->auth->role == 2) ""; // don't do anything.
        else if($this->region != $user->campus) return false;

        return $user->delete();
    }

    public function render()
    {
        // if($this->lock_region){
        //     if($this->region == "ALL") $this->_region = '%%';
        //     else $this->_region = $this->region;
        // }else if(in_array($this->region, ['ALL', 'KMG', 'ALS', 'BDG', 'MLG'])){
        //     if($this->region == "ALL") $this->_region = '%%';
        //     else $this->_region = $this->region;
        // }else $this->_region = '%%';

        $this->checkRegion();

        $region = "";
        $region = $this->region;
        if($region == "ALL") $region = '%%';

        $users = User2::where('campus', 'like', $region)->where('role', 0)
        ->where(function($q){
            $q->where('fullName', 'like', '%' . $this->search . '%')
              ->orWhere('email', 'like', '%' . $this->search . '%')
              ->orWhere('gender', 'like', '%' . $this->search . '%')
              ->orWhere('placeBirth', 'like', '%' . $this->search . '%')
              ->orWhere('domicile', 'like', '%' . $this->search . '%')
              ->orWhere('address', 'like', '%' . $this->search . '%')
              ->orWhere('personal_email', 'like', '%' . $this->search . '%')
              ->orWhere('whatsapp', 'like', '%' . $this->search . '%')
              ->orWhere('line_id', 'like', '%' . $this->search . '%')
              ->orWhere('nim', 'like', '%' . $this->search . '%')
              ->orWhere('campus', 'like', '%' . $this->search . '%')
              ->orWhere('major', 'like', '%' . $this->search . '%')
              ->orWhere('batch', 'like', '%' . $this->search . '%')
              ->orWhere('schedule', 'like', '%' . $this->search . '%')
              ->orWhere('is_esport', 'like', '%' . $this->search . '%')
              ->orWhere('lnt_course', 'like', '%' . $this->search . '%');
        });

        $this->total = $users->count();
        $this->page_total = ceil($this->total / $this->limit);
        if($this->page < 1 || $this->page > $this->page_total) $this->page = 1;
        $this->skip = ($this->page - 1) * $this->limit;

        return view('livewire.users-table', [
            'users' => $users->orderBy('id','asc')->limit($this->limit)
                        ->skip($this->skip)->get()
        ]);
    }
}
