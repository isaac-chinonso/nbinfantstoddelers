<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use Auth;

class WishlistController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
      $user = Auth::user();
      $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
      return view('frontend.wishlist', compact('user', 'wishlists'));
    }

    public function store(Request $request, $id)
    {
    	 $user = Auth::user();

		$status=Wishlist::where('user_id',Auth::user()->id)
		->where('product_id',$id)
		->first();

		if(isset($status->user_id) and isset($id))
		   {
		       return redirect()->back()->with('warning_message', 'This item is already in your 
		       wishlist!');
		   }
		   else
		   {
		       $wishlist = new Wishlist;

		       $wishlist->user_id = $user->id;
		       $wishlist->product_id = $id;
		       $wishlist->save();

		       return redirect()->back()->with('Success_message',
		                     'Item, '. $wishlist->product->title.' Added to your wishlist.');
		   }

	}

	public function destroy($id)
    {
      $wishlist = Wishlist::findOrFail($id);
      $wishlist->delete();

      return redirect()->route('wishlist.index')
          ->with('success_message',
           'Item successfully deleted');
    }
}
