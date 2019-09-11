<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webshopcontroller extends Controller
{
    //
    public function webshoppage()
    {
        return view('webshop');
    }
}
