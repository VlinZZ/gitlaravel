<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontrol extends Controller
{
public function valin()
{
    return view('about.valin');
}
public function rell()
{
    return view('about.rell');
}
public function fiq()
{
    return view('about.fiq');
}

}
