<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webshopstatus;
use Redirect,Response,DB,Config,View;
use Mail;
use App\Product;

class EmailController extends Controller
{
    public function __construct()
    {
        $status = Webshopstatus::where('id', 1)->first();
        View::share('status', $status);
    }

    public function sendEmail(Request $request)
    {
        $products = session()->get('cart');

        $text = $request->mailbody;
        $adres = $request->mailadres;
        $aantal = $request->aantal;


        $to_name = 'Brothers of Liberation';
        $to_email = 'ps181583@summacollege.nl';
        $data = array('name'=> $to_name, "body" => $text, 'aantal'=> $aantal, 'products'=> $products);

        Mail::send('testmail', $data, function($message) use ($to_name, $to_email, $adres) {
            $message->to($to_email, $to_name)
            ->subject('Bestelling');
            $message->from($adres,'Bestelling'); 

        });

        // return redirect()->action('webshopcontroller@webshoppage');
        session()->forget('cart');

        return redirect('/webshop');   

        
        

    }
}
