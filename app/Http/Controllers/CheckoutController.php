<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Stripe;
use App\Cart;
use App\Checkout;
use App\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = request()->session()->get('cart');
        if ($products) 
        {
            $totalCostInCent = $products->totalCost * 100;
        }
    
        return view('Checkout.index',compact('products', 'totalCostInCent'));
    }

    public function pay()
    {
        $products = request()->session()->get('cart');
        if ($products) 
        {
            $totalCostInCent = $products->totalCost * 100;
        }
        return view('checkout.payment',compact('products', 'totalCostInCent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkoutstore(Request $request)
    {
        
            $user = Auth::user();

            $transaction = strtoupper(str_random(4)).time();

             // Validation
            $this->validate($request, [
                'email' => 'required',
                'name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'postalcode' => 'required',
                'phone' => 'required',
            ]);

            $email = $request['email'];

            $name = $request['name'];

            $address = $request['address'];

            $city = $request['city'];

            $postalcode = $request['postalcode'];

            $phone = $request['phone'];

            // Save Record into checkout DB
            $checkout = new Checkout();
            $checkout->transaction_id = $transaction;
            $checkout->email = $email;
            $checkout->name = $name;
            $checkout->address = $address;
            $checkout->city = $city;
            $checkout->postalcode = $postalcode;
            $checkout->phone = $phone;
            $checkout->save();

            foreach($request['product_id'] as $pp)
            {
                $order = new Order();
                $order->user_id = $user->id;
                $order->transaction_id = $transaction;
                $order->product_id = $pp;
                $order->save();
            }
            


            \Session::flash('Success_message','✔ Review posted');

            return redirect()->route('pay');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
