<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Schedule;
use App\Exports\AllUsersExport;
use App\Exports\BDGExport;
use App\Exports\MLGExport;
use App\Exports\KMGExport;
use App\Exports\ALSExport;
use App\Exports\MemberALSExport;
use App\Exports\MemberBDGExport;
use App\Exports\MemberKMGExport;
use App\Exports\MemberMLGExport;
use App\Exports\PaymentALSExport;
use App\Exports\PaymentKMGExport;
use App\Exports\PaymentBDGExport;
use App\Exports\PaymentMLGExport;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index(Request $request){

        return view('admin');
    }

    public function showSuperAdmin(Request $request){
        $user = $request->user();

        if($user->role == 1) $region = '%%';
        else if($user->role == 2) $region = '%%';
        else if($user->role == 3) $region = 'ALS';
        else if($user->role == 4) $region = 'BDG';
        else if($user->role == 5) $region = 'MLG';
        else $region = '';

        $schedules = Schedule::where('campus', 'like', '%%')->get();
        return view('superAdminDashboard', compact('user', 'schedules'));
    }

    public function updateParticipant(Request $request){
        $message = [
            'id.required' => 'User is not found.',
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

        // $request->validate([
        //     'id' => 'required',
        //     'fullName' => 'required|string',
        //     'gender' => 'required',
        //     'birthDate' => ['required','before:2007-01-01'],
        //     'placeBirth' => ['required', 'regex:/^[A-Z a-z \s]{3,}/'],
        //     'domicile' => ['required', 'regex:/^[A-Z a-z \s]{3,}/'],
        //     'address' => ['required', 'regex:/^[^0-9][A-Z a-z]+.+/'],
        //     'email' => ['required', 'string', 'email', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'whatsapp' => ['required','string','unique:users,whatsapp','regex:/^(08)\d+/','digits_between:10,14'],
        //     'line_id' => ['required','string','unique:users,line_id'],
        //     'nim' => ['required','string','digits:10','regex:/^(21|22|23|24|25)\d+/','unique:users,nim'],
        //     'batch' => ['required'],
        //     'campus' => ['required'],
        //     'major' => ['required'],
        //     'lnt_course' => ['required'],
        //     'schedule' => ['required'],
        //     'personal_email' => ['required','string','email','unique:users,personal_email', 'regex:/^[^0-9].+(@).+/'],
        // ],$message);

        // foreach(Schedule::findOrFail($request->schedule) as $schedule){
        //     if(strtolower($request->campus) != strtolower($schedule->campus))
        //         return back()->withInput()->withErrors([
        //             "schedule" => "The schedule you choose is not available in your campus."
        //         ]);

        //     if($schedule->count_users() >= $schedule->quota)
        //         return back()->withInput()->withErrors([
        //             "schedule" => "The schedule you choose is full right now."
        //         ]);
        // }

        $user = User::findOrFail($request->id)->update([
            'fullName' => $request->fullName,
            'gender' => $request->gender,
            'birthDate' => $request->birthDate,
            'placeBirth' => $request->placeBirth,
            'domicile' => $request->domicile,
            'address' => $request->address,
            'email' => $request->email,
            'personal_email' => $request->personal_email,
            'line_id' => $request->line_id,
            'whatsapp' => $request->whatsapp,
            'nim' => $request->nim,
            'campus' => $request->campus,
            'major' =>$request->major,
            'batch' => $request->batch,
            'lnt_course' => $request->lnt_course,
            'schedule' => $request->schedule,
            'is_esport' => $request->is_esport,
        ]);

        return redirect()->back();
    }

    public function downloadPayment(Request $request, $id) {
        $user  = User::findOrFail($id);
        // return Storage::download('/payment_pic/'.$user->payment_pic);
        return response()->download(public_path('payment_pic/' . $user->payment_pic));
    }

    public function downloadKTP(Request $request, $id) {
        $member  = Member::findOrFail($id);
        return response()->download(public_path('ktp/' . $member['ktp-upload']));
    }

    public function downloadFYP(Request $request, $id) {
        $member  = Member::findOrFail($id);
        return response()->download(public_path('fyp/' . $member['fyp-upload']));
    }

    public function downloadAllUsers(){
        return Excel::download(new AllUsersExport('%%'), 'all_members.xlsx');
    }

    public function downloadKMG()
    {
        return Excel::download(new AllUsersExport('KMG'), 'kmg_members.xlsx');
        // return Excel::download(new KMGExport, 'kmg_members.xlsx');
    }

    public function downloadALS()
    {
        return Excel::download(new AllUsersExport('ALS'), 'als_members.xlsx');
        // return Excel::download(new ALSExport, 'als_members.xlsx');
    }

    public function downloadBDG()
    {
        return Excel::download(new AllUsersExport('BDG'), 'bdg_members.xlsx');
        // return Excel::download(new BDGExport, 'bdg_members.xlsx');
    }

    public function downloadMLG()
    {
        return Excel::download(new AllUsersExport('MLG'), 'mlg_members.xlsx');
        // return Excel::download(new MLGExport, 'mlg_members.xlsx');
    }

    public function downloadMemberALS()
    {
        return Excel::download(new MemberALSExport, 'als_registered_members.xlsx');
    }

    public function downloadMemberBDG()
    {
        return Excel::download(new MemberBDGExport, 'bdg_registered_members.xlsx');
    }

    public function downloadMemberKMG()
    {
        return Excel::download(new MemberKMGExport, 'kmg_registered_members.xlsx');
    }

    public function downloadMemberMLG()
    {
        return Excel::download(new MemberMLGExport, 'mlg_registered_members.xlsx');
    }

    public function downloadPaymentALS()
    {
        return Excel::download(new PaymentALSExport, 'als_payment_members.xlsx');
    }

    public function downloadPaymentKMG()
    {
        return Excel::download(new PaymentKMGExport, 'kmg_payment_members.xlsx');
    }

    public function downloadPaymentBDG()
    {
        return Excel::download(new PaymentBDGExport, 'bdg_payment_members.xlsx');
    }

    public function downloadPaymentMLG()
    {
        return Excel::download(new PaymentMLGExport, 'mlg_payment_members.xlsx');
    }

}
