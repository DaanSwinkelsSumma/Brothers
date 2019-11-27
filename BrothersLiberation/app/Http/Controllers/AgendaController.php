<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webshopstatus;
use App\Activiteit;
use View;

class AgendaController extends Controller
{
    public function __construct()
    {
        $status = Webshopstatus::where('id', 1)->first();
        View::share('status', $status);
    }

    public function agendapagina()
    {
        $activiteiten = Activiteit::all();
        return view('agenda', compact('activiteiten'));
    }

    public function nieuwact()
    {
        return view('nieuwact');
    }
}
