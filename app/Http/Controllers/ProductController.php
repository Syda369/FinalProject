<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
    //
   public function addProduct(){
    $categories =Category::latest()->get();
    $brand=Brand::latest()->get();
    return view('Admin.products.product_add',compact('categories','brand'));
   }
   public function getSubCategory($category_id){
    $subcat=SubCategory::where('category_id',$category_id)->orderBy('subCategory_name','ASC')->get();
    return json_encode($subcat);
    }
    public function StoreProduct(Request $request){

    
        $image = $request->file('product_image');
                               
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/products'.$name_gen);
    	$save_url = 'upload/products'.$name_gen;
     
Product::insert([
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'product_name' => $request->product_name,
        'product_name_slug'=> strtolower(str_replace(' ', '-', $request->product_name_slug)),
        'product_code' => $request->product_code,
        'product_qty' => $request->product_qty,
        'product_size' => $request->product_size,
        'selling_price' => $request->selling_price,
   
        'long_descp' => $request->long_descp,
        'product_image' => $save_url,
        'status' => 1,
        'created_at' => Carbon::now(),   	 
        'updated_at' => Carbon::now(),  



        
    ]);
    $notification = array(
        'message' => 'Product Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('manage-product')->with($notification);

    }
    
  public function  ManageProduct(){
$products=Product::latest()->get();
return view('Admin.products.product_view',compact('products'));

  }
  public function   editProduct($id){
    $categories=Category::latest()->get();
    $brand=Brand::latest()->get();
    $subcategories=SubCategory::latest()->get();
     $product=Product::findOrFail($id);
     return view('Admin.products.product_edit',compact('categories','brand','subcategories','product'));


  }

  public function ProductInactive($id){

    Product::findOrFail($id)->update(['status'=>0]);
    $notification = array(
        'message' => 'Product Inactive',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    
    
  }
  public function ProductActive($id){
    Product::findOrFail($id)->update(['status'=>1]);
    $notification = array(
        'message' => 'Product Active',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    
    
}

public function ProductDelete($id){
    $product = Product::findOrFail($id);
    unlink($product->product_image);
    Product::findOrFail($id)->delete();
    $notification = array(
        'message' => 'Product Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

 }// end method 
}
