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
                //GANTI birthDate to actual schedule
                $date = Carbon::parse($user->birthDate)->format('l, F d, Y');

                // dd($date);
                $start = Carbon::parse('2008-12-15 20:01:25')->format('H : i');
                $end = Carbon::parse('2008-12-15 20:01:25')->addMinutes('100')->format('H : i');

                $birthDate = Carbon::parse($user->birthDate)->format('F d, Y');

                $now = Carbon::now('GMT+7');

                $payment_appear = Carbon::parse('2021-08-31 12:50:00')->addMinutes(120);
                $diff_payment = ((new \DateTime($payment_appear))->diff(new \DateTime($now)));

                $diff_reregis = ((new \DateTime('2021-08-31 14:52:00'))->diff(new \DateTime($now)));

                return view('debug.userDashboard', compact('date','start','end','birthDate','diff_payment', 'diff_reregis'));
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

            case 5: {

                break;
            }
        }

}

    public function countdown(Request $request) {
        $user = $request->user();

        $countdown = Carbon::parse('2021-08-02 12:20:00')->format('Y, m, d, H, i, s');

        $now = Carbon::now('GMT+7');
        $diff = ((new \DateTime('2021-08-02 12:20:00'))->diff(new \DateTime($now)));
        // dd($diff);
        if(!$diff->invert)
            return redirect('https://www.youtube.com/');
        else
            return view('debug.countdown', compact('countdown'));
        // dd($countdown);

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
