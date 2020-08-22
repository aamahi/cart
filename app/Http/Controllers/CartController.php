<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request){
        $cart =[];
        $cart['product_id'] = $request->product_id;
        $cart['ip_address'] = \request()->ip();
        $cart['quantity'] = '1';

        if(Cart::where('product_id',$request->product_id)->where('ip_address',\request()->ip())->exists()){
            Cart::where('product_id',$request->product_id)->where('ip_address',\request()->ip())->increment('quantity', 1);
            $notification = array(
                'message' => "Product increment",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            Cart::insert($cart);
            $notification = array(
                'message' => "Product Added to Cart",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function cart(){
        $carts = Cart::with('products')->get();
        return view('frontend.cart',compact('carts'));
    }

}
