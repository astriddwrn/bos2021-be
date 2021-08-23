<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User2;

class PaymentsTable extends Component
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

    public function verify($id){
        $this->checkRegion();

        $user = User2::find($id);

        if($this->auth->role == 2) ""; // don't do anything.
        else if($this->region != $user->campus) return false;

        if($user->status != 1) $user->update(["status" => 1]);
            else $user->update(["status" => 0]);

        return true;
    }

    public function reject($id){
        $this->checkRegion();

        $user = User2::find($id);

        if($this->auth->role == 2) ""; // don't do anything.
        else if($this->region != $user->campus) return false;

        if($user->status != 2) $user->update(["status" => 2]);
            else $user->update(["status" => 0]);

        return true;
    }

    public function render()
    {
        $this->checkRegion();

        $region = "";
        $region = $this->region;
        if($region == "ALL") $region = '%%';

        $users = User2::where('campus', 'like', $region)->where('role', 0)
                            ->whereNotNull('payment_pic');

        $this->total = $users->count();
        $this->page_total = ceil($this->total / $this->limit);
        if($this->page < 1 || $this->page > $this->page_total) $this->page = 1;
        $this->skip = ($this->page - 1) * $this->limit;

        return view('livewire.payments-table', [
            'users' => $users->orderBy('id','asc')->limit($this->limit)
                        ->skip($this->skip)->get()
        ]);
    }
}
