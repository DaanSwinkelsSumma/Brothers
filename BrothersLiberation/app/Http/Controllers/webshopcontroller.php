<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class webshopcontroller extends Controller
{
    //
    public function webshoppage()
    {
        $status = DB::table('webshopstatus')->select('status')->get();
        if ($status == 'Aan') {
            return view('webshop');
        } else {
            abort(404);

        }
        
    }
}
