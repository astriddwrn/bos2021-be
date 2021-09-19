<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\ExtrasController;
use App\Http\Controllers\MemberController;

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

    // Route::get('/cGl0dSBwaXR1bHVuZw==/delete-account', [UserController::class, "showDeleteUser"])->name('deleteUser');
    // Route::delete('/cGl0dSBwaXR1bHVuZw==/delete-account', [UserController::class, "deleteUser"]);
});

Route::middleware(["auth", 'admin'])->group(function() {

    // Route::get('/admin', [AdminController::class, "index"])->name('admin');
    // Route::get('/admin', \App\Http\Livewire\PaginateUsers::class);
    Route::get('/admin', [AdminController::class, "showSuperAdmin"])->name('superadmin');
    Route::post('/admin/update_participant', [AdminController::class, "updateParticipant"])->name('update.participant');
    Route::post('/admin/update_reregis', [MemberController::class, "update"])->name('update.reregis');

    Route::get('/download/payment/{id}', [AdminController::class, "downloadPayment"])->name('download_payment');
    Route::get('/download/ktp/{id}', [AdminController::class, "downloadKTP"])->name('download_ktp');
    Route::get('/download/fyp/{id}', [AdminController::class, "downloadFYP"])->name('download_fyp');

    Route::get('/admin/downl/usersxlsx/{region}', [AdminController::class, "downloadUsers"])->name('download_users');
    Route::get('/admin/downl/reg_mem/kmgxlsx', [AdminController::class, "downloadMemberKMG"])->name('download_KMGMem');

    // EXTRAS: FOR DEBUGGING ONLY
    Route::get('/admin/extras/phpinfo', [ExtrasController::class, 'showPhpInfo']);
    Route::get('/admin/extras', [ExtrasController::class, 'showExtras']);
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
