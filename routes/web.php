<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
});

Auth::routes();

/*Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Super Admin Routes
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');
});

// teachers Routes
Route::middleware(['auth', 'user-access:teacher'])->group(function () {

    Route::get('/teacher/dashboard', [HomeController::class, 'teacherDashboard'])->name('teacher.dashboard');
});


Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/user/dashboard', [HomeController::class, 'userDashboard'])->name('user.dashboard');
});*/

// Manager Routes


//---------- Super Admin Routes ----------
Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/{page}', [AdminController::class, 'index']);
});

//---------- Receiving Routes ----------
Route::prefix('receiving')->middleware('isReceiving')->group(function(){
    Route::get('/{page}', [ReceivingController::class, 'index']);
});

//---------- Operations Routes ----------
Route::prefix('operations')->middleware('isOperations')->group(function(){
    Route::get('/{page}', [OperationsController::class, 'index']);
});

//---------- Monitor Routes ----------
Route::prefix('monitor')->middleware('isMonitor')->group(function(){
    Route::get('/{page}', [MonitorController::class, 'index']);
});

//---------- Accountant Routes ----------
Route::prefix('accountant')->middleware('isAccountant')->group(function(){
    Route::get('/{page}', [AccountantController::class, 'index']);
});
