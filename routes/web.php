<?php

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
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
   // Alert::success('Success Title', 'Success Message');
    return view('public.welcome');
});


//auth user releted
Route::name('user.')->middleware(['auth','verified'])->group(function () {

    Route::get('dashbord', [UserController::class, 'dashbord'])->name('dashbord');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::get('change-password', [UserController::class, 'changepassword'])->name('change-password');
    Route::get('two-factor-authentication', [UserController::class, 'twofactorauthentication'])->name('two-factor-authentication');
});

//Admin releted
Route::name('admin.')->middleware(['auth','verified'])->group(function () {

    Route::resource('users', UsersController::class);


});
