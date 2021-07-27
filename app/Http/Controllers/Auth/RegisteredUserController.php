<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Schedule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $schedules = Schedule::all();
        return view('debug.signup', compact('schedules'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {

        // $schedule = Schedule::find((int)$request->input('schedule_id'));
        // if($schedule->quota>0) {
        //     $request->request->add(['isQuotaNotZero' => 1]);
        //     // $request->request->add([1,'isQuotaNotZero']);
        // }
        // else {
        //     $request->request->add(['isQuotaNotZero' => 0]);
        // }



        // $message = [
        //     'isQuotaNotZero.accepted' => 'Selected schedule is full, please select another one'
        // ];


        // $request->validate([
        //     'fullName' => 'required|string',
        //     'gender' => 'required',
        //     'birthDate' => 'required',
        //     'placeBirth' => 'required',
        //     'domicile' => 'required',
        //     'address' => 'required',
        //     'email' => 'required|string|email|unique:users',
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'whatsapp' => ['required','string','unique:users,whatsapp','numeric','regex:/^(08)\d+/','digits_between:10,14'],
        //     'line_id' => 'required|string|unique:users,line_id',
        //     'nim' => ['required','string','numeric','digits:10','regex:/^(23|24|25)\d+/','unique:users,nim'],
        //     'batch' => 'required',
        //     'campus' => 'required|string',
        //     'major' => 'required|string',
        //     'lnt_course' => 'required|string',
        //     'schedule' => 'required',
        //     // 'isQuotaNotZero' => 'accepted'
        // ] /*,$message*/);

        // $schedule->quota--;
        // $schedule->save();

        // dd($request->all());

        $user = User::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'whatsapp' => $request->whatsapp,
            'line_id' => $request->line_id,
            'nim' => $request->nim,
            'campus' => $request->campus,
            'major' =>$request->major,
            'lnt_course' => $request->lnt_course,
            'schedule' => $request->schedule,
            'batch' => $request->batch,
            'gender' => $request->gender,
            'birthDate' => $request->birthDate,
            'placeBirth' => $request->placeBirth,
            'domicile' => $request->domicile,
            'address' => $request->address
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
