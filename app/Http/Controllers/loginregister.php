<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginregister extends Controller
{
public function login()
{
    return view('loginreg.login');
}

}
