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

// Route::get('/', function () {
//     return view('comingSoon');
// });

Route::get('/', function () {
    return view('landing');
});

Route::middleware(["auth"])->group(function(){
    //Regular User
    Route::get('/dashboard', [UserController::class, "index"])->name('dashboard');
    Route::patch('/dashboard', [UserController::class, 'changeSchedule']);
    Route::get('/countdown', [UserController::class, "countdown"])->name('countdown');
    Route::patch('/submit-pay', [UserController::class, "submitPayment"])->name('submit_pay');

    //Re-registration
    Route::post('/reregister', 'App\Http\Controllers\MemberController@create')->name('reregister');

    // git pull function
    // Route::get('/debug/git_pull', [App\Http\Controllers\DebugController::class, "git_pull"]);
});

Route::middleware(["auth", 'admin'])->group(function() {
    // Route::get('/admin', [AdminController::class, "index"])->name('admin');
    Route::get('/admin', \App\Http\Livewire\PaginateUsers::class);
    Route::get('/download/payment/{id}', [AdminController::class, "download"])->name('download_payment');
    Route::get('/admin/downl/alsexlsx', [AdminController::class, "downloadALS"])->name('download_ALS');
    Route::get('/admin/downl/kmgexlsx', [AdminController::class, "downloadKMG"])->name('download_KMG');
    Route::get('/admin/downl/bdgexlsx', [AdminController::class, "downloadBDG"])->name('download_BDG');
    Route::get('/admin/downl/mlgexlsx', [AdminController::class, "downloadMLG"])->name('download_MLG');
    // Route::get('/admin/downl/reg_mem/alsxlsx', [AdminController::class, "downloadMemberALS"])->name('download_ALS');
    // Route::get('/admin/downl/reg_mem/bdgxlsx', [AdminController::class, "downloadMemberBDG"])->name('download_BDG');
    Route::get('/admin/downl/reg_mem/kmgxlsx', [AdminController::class, "downloadMemberKMG"])->name('download_KMGMem');
    Route::get('/admin/downl/pay_mem/kmgxlsx', [AdminController::class, "downloadPaymentKMG"])->name('download_KMGPay');
    Route::get('/admin/downl/pay_mem/alsxlsx', [AdminController::class, "downloadPaymentALS"])->name('download_ALSPay');
    Route::get('/admin/downl/pay_mem/bdgxlsx', [AdminController::class, "downloadPaymentBDG"])->name('download_BDGPay');
    Route::get('/admin/downl/pay_mem/mlgxlsx', [AdminController::class, "downloadPaymentMLG"])->name('download_MLGPay');
    // Route::get('/admin/downl/reg_mem/mlgxlsx', [AdminController::class, "downloadMemberMLG"])->name('download_MLG');
});

Route::post('/newsletter', [NewsLetterController::class, 'create'])->name('newsletter');



// DON'T FORGET TO DISABLE BELOW GROUP WHEN THIS PROGRAM IS READY
// DEPLOYED TO PRODUCTION ENVIRONEMNT. LEAVE IT ACTIVE WOULD
// LEAD IT TO SECURITY ISSUE.
Route::prefix("/debug")->group(function(){
    Route::get("/view/{view}", [App\Http\Controllers\DebugController::class, "simpleView"])->name("debug.view");
    Route::post("/view/{view}", [App\Http\Controllers\DebugController::class, "simpleResponse"]);
});

require __DIR__.'/auth.php';
