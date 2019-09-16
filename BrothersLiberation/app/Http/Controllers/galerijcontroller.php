<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Comment;

use DB;


class galerijcontroller extends Controller
{
    public function galerij()
    {
        $fotos = Foto::all();
        return view('galerij', compact('fotos'));
    }

    public function fotodetail(foto $foto)
    {
        $id = $foto->fotoid;
        $comments = DB::table('fotocomments')->where('fotoid', $id)->get();
        return view('Foto', compact('foto', 'comments'));
    }

    public function comment(comment $comment)
    {
        return view('comment', compact('comment'));
    }
}
