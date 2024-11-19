<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan data pertama dari tabel users
    public function getFirstUser()
    {
        $user = User::first();
        return response()->json($user);
    }

    // Menampilkan data dengan kondisi 'where'
    public function getUserByCondition($email)
    {
        $user = User::where('email', $email)->first();
        return response()->json($user);
    }
}
