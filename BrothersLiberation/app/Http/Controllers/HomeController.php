<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Webshopstatus;
use View;


class HomeController extends Controller
{
    public function __construct()
    {
        $status = Webshopstatus::where('id', 1)->first();
        View::share('status', $status);
    }

    public function index()
    {
        $status = DB::table('webshopstatus')->select('status')->first();
        return view('home', compact('status'));
    }

    public function main()
    {
        return view('welcome');
    }

    public function agenda()
    {
        return view('agenda');
    }
}
