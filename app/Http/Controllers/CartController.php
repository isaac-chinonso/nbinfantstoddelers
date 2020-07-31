<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Country;
use App\State;
use App\Product;
use App\Image;
use App\Review;
use App\Cart;
use Session;

class CartController extends Controller
{
    //
    public function index($slug) {
        $data['product'] = Product::where('slug',$slug)->first();
        $data['category'] = Category::where('status',1)->orderBy('title','ASC')->get();
        $products = request()->session()->get('cart');
        if ($products) {
            $totalCostInCent = $products->totalCost * 100;
        }
        $data['relatedproduct'] = Product::where('status',1)->where('category_id',$data['product']->category_id)->where('id', '!=',$data['product']->id)->limit(20)->get();
        return view('cart.index',compact('products', 'totalCostInCent'),$data);
    }

    public function addtocart(Product $product)
    {
        $oldCart = request()->session()->has('cart') ? request()->session()->get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product);

        request()->session()->put('cart', $cart);

        return back();
    }

    public function cart() {
    	$products = request()->session()->get('cart');
        if ($products) {
            $totalCostInCent = $products->totalCost * 100;
        }
        return view('frontend.cart', compact('products', 'totalCostInCent'));
    }
    
    public function reduceByOne($id)
    {
        $oldCart = request()->session()->has('cart') ? request()->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            request()->session()->put('cart', $cart);
        } else {
            request()->session()->forget('cart');
        }
        return back();
    }

    public function removeItem($id)
    {
        $oldCart = request()->session()->has('cart') ? request()->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            request()->session()->put('cart', $cart);
        } else {
            request()->session()->forget('cart');
        }
        return redirect()->route('homepage');
    }
}
