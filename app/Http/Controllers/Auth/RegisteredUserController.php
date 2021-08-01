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
        // masih perlu diselidiki apakah metode ini aman
        // dan efisien atau tidak.

        $schedules = collect([]);

        foreach(Schedule::lazy() as $schedule){
            if($schedule->count_users() < $schedule->quota)
                $schedules->push($schedule);
        }

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

        $request->validate([
            'fullName' => 'required|string',
            'gender' => 'required',
            'birthDate' => 'required',
            'placeBirth' => 'required',
            'domicile' => 'required',
            'address' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'whatsapp' => ['required','string','unique:users,whatsapp','regex:/^(08)\d+/','digits_between:10,14'],
            'line_id' => 'required|string|unique:users,line_id',
            'nim' => ['required','string','digits:10','regex:/^(23|24|25)\d+/','unique:users,nim'],
            'batch' => 'required',
            'campus' => 'required',
            'major' => 'required',
            'lnt_course' => 'required',
            'schedule' => 'required'
        ]);

        foreach(Schedule::findOrFail($request->schedule) as $schedule){
            if(strtolower($request->campus) != strtolower($schedule->campus))
                return back()->withInput()->withErrors([
                    "schedule" => "The schedule you choose is not available in your campus."
                ]);

            if($schedule->count_users() >= $schedule->quota)
                return back()->withInput()->withErrors([
                    "schedule" => "The schedule you choose is full right now."
                ]);
        }

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
            'address' => $request->address,
            'is_esport' => $request->is_esport
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
