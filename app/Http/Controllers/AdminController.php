<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Schedule;

class AdminController extends Controller
{
    public function index(Request $request){
        $datas = User::where('campus', '!=', 'admin')->paginate(10);
        // $user = User::find(4)->schedule;
        // dd($user->date);
        return view('admin', compact('datas'));
    }

    public function download(Request $request, $id) {
        $user  = User::findOrFail($id);
        return Storage::download('/payment_pic/'.$user->payment_pic);
    }
}
