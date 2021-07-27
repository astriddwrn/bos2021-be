<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Model\User;
use App\Model\Schedule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = $request->user();

        // ini kalo bisa switch case ya biar rapih.
        if($user->role==0){

            // ini biasanya lgsg di handle di view sih... but its okay.
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
            'payment_pic' => 'required|mimes:jpg,jpeg,png|max:5480'
        ]);

         // ada nama biar supaya pas didownload langsung retrieve nama file dengan nama_nim

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
