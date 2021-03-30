<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Buy;

class CartController extends Controller
{
    public function index(){
        if(auth()->user()->cart){

            $cart = auth()->user()->cart->get();
            $carts = auth()->user()->cart->pluck('product_id');
            $product = Product::wherein('id',$carts)->get();
            
            return view('cart',compact('cart','product'));
        }
        else{
            return redirect()->route('home');
        }
    }
    
    public function store(Request $request){
        $user_id=auth()->user()->id;
        $product_id=$request->product_id;
        Cart::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);
        return redirect()->route('home');
    }
    public function buy(Request $request){
        
        $user =auth()->user()->id;
        
        Buy::create([
            'user_id' => $user,
            'product_id' => $request->product,
        ]);
        $boughtproduct = Cart::where('product_id',$request->product)->where('user_id',$user);
        $boughtproduct->delete();
        //Cart::update();     to do after quantity this is just firstphase
        return redirect('/cart');

    }
}
