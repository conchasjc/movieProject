<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use App\post;
use Session;
class movieCart extends Controller
{
    //
    public function getIndex()
    {
        $movies=post::all();
        
    }
    public function getAddToCart(Request $request,$id)
    {
        $movie=post::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new cart($oldCart);
        $cart->add($movie,$movie->id);

        $request->session()->put('cart',$cart);
       
        return redirect()->route('index');
    }
    public function getCart(){
        if(!Session::has('cart')){
            return view('Pages.viewCart');
        }
        $oldCart=Session::get('cart');
        $cart=new cart($oldCart);
        return view('Pages.viewCart',['movie'=>$cart->movie,'totalPrice'=>$cart->totalPrice]);
    }
}
