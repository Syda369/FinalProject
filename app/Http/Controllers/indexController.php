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
    return view('body.productDetail',compact('product'));
    }
    //subcategory data 

    public function subacategroypro($subcat_id,$slug){

		$products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->get();
		$categories = Category::orderBy('category_name','ASC')->get();
		return view('Admin.products.subcategory_view',compact('products','categories'));


    }

       
  public function  shope(){
    $products=Product::latest()->paginate(1);
  
    return view('body.product',compact('products'));

    
      }
}
