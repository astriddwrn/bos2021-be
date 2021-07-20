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
            'payment_pic' => 'required|image|max:20480'
        ]);

        // lebih baik langsung $request->file('payment_pic')->store('path')
        // dia bakal kegenerate nama acak. jadi lebih aman kalo menurut gua.
        // terus dia bakal simpan kalo ga di /storage/app kalo ga
        // /storage/app/public, jadi siap" aja kalo dh ngedeploy pasti ada
        // masalah konfigurasi environment.

        // inget juga. foldernya di link ya ke public, bukan ngebuat folder
        // dengan nama yang sama. hapus foldernya terus link dengan
        // > php artisan storage:link
        // ntar dia bakal bikin linked folder, jadi folder-folder yang tadi
        // disimpan di dalam storage bisa diakses tanpa hak khusus.

        // hapus aja komen gua kalo udah ga perlu. wkwkwk.
        // thankyou Gregory. Mangats Mangats ^D^ .

        $file = $request->file('payment_pic');
        $fn_payment_pic = $request->user()->name."_".$request->user()->nim."_".time().".".$file->getClientOriginalExtension();
        $file->storeAs('payment_pic', $fn_payment_pic);

        $request->user()->payment_pic = $fn_payment_pic;
        $request->user()->save();

        return redirect('/dashboard');
    }


}
