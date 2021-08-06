<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Schedule;
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

    public function download(Request $request, $id) {
        $user  = User::findOrFail($id);
        // return Storage::download('/payment_pic/'.$user->payment_pic);
        return response()->download(public_path('/payment_pic/'.$user->payment_pic));
    }

    public function downloadKMG()
    {
        return Excel::download(new KMGExport, 'kmg_members.xlsx');
    }

    public function downloadALS()
    {
        return Excel::download(new ALSExport, 'als_members.xlsx');
    }

    public function downloadBDG()
    {
        return Excel::download(new BDGExport, 'bdg_members.xlsx');
    }

    public function downloadMLG()
    {
        return Excel::download(new MLGExport, 'mlg_members.xlsx');
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
