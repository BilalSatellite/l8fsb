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
        return view('panel.profile');
    }
}
