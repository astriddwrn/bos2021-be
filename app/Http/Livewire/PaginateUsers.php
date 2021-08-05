<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class PaginateUsers extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';
    public function render()
    {

        // $users = User::all();
        // dd(User::paginate(10)->links());
        return view('livewire.paginate-users', [
            'kmg' => User::where('campus', '=', 'KMG')->orderBy('id','desc')->paginate(10),
            'als' => User::where('campus', '=', 'ALS')->orderBy('id','desc')->paginate(10),
            'bdg' => User::where('campus', '=', 'BDG')->paginate(10),
            'mlg' => User::where('campus', '=', 'MLG')->paginate(10),
            'no' => 0
        ])->layout('layouts.app');
    }
}
