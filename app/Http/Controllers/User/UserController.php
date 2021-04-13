<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function dashbord()
    {
        return view('panel.user.dashbord');
    }


    public function profile()
    {
        return view('panel.user.profile');
    }

    public function changepassword()
    {
        if (session('status') == "password-updated"){

          Alert::success('Success', 'Password Change  Successfully.');
       }
        return view('panel.user.change-password');
    }



    public function twofactorauthentication()
    {
        if (session('status') == "two-factor-authentication-enabled"){

            Alert::success('Enable', 'Two factor Authentication has been enabled.');
        }
        if (session('status') == "two-factor-authentication-disabled"){

            Alert::success('Disable', 'Two factor Authentication has been disabled.');
        }
        return view('panel.user.two-factor-authentication');
    }
}
