<?php


use App\Http\Controllers\Users\UsersController;
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

    return view('public.welcome');
});


//auth user releted
Route::prefix('user')->middleware(['auth','verified'])->group(function () {

    Route::get('dashbord', [UsersController::class, 'dashbord'])->name('dashbord');
    Route::get('profile', [UsersController::class, 'profile'])->name('profile');
    Route::get('change-password', [UsersController::class, 'changepassword'])->name('change-password');
    Route::get('two-factor-authentication', [UsersController::class, 'twofactorauthentication'])->name('two-factor-authentication');
});
//auth user
