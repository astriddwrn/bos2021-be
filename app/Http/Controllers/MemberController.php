<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function create(Request $request){
        if(Auth::user()->is_reregistered==0){

            $request->validate([
                'lnt_course' => 'required',
                'bnccid' => ['required','string','unique:members,bnccid','regex:/^(BNCC210)(1|2|3|4)([0-9]{3})/'],
                'linkedinUrl' => ['required','regex:/^(https:\/\/www.linkedin.com\/in\/)\w+/'],
                'githubUrl' => ['required', 'regex:/^(https:\/\/github.com\/)\w+/']
            ] );
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
                'bnccid' => $request->bnccid,
                'linkedinUrl' => $request->linkedinUrl,
                'githubUrl' => $request->githubUrl
            ]);
            $request->user()->is_reregistered = 1;
            $request->user()->save();
        }

        return back();
    }

    public function update(Request $request){
        $request->validate([
            'id' => ['required'],
            'lnt_course' => 'required',
            'bnccid' => ['required','string','unique:members,bnccid','regex:/^(BNCC21)/'],
            'linkedinUrl' => ['required','regex:/^(https:\/\/www.linkedin.com\/in\/)\w+/'],
            'githubUrl' => ['required', 'regex:/^(https:\/\/github.com\/)\w+/']
        ] );

        $member = Member::findOrFail($request->id);

        $member->update([
            'lnt_course' => $request->lnt_course,
            'bnccid' => $request->bnccid,
            'linkedinUrl' => $request->linkedinUrl,
            'githubUrl' => $request->githubUrl
        ]);

        $request->user()->is_reregistered = 1;
        $request->user()->save();

        return back();
    }

}
