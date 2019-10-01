<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Webshopstatus;

class webshopcontroller extends Controller
{
    //
    public function webshoppage()
    {
        $status = DB::table('webshopstatus')->select('status')->get();
        if ($status == 'Aan') {
            return view('webshop');
        } else {
            return view('404webshop');
        }
        
    }

    public function webshop_on()
    {
        $status = Webshopstatus::find(1);
        $status->status = 'Aan';
        $status->save();

        return redirect('/');
    }

    public function webshop_off()
    {
        $status = Webshopstatus::find(1);
        $status->status = 'Uit';
        $status->save();

        return redirect('/');
    }
}
