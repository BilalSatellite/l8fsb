<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
        if (session('status') == "password-updated"){

          Alert::success('Success', 'Password Change  Successfully.');
       }
        return view('panel.users.change-password');
    }



    public function twofactorauthentication()
    {
        if (session('status') == "two-factor-authentication-enabled"){

            Alert::success('Enable', 'Two factor Authentication has been enabled.');
        }
        if (session('status') == "two-factor-authentication-disabled"){

            Alert::success('Disable', 'Two factor Authentication has been disabled.');
        }
        return view('panel.users.two-factor-authentication');
    }
}
