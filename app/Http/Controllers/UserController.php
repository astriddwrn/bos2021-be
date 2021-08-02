<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = $request->user();
        switch($user->role){
            case 0: {
                $schedules = $user->schedules();

                $schedules_from_region = Schedule::where('campus', 'like', $user->campus)->get();

                $birthDate = Carbon::parse($user->birthDate)->format('F d, Y');

                $now = Carbon::now('GMT+7');

                if($user->campus == 'KMG')
                {
                    $payment_appear = Carbon::parse($schedules[0]->date)->addMinutes(120);
                }
                else if($user->campus == 'ALS')
                {
                    $payment_appear = Carbon::parse($schedules[0]->date)->addMinutes(145);
                }
                else if($user->campus == 'BDG')
                {
                    $payment_appear = Carbon::parse($schedules[0]->date)->addMinutes(115);
                }
                else if($user->campus == 'MLG')
                {
                    $payment_appear = Carbon::parse($schedules[0]->date)->addMinutes(115);
                }

                $diff_payment = ((new \DateTime($payment_appear))->diff(new \DateTime($now)));

                $diff_reregis = ((new \DateTime('2021-08-31 14:52:00'))->diff(new \DateTime($now)));

                //Untuk disable change schedule kalau jadwal BL sudah mulai
                $diff_change_schedule = ((new \DateTime('2021-08-31 16:08:00'))->diff(new \DateTime($now)));

                return view('userDashboard', compact('user','schedules','birthDate',
                                                        'diff_payment', 'diff_reregis',
                                                        'diff_change_schedule', 'schedules_from_region'));
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

        $schedule = Schedule::findOrFail($request->s);
        $countdown = Carbon::parse($schedule->date)->subMonth(1)->subHours('7')->format('Y, m, d, H, i, s');
        // dd($countdown);
        $now = Carbon::now('GMT+7');
        $diff = ((new \DateTime($schedule->date))->diff(new \DateTime($now)));

        if(!$diff->invert)
            return redirect('/dashboard');
        else
            return view('countdown', compact('countdown'));

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
