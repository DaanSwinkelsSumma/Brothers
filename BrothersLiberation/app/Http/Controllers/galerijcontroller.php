<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Textarea;
use Illuminate\Support\Facades\Input;
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

    public function newcommentpage(foto $foto)
    {
        return view('newcomment', compact('foto'));
    }

    public function addcomment(foto $foto, Request $request)
    {
        $comment = new Comment();

        // $comment->comment = Textarea::get('comment'); 
        $comment->comment = $request->comment;
        $comment->fotoid = $foto->fotoid;
        $comment->username = Input::get('username');

        $comment->save();

        return redirect('/');
    }
}
