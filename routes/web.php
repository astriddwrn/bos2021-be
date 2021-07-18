<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\UserController::class, "index"])->middleware(['auth'])->name('dashboard');

Route::get('/admin', [App\Http\Controllers\AdminController::class, "index"])->middleware(['auth'])->name('admin');

Route::patch('/submit-pay', [App\Http\Controllers\UserController::class, "submitPayment"])->name('submit_pay');

Route::get('/download/payment/{id}', [App\Http\Controllers\AdminController::class, "download"])->name('download_payment');

// DON'T FORGET TO DISABLE BELOW GROUP WHEN THIS PROGRAM IS READY
// DEPLOYED TO PRODUCTION ENVIRONEMNT. LEAVE IT ACTIVE WOULD
// LEAD IT TO SECURITY ISSUE.
Route::prefix("/debug")->group(function(){
    Route::get("/view/{view}", [App\Http\Controllers\DebugController::class, "simpleView"]);
});

require __DIR__.'/auth.php';
