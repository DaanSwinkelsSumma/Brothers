<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;


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
    public function lid(User $user)
    {
        return view('lid', compact('user'));
    }

    public function store()
    {
        $user = new User();

        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->Bijnamen = Input::get('Bijnamen');
        $user->Omschrijving = Input::get('Omschrijving');
        $user->password =  bcrypt(Input::get('password'));

        $user->save();

        return redirect('/');
    }
}
