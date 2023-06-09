<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = $request->user();
        switch($user->role){
            case 0: {
                $schedules = $user->schedules();

                $campus = $user->campus;
                if(in_array($campus , ['ASO', 'BKS', 'OL', 'SNY'])) $campus = 'KMG';
                $_schedules_from_region = Schedule::where('campus', 'like', $campus)->get();

                $schedules_from_region = collect([]);

                foreach($_schedules_from_region->lazy() as $schedule){
                    if($schedule->count_users() < $schedule->quota)
                        $schedules_from_region->push($schedule);
                }

                $birthDate = Carbon::parse($user->birthDate)->format('F d, Y');

                $now = Carbon::now('GMT+7');

                if(in_array($user->campus, ['KMG', 'ASO', 'BKS', 'OL', 'SNY']))
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
                    $payment_appear = Carbon::parse($schedules[0]->date)->addMinutes(135);
                }

                //Untuk munculin payment ketika BL selesai
                $diff_payment = ((new \DateTime($payment_appear))->diff(new \DateTime($now)));

                //Untuk munculin section reregist kalau user sudah verified dan tanggal reregist sudah mulai
                $diff_reregis = ((new \DateTime('2021-09-07 13:00:00'))->diff(new \DateTime($now)));

                //Untuk disable change schedule kalau jadwal BL sudah mulai
                $diff_change_schedule = ((new \DateTime($schedules[0]->date))->diff(new \DateTime($now)));

                return view('userDashboard', compact('user','schedules','birthDate',
                                                        'diff_payment', 'diff_reregis',
                                                        'diff_change_schedule', 'schedules_from_region'));
                break;
            }
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                return redirect('/admin');
                break;
        }
    }

    public function changeSchedule(Request $request){
        $schedules = $request->user()->schedules();
        $now = Carbon::now('GMT+7');
        $disable_datetime = Carbon::parse($schedules[0]->date);
        $diff_change_schedule = ((new \DateTime($disable_datetime))->diff(new \DateTime($now)));
        if(!$diff_change_schedule->invert) return back();

        $request->validate([
            'schedule-change' => 'required',
        ]);

        $user = $request->user();

        foreach(Schedule::findOrFail($request['schedule-change']) as $schedule){
            if(in_array($user->campus, ['ASO', 'BKS', 'OL', 'SNY'])) "";
            else if(strtolower($user->campus) != strtolower($schedule->campus))
                return back()->withInput()->withErrors([
                    "schedule" => "The schedule you choose is not available in your campus."
                ]);

            if($schedule->count_users() >= $schedule->quota)
                return back()->withInput()->withErrors([
                    "schedule" => "The schedule you choose is full right now."
                ]);
        }

        $user->schedule = $request['schedule-change'];
        $user->save();
        return back();
    }

    public function countdown(Request $request) {
        $user = $request->user();
        $schedule = Schedule::findOrFail($request->s);

        //$countdown sebagai indikator kapan ganti route dari /countdown ke linkzoom
        //waktu $countdown dikurangi 1 bulan dan 7 menit agar sesuai dengan perhitungan waktu di countdown.js
        //dikurangi 10 menit supaya sudah ganti 10 menit sebelum BL mulai
        $countdown = Carbon::parse($schedule->date)->subMonth(1)->subHours('7')->subMinutes(10)->format('Y, m, d, H, i, s');

        //$time dipake sebagai indikator auto-refresh untuk munculin link zoom
        $time = Carbon::parse($schedule->date)->subMinutes(10)->format('Y-m-d H:i:s');

        $now = Carbon::now('GMT+7');
        $diff = ((new \DateTime($schedule->date))->diff(new \DateTime($now)));
        $link = $schedule->link1;
        if(!$diff->invert)
            return redirect('/dashboard');
        else
            return view('countdown', compact('countdown','link', 'time'));

    }

    public function submitPayment(Request $request){
        $request->validate([
            'payment_pic' => 'required|max:5480'
        ]);

        $file = $request->file('payment_pic');
        $fn_payment_pic = $request->user()->fullName."_".$request->user()->nim."_".time().".".$file->getClientOriginalExtension();

        if($request->user()->payment_pic!=NULL){
            File::delete(public_path('payment_pic/'.$request->user()->payment_pic));
        }

        $file->move(public_path('payment_pic'),$fn_payment_pic);

        $request->user()->payment_pic = $fn_payment_pic;
        $request->user()->save();

        return redirect('/dashboard');
    }

    public function showDeleteUser(Request $request){
        $user = $request->user();
        return view('deleteUser', compact('user'));
    }

    public function deleteUser(Request $request){
        // SemangatBOS33!
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'passcode' => 'required'
        ]);

        $user = $request->user();

        if($request->email == $user->email && $request->passcode == "SemangatBOS33!"
           && Hash::check($request->password, $user->password)){
            $user->delete();
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        }else{
            return redirect()->back()->withErrors(["email" => "Credential or Passcode is invalid."]);
        }
    }


}
