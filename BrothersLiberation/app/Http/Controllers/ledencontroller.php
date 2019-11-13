<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Webshopstatus;
use View;



class ledencontroller extends Controller
{
    public function __construct()
    {
        $status = Webshopstatus::where('id', 1)->first();
        View::share('status', $status);
    }

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

    public function edit(User $user)
    {
        return view('editmember', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->name = Input::get('naam');
        $user->email = Input::get('email');
        $user->Bijnamen = Input::get('bijnaam');
        $user->Omschrijving = $request->omschrijving;

        $user->save();

        return redirect('/');
    }

    public function store()
    {
        $user = new User();

        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->Bijnamen = Input::get('Bijnamen');
        $user->Omschrijving = Input::get('Omschrijving');
        $user->password =  bcrypt(Input::get('password'));
        // $user->userimage =  Input::get('image');

        $user->save();

        return redirect('/');
    }
}
