<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class galerijcontroller extends Controller
{
    public function galerij()
    {
        $fotos = Foto::all();
        return view('galerij', compact('fotos'));
    }
}
