<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Model\User;
use App\Model\Schedule;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = $request->user();

        //scuffed temporarily
        switch($user->role){
            case 0: {
                $countdown = Carbon::parse('2021-08-15 09:30:00')->subHours('5')->subMonths('1')->format('Y, m, d, H, i, s');
                // dd($countdown);
                //GANTI birthDate to actual schedule
                $date = Carbon::parse($user->birthDate)->format('l, F d, Y');

                // dd($date);
                $start = Carbon::parse('2008-12-15 20:01:25')->format('H : i');
                $end = Carbon::parse('2008-12-15 20:01:25')->addMinutes('100')->format('H : i');

                $birthDate = Carbon::parse($user->birthDate)->format('F d, Y');

                return view('debug.userDashboard', compact('date','start','end','countdown', 'birthDate'));
                break;
            }
            case 1: {

                return redirect('/admin');
                break;
            }
            case 2: {

                return redirect('/superadmin');
                break;
            }
            case 3: {

                return redirect('/superadmin-malang');
                break;
            }
            case 4: {

                break;
            }
        }

            // if($user->payment_pic!=NULL){
            //     if($user->status==1){
            //         $verification = "Verified";
            //         // dd($verification);
            //         return view('debug.userDashboard',compact('verification'));
            //     }
            //     else {
            //         $verification = "Not Verified";
            //         // dd($verification);
            //         return view('debug.userDashboard',compact('verification'));
            //     }
            // }
            // else{
            //     $verification = "Payment Not Submitted";
            //     return view('debug.userDashboard',compact('verification'));
            // }

}

    public function submitPayment(Request $request){
        $request->validate([
            'payment_pic' => 'required|mimes:jpg,jpeg,png|max:5480'
        ]);

        $file = $request->file('payment_pic');
        $fn_payment_pic = $request->user()->fullName."_".$request->user()->nim."_".time().".".$file->getClientOriginalExtension();

        if($request->user()->payment_pic!=NULL){
            // dd($request->user()->payment_pic);
            File::delete(public_path('payment_pic/'.$request->user()->payment_pic));
        }

        $file->move(public_path('payment_pic'),$fn_payment_pic);

        $request->user()->payment_pic = $fn_payment_pic;
        $request->user()->save();

        return redirect('/dashboard');
    }


}
