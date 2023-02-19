<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    function login(Request $request)
    {

        if ($request->cnic == 33100 && $request->password == 123) {
            // echo "ok";
            Session::put('user', $request->cnic);
            return redirect('/');
        }
        else
         {
            return redirect('login');
        }
    }

    function logout()
    {
        Session::flush();
        return redirect('login');
    }
}

