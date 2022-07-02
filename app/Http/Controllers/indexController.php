<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
class indexController extends Controller
{
    //
    public function index(){
        return view('body.index');
    }
    public function ProDetails($id){

        $product=Product::findOrFail($id);
        $sizes=$product->product_size;
        $size_v=explode(',',  $sizes);
    return view('body.productDetail',compact('product','size_v'));
    }
    //subcategory data 

    public function subacategroypro($subcat_id,$slug){

		$products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->get();
		$categories = Category::orderBy('category_name','ASC')->get();
		return view('Admin.products.subcategory_view',compact('products','categories'));


    }

       //product page view
  public function  shope(){
    $products=Product::latest()->paginate(1);
  
    return view('body.product',compact('products'));

    
      }
      //product view with ajax
      public function productViewajax($id){
        $product = Product::findOrFail($id);
      
        $product = Product::with('category','brand')->findOrFail($id);
    
    
        $size = $product->product_size;
        $product_size = explode(',', $size);
        return response()->json(array(
          'product' => $product,
        'size' => $product_size,
        ));
      } // end met


      
}
