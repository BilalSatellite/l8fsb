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
//auth user
Route::get('dashbord', function () {
    return view('panel.admin.dashbord');
});
Route::get('profile', function () {
    return view('panel.profile');
});
//Admin
Route::get('users', function () {
    return view('panel.admin.users');
});
Route::get('students', function () {
    return view('panel.admin.students');
});