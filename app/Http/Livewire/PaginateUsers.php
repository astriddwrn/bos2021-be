<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Http\Request;

class PaginateUsers extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';
    public function render(Request $request){

        if($request->user()->role==1||$request->user()->role==2){
            return view('livewire.paginate-users', [
                'kmg' => User::where('campus', '=', 'KMG')->orderBy('id','desc')->paginate(10),
                'als' => User::where('campus', '=', 'ALS')->orderBy('id','desc')->paginate(10),
                'bdg' => User::where('campus', '=', 'BDG')->orderBy('id','desc')->paginate(10),
                'mlg' => User::where('campus', '=', 'MLG')->orderBy('id','desc')->paginate(10),
                'no' => 0
            ])->layout('layouts.app');
        }
        else if($request->user()->role==3||$request->user()->role==4||$request->user()->role==5){
            return view('livewire.paginate-users', [
                'kmg' => User::where('campus', '=', 'KMG')->orderBy('id','desc')->paginate(10),
                'als' => User::where('campus', '=', 'ALS')->orderBy('id','desc')->paginate(10),
                'bdg' => User::where('campus', '=', 'BDG')->orderBy('id','desc')->paginate(10),
                'mlg' => User::where('campus', '=', 'MLG')->orderBy('id','desc')->paginate(10),
                'no' => 0
            ])->layout('layouts.app');
        }
    }

    public function reject($id) {
        $user  = User::findOrFail($id);
        $user->status = 2;
        $user->save();
    }

    public function verify($id) {
        $user  = User::findOrFail($id);
        $user->status = 1;
        $user->save();
    }
}