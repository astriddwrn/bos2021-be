<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function simpleView($view){
        return view("debug.$view");
    }

    public function simpleResponse($view, Request $request){
        var_dump([$request->all()]);
        die();
    }
}
