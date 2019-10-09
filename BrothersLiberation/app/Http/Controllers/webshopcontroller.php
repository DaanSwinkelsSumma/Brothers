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
        $status = DB::table('webshopstatus')->select('status')->first();
        if ($status->status == 1) {
            $products = Product::all();
            $cats = DB::table('webshop')->select('productcategorie')->distinct()->get();
            return view('webshop', compact('products', 'cats'));
        } else {
            return view('404webshop');
        }
    }

    public function webshop_on()
    {   
        $status = Webshopstatus::where('id', 1)->first();
        $status->status = 1;
        $status->save();

        file_put_contents(app()->environmentFilePath(), str_replace(
            'WEBSHOP_STATUS' . '=' . '0',
            'WEBSHOP_STATUS' . '=' . '1',
            file_get_contents(app()->environmentFilePath())
        ));

        return redirect('/home');
    }

    public function webshop_off()
    {
        $status = Webshopstatus::where('id', 1)->first();
        $status->status = 0;    
        $status->save();

        file_put_contents(app()->environmentFilePath(), str_replace(
            'WEBSHOP_STATUS' . '=' . '1',
            'WEBSHOP_STATUS' . '=' . '0',
            file_get_contents(app()->environmentFilePath())
        ));

        return redirect('/home');
    }

    public function productdetail(Product $product)
    {
        return view('product', compact('product'));
    }
}
