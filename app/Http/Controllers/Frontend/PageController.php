<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Profile;
use App\Product;
use App\Image;
use App\Review;

class PageController extends Controller
{
    Public function index()
    {
    	$data['product'] = Product::where('status',1)->paginate(20);
        $products = request()->session()->get('cart');
        if ($products) {
            $totalCostInCent = $products->totalCost * 100;
        }
    	return view('Frontend.index',$data);
    }

    Public function productdetail(Request $request, $slug)
    {
    	$data['productdetail'] = Product::where('slug',$slug)->first();
    	$data['review'] = review::where('product_id',$data['productdetail']->id)->get();
    	return view('Frontend.productdetail',$data);
    }

     Public function blog()
    {
    	return view('Frontend.blog');
    }

     Public function contact()
    {
    	return view('Frontend.contact');
    }

     Public function register()
    {
    	return view('Frontend.register');
    }

     Public function login()
    {
    	return view('Frontend.login');
    }

     Public function account()
    {
    	return view('User.account');
    }

     Public function myaccount()
    {
    	return view('User.myaccount');
    }

    //update profile Function

    public function updateprofile (Request $request)
    {
            $user = Auth::user();

            $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            
            ]);

            $fname = $request['fname'];
            $lname = $request['lname'];
            $phone = $request['phone'];
            $country = $request['country'];
            $state = $request['state']; 
            $city = $request['city'];        

                Profile::where(['user_id' => $user->id])
                ->update(array('fname' => $fname,
                               'lname' => $lname, 
                               'phone' => $phone,
                               'country' => $country,
                               'state' => $state,
                               'city' => $city,
                               ));

                \Session::flash('Success_message','You Have Successfully updated your profile');
                return redirect()->route('account');
    }
}
