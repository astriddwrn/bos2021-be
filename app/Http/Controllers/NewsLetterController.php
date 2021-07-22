<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:news_letters'
        ]);

        NewsLetter::create([
            'email' => $request->email
        ]);

        return back();
    }
}
