<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Country;
use App\State;
use App\Product;
use App\Image;
use App\Review;
use Storage;
use App\Cart;
use Session;

class ProductController extends Controller
{
    
    Public function post_product()
    {
    	$data['category'] = Category::all();
    	$data['country'] = Country::all();
    	$data['state'] = State::all();
        return view('User.postproduct',$data);
    }

    Public function myproduct()
    {
        $user = Auth::user();
        $data['product'] = Product::where('status',1)->paginate(10);
        $data['products'] = Product::where('status',1)->where('user_id',$user->id)->count();
        return view('User.myproduct',$data);
    }

     Public function review($slug)
    {
        $data['productdetail'] = Product::where('slug',$slug)->first();
        return view('User.review',$data);
    }

    //post review Function
    public function postreview(Request $request, $id)
    {
        
            $user = Auth::user();
             // Validation
            $this->validate($request, [
                'rate' => 'required',
                'comment' => 'required',
            ]);

            $rate = $request['rate'];

            $comment = $request['comment'];

            // Save Record into review DB
            $review = new review();
            $review->user_id = $user->id;
            $review->profile_id = $user->profile->first()->id;
            $review->product_id = $id;
            $review->rate = $rate;
            $review->comment = $comment;
            $review->status = 1;
            $review->save();


            \Session::flash('Success_message','✔ Review posted');

            return redirect()->back();
    }

     public function deleteproduct($id)
    {
        // Delete product
        $product = Product::where('id',$id)->first();
        Storage::delete($image->source);
        $product->delete();
        
        \Session::flash('success_message','You Have Successfully Deleted this product');

         return back();
    }

    //Save products Function
    public function saveproduct(Request $request)
    {
    	$user = Auth::user();
         // Validation
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'description' => 'required',
            'size' => 'required',
            'type' => 'required',
            'quantity' => 'required',
            'brand' => 'required',
        ]);

        $category_id = $request['category_id'];

        $title = $request['title'];

        $price = $request['price'];

        $country_id = $request['country_id'];

        $state_id = $request['state_id'];

        $city = $request['city'];

        $description = $request['description'];

        $size = $request['size'];

        $type = $request['type'];

        $quantity = $request['quantity'];

        $brand = $request['brand'];

        $image = $request['image'];       
        $filename = $image->getClientOriginalName();        
        $destination = 'upload/images';      
        $image->move($destination, $filename);

       
        // Save Record into products DB
        $product = new Product();
        $product->user_id = $user->id;
        $product->category_id = $category_id;
        $product->title = $title;
        $product->price = $price;
        $product->description = $description;
        $product->country_id = $country_id;
        $product->state_id = $state_id;
        $product->city = $city;
        $product->size = $size;
        $product->type = $type;
        $product->quantity = $quantity;
        $product->brand = $brand;
        $product->slug = '';
        $product->status = 1;
        $product->save();

         // Save Record into image DB
        $image = new Image();
        $image->product_id = $product->id;
        $image->source = $filename;
        $image->save();


        \Session::flash('Success_message','✔ Congratulations! Your ad will be available soon.');

        return redirect()->route('post_product');
    }

    public function addtocart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);

        \Session::flash('Success_message','✔ added to cart Successfully.');
        return redirect()->back();
    }

    public function getcart()
    {
        if (!Session::has('cart')) {
            return view('Frontend.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('Frontend.cart', ['product' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
