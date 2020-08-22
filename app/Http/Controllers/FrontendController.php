<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::all();
        $carts = Cart::with('products')->get();
        return view('frontend.index',compact('categories','products','carts'));
    }
}
