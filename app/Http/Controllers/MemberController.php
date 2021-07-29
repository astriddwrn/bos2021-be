<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'lnt_course' => 'required',
            'bnccid' => ['required','string','unique:users, bnccid','regex:/^(BNCCID21)([0-9]{3})/'],
            'linkedinUrl' => 'required',
            'githubUrl' => 'required',
            'ktp-upload' => 'required|mimes:jpg,jpeg,png|max:5480',
            'fyp-upload' => 'required|mimes:jpg,jpeg,png|max:5480'
        ] );

        $ktp = $request->file('ktp-upload');
        $fn_ktp = $request->user()->fullName."_".$request->user()->nim."_ktp".time().".".$ktp->getClientOriginalExtension();
        $ktp->move(public_path('ktp'),$fn_ktp);

        $fyp = $request->file('fyp-upload');
        $fn_fyp = $request->user()->fullName."_".$request->user()->nim."_fyp".time().".".$fyp->getClientOriginalExtension();
        $fyp->move(public_path('fyp'),$fn_fyp);

        Member::create([
            'fullName' => $request->user()->fullName,
            'email' => $request->user()->email,
            'whatsapp' => $request->user()->whatsapp,
            'line_id' => $request->user()->line_id,
            'nim' => $request->user()->nim,
            'campus' => $request->user()->campus,
            'major' =>$request->user()->major,
            'batch' => $request->user()->batch,
            'gender' => $request->user()->gender,
            'birthDate' => $request->user()->birthDate,
            'placeBirth' => $request->user()->placeBirth,
            'domicile' => $request->user()->domicile,
            'address' => $request->user()->address,
            'lnt_course' => $request->lnt_course,
            'linkedinUrl' => $request->linkedinUrl,
            'githubUrl' => $request->githubUrl,
            'ktp-upload' => $fn_ktp,
            'fyp-upload' => $fn_fyp
        ]);
    }
}
