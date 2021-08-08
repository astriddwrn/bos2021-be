<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User2;

class UsersTable extends Component
{
    public $auth;

    public $lock_region = false;
    public $region = "ALL";
    public $_region = '%%';

    public $limit = 10;
    public $page = 1;
    public $total = 0;
    public $page_total = 0;
    public $skip = 0;

    public $search = "";

    public function render()
    {
        if($this->lock_region){
            if($this->region == "ALL") $this->_region = '%%';
            else $this->_region = $this->region;
        }else if(in_array($this->region, ['ALL', 'KMG', 'ALS', 'BDG', 'MLG'])){
            if($this->region == "ALL") $this->_region = '%%';
            else $this->_region = $this->region;
        }else $this->_region = '%%';

        $users = User2::where('campus', 'like', $this->_region)->where('role', 0);
        // ->where(function($q){
        //     $q->where('fullName', 'like', '%' . $this->search . '%')
        //       ->orWhere('email', 'like', '%' . $this->email . '%')
        //       ->orWhere('gender', 'like', '%' . $this->gender . '%')
        //       ->orWhere('gender', 'like', '%' . $this->gender . '%');
        // });

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
