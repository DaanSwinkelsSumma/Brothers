<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webshopstatus;
use App\Activiteit;
use View;
use DB;

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

    public function storeact(Request $request)
    {
        $act = new Activiteit();

        $act->omschrijving = $request->omschrijving;
        $act->startdatum = $request->startdatum;
        $act->einddatum = $request->einddatum;
        $act->starttijd = $request->starttijd;
        $act->eindtijd = $request->eindtijd;        
        $act->save();

        return redirect('/agenda');
    }

    public function delact(Activiteit $activiteit)
    {
        $activiteit->delete();
        return redirect('/agenda');
    }

    public function maand(string $maand)
    {
        $activiteiten = Activiteit::whereMonth('startdatum', $maand)->get();
        // dd($activiteiten);
        return view('agenda', compact('activiteiten'));
    }

    public function date(Request $request)
    {
        $activiteiten = Activiteit::where('startdatum', $request->date)->get();
        return view('agenda', compact('activiteiten'));
    }
}
