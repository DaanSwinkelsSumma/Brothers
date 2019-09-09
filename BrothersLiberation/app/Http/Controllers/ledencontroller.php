<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ledencontroller extends Controller
{
    public function leden()
    {
        $leden = User::all();
        return view('leden', compact('leden'));
    }

    public function nieuwlidpage()
    {
        return view('newuser');
    }
}
