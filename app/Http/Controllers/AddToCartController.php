<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use Carbon\Carbon;

class AddToCartController extends Controller
{
    public function AddToCart(Request $request, $id){
        $product=Product::findOrFail($id);
      

        Cart::add([
            'id' => $id,
             'name' => $request->product_name, 
             'qty' => $request->qty, 
             'price' => $product->selling_price , 
             'weight' => 1, 
             'options' => [
             'image' => $product->product_image,
             'size' => $request->size,
         
             ],
            ]);
            return response()->json(['success' => 'Successfully Added on Your Cart']);
    }

    public function MyCart(){
        return view('body.cart');

    }
    public function GetCartProduct(){
        $carts = Cart::content();
    	$cartQty = Cart::count();
    	$cartTotal = Cart::total();

    	return response()->json(array(
    		'carts' => $carts,
    		'cartQty' => $cartQty,
    		'cartTotal' => round($cartTotal),

    	));

    } //end method 

    //cart remove
    public function RemoveCartProduct($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Cart']);
    }




 // Cart Increment 
 public function CartIncrement($rowId){
    $row = Cart::get($rowId);
    Cart::update($rowId, $row->qty + 1);

    return response()->json('increment');

} // end mehtod 
  // Cart Decrement  
  public function CartDecrement($rowId){

    $row = Cart::get($rowId);
    Cart::update($rowId, $row->qty - 1);

    return response()->json('Decrement');

}// end mehtod 







}
