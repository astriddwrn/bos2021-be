<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DebugController extends Controller
{
    public function simpleView($view){
        return view("debug.$view");
    }

    public function simpleResponse($view, Request $request){
        return response()->json($request->all());
    }

    public function git_pull(Request $request){
        if($request->user()->role <= 1) return redirect('/');

        $ex = shell_exec("git pull");

        return response('Shell:\n' . $ex)
                    ->header('Content-Type', 'text/plain');
    }
}
