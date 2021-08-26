<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function showExtras(Request $request){
        return view('extras', compact('request'));
    }

    public function showPhpInfo(Request $request){
        phpinfo();
        return '';
    }
}
