<?php

use App\Http\Controllers\Users\UserController;
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


//auth user
Route::group(['middleware' => ['auth','verified']], function () {

    Route::resource('user', UserController::class);


    //Route::resource('AuthUser', UserController::class);
});
Route::prefix('user')->group(function () {
    Route::resource('User', UserController::class);
});
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });

//Admin


