<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $status = DB::table('webshopstatus')->select('status')->get();
        return view('home', compact('status'));
    }

    public function main()
    {
        return view('welcome');
    }
}
