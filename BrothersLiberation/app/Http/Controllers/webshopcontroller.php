<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Webshopstatus;
use App\Product;


class webshopcontroller extends Controller
{
    //
    public function webshoppage()
    {
        // $status = Webshopstatus::pluck('status');
        $status = DB::table('webshopstatus')->select('status')->first();
        if ($status->status == 1) {
            $products = Product::all();
            return view('webshop', compact('products'));
        } else {
            return view('404webshop');
        }
    
    }

    public function webshop_on()
    {   
        // $status = DB::table('webshopstatus')->select('status')->first();
        // dd($status);
        $status = Webshopstatus::where('id', 1)->first();
        $status->status = 1;
        $status->save();

        return redirect('/');
    }

    public function webshop_off()
    {
        $status = Webshopstatus::where('id', 1)->first();
        $status->status = 0;    
        $status->save();

        return redirect('/');
    }
}
