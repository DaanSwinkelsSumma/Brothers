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
    
    public function newproduct(Request $request)
    {
        return view('newproduct');
    }

    public function storeproduct(Request $request)
    {
        $product = new Product();
        $product->productnaam = $request->name;
        $product->productprijs = $request->prijs;
        $product->productcategorie = $request->categorie;
        $product->productomschrijving = $request->omschrijving;
        $product->productimage = '/img/img-placeholder.png';
        // dd($product);
        $product->save();

        return redirect('/home');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect('/webshop');    
    }

    // public function order(Product $product)
    // {
    //     return view('product', compact('product'));
    // }
}
