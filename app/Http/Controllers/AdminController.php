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


class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }


    public function index(Request $request){
        $datas = User::where('campus', '!=', 'admin')->paginate(10);
        // $user = User::find(4)->schedule;
        // dd($user->date);
        return view('admin', compact('datas'));
    }

    public function download(Request $request, $id) {
        $user  = User::findOrFail($id);
        return Storage::download('/payment_pic/'.$user->payment_pic);
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
}
