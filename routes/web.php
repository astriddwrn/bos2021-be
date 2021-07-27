<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsLetterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('comingSoon');
});

Route::middleware(["auth"])->group(function(){
    Route::get('/dashboard', [UserController::class, "index"])->name('dashboard');
    Route::get('/admin', [AdminController::class, "index"])->name('admin');
    Route::patch('/submit-pay', [UserController::class, "submitPayment"])->name('submit_pay');
    Route::get('/download/payment/{id}', [AdminController::class, "download"])->name('download_payment');
});

Route::post('/newsletter', [NewsLetterController::class, 'create'])->name('newsletter');



// DON'T FORGET TO DISABLE BELOW GROUP WHEN THIS PROGRAM IS READY
// DEPLOYED TO PRODUCTION ENVIRONEMNT. LEAVE IT ACTIVE WOULD
// LEAD IT TO SECURITY ISSUE.
// Route::prefix("/debug")->group(function(){
//     Route::get("/view/{view}", [App\Http\Controllers\DebugController::class, "simpleView"]);
// });

require __DIR__.'/auth.php';
