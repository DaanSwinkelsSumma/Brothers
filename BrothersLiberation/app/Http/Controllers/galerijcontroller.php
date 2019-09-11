<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galerijcontroller extends Controller
{
    public function galerij()
    {
        return view('galerij');
    }
}
