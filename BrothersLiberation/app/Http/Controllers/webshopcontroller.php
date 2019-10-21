<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Webshopstatus;
use App\Filter;
use View;

class webshopcontroller extends Controller
{
    public function __construct()
    {
        $status = Webshopstatus::where('id', 1)->first();
        View::share('status', $status);
    }
    
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

        return redirect('/home');
    }

    public function webshop_off()
    {
        $status = Webshopstatus::where('id', 1)->first();
        $status->status = 0;    
        $status->save();

        return redirect('/home');
    }

    public function productdetail(Product $product)
    {
        return view('product', compact('product'));
    }


    public function filter(string $filter)
    {
        // $prodcat = $product->productcategorie;
        // dd($filter);

        $status = DB::table('webshopstatus')->select('status')->first();
        if ($status->status == 1) {
            $products = Product::all()->where('productcategorie', $filter);
            $cats = DB::table('webshop')->select('productcategorie')->distinct()->get();
            return view('webshop', compact('products', 'cats'));
        } else {
            return view('404webshop');
        }
    }


    public function order(Product $product)
    {

        return view('product', compact('product'));
    }
}
