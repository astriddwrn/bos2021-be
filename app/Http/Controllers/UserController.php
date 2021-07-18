<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Schedule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = $request->user();
        if($user->role==0){
            if($user->payment_pic!=NULL){
                if($user->status==1){
                    $verification = "Verified";
                    // dd($verification);
                    return view('dashboard',compact('verification'));
                }
                else {
                    $verification = "Not Verified";
                    // dd($verification);
                    return view('dashboard',compact('verification'));
                }
            }
            else{
                $verification = "Payment Not Submitted";
                return view('dashboard',compact('verification'));
            }

        }
        else if($user->role==1){
            return redirect('/admin');
        }
        else if($user->role==2){
            return redirect('/superadmin');
        }
        else if($user->role==3){
            return redirect('/superadmin-malang');
        }
    }

    public function submitPayment(Request $request){
        $request->validate([
            'payment_pic' => 'required|image|max:20480'
        ]);

        $file = $request->file('payment_pic');
        $fn_payment_pic = $request->user()->name."_".$request->user()->nim."_".time().".".$file->getClientOriginalExtension();
        $file->storeAs('payment_pic', $fn_payment_pic);

        $request->user()->payment_pic = $fn_payment_pic;
        $request->user()->save();

        return redirect('/dashboard');
    }


}
