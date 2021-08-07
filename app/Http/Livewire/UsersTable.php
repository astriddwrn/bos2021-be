<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User2;

class UsersTable extends Component
{
    public $lock_region = false;
    public $region = "ALL";
    public $_region = '%%';

    public $limit = 10;
    public $page = 1;
    public $total = 0;
    public $page_total = 0;
    public $skip = 0;

    public function render()
    {
        if($this->lock_region){
            if($this->region == "ALL") $this->_region = '%%';
            else $this->_region = $this->region;
        }else if(in_array($this->region, ['ALL', 'KMG', 'ALS', 'BDG', 'MLG'])){
            if($this->region == "ALL") $this->_region = '%%';
            else $this->_region = $this->region;
        }else $this->_region = '%%';

        $users = User2::where('campus', 'like', $this->_region);
        $this->total = $users->count();
        $this->page_total = ceil($this->total / $this->limit);
        $this->skip = ($this->page - 1) * $this->limit;

        return view('livewire.users-table', [
            'users' => $users->orderBy('id','desc')->limit($this->limit)
                        ->skip($this->skip)->get()
        ]);
    }
}
