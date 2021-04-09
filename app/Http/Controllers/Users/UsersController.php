<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function dashbord()
    {
        return view('panel.users.dashbord');
    }


    public function profile()
    {
        return view('panel.users.profile');
    }

    public function changepassword()
    {
        return view('panel.users.change-password');
    }
    public function twofactorauthentication()
    {
        return view('panel.users.two-factor-authentication');
    }
}
