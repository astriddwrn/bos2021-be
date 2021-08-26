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
use Illuminate\Cache\RateLimiting\Limit;
use App\Services\CaptchaService;

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

        return view('auth.signup', compact('schedules'));
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

        $message = [
            'birthDate.before' => 'This date is invalid and must be a date before 2007',
            'email.unique' => 'This email has already been taken',
            'placeBirth.regex' => "This birth place format is invalid",
            'domicile.regex' => "This city format is invalid",
            'address.regex' => "This address format is invalid",
            'whatsapp.unique' => 'This number has already been taken',
            'whatsapp.regex' => '"08" is required in the beginning of this number',
            'whatsapp.digits_between' => 'This number is required to have 10 - 14 digits',
            'line_id.unique' => 'This LINE ID has already been taken',
            'nim.unique' => 'This NIM has already been taken',
            'personal_email.unique' => "This email has been taken",
            'personal_email.regex' => "Email can't begin with numbers"
        ];


        $request->validate([
            'fullName' => 'required|string',
            'gender' => 'required',
            'birthDate' => ['required','before:2007-01-01'],
            'placeBirth' => ['required', 'regex:/^[A-Z a-z \s]{3,}/'],
            'domicile' => ['required', 'regex:/^[A-Z a-z \s]{3,}/'],
            'address' => ['required', 'regex:/^[^0-9][A-Z a-z]+.+/'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'whatsapp' => ['required','string','unique:users,whatsapp','regex:/^(08)\d+/','digits_between:10,14'],
            'line_id' => ['required','string','unique:users,line_id'],
            'nim' => ['required','string','digits:10','regex:/^(21|22|23|24|25)\d+/','unique:users,nim'],
            'batch' => ['required'],
            'campus' => ['required'],
            'major' => ['required'],
            'lnt_course' => ['required'],
            'schedule' => ['required'],
            'personal_email' => ['required','string','email','unique:users,personal_email', 'regex:/^[^0-9].+(@).+/'],
            'g-recaptcha-response' => ['required']
        ],$message);

        $isCaptchaValid = CaptchaService::checkCaptcha($request["g-recaptcha-response"], $request);
        if(!($isCaptchaValid->success))
            return back()->withInput()->withErrors([
                "g-recaptcha-response" => join(", ", $isCaptchaValid["error-codes"])
            ]);

        foreach(Schedule::findOrFail($request->schedule) as $schedule){
            if(in_array($request->campus, ['ASO', 'BKS', 'OL', 'SNY'])) "";
            else if(strtolower($request->campus) != strtolower($schedule->campus))
                return back()->withInput()->withErrors([
                    "schedule" => "The schedule you choose is not available in your campus. " . $request->campus . " :: " . $schedule->campus
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
            'is_esport' => $request->is_esport,
            'personal_email' => $request->personal_email
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
