<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{

  public function  subCategoryView(){

    $categories=Category::orderBy('category_name','ASC')->get();
    $subcategory=SubCategory::latest()->get();
    return view('Admin.category.sub_category_view',compact('categories','subcategory'));


  } 
   public function  SubCategoryStore(Request $request){
 
    $request->validate([
        'category_id'=>'required',
        'subCategory_name'=>'required',
       
         ],[
        'category_id.required'=>'Please Select Category',
         'subCategory_name.required'=>'Insert Sub Category name',
             ]);
    
     SubCategory::insert([
    'category_id'=>$request->category_id,
    'subCategory_name'=>$request->subCategory_name,

    'subCategory_name_slug'=>strtolower(str_replace(' ','-',$request->subCategory_name)),

 ]);
 $notification = array(
 
 'message'=>'SubCatogery Inserted Successfully',
 'alert-type'=>'success'
 );
 return redirect()->back()->with($notification);
   }
 public function subCategoryEdit($id){

    $categories=Category::orderBy('category_name','ASC')->get();
    $subcategory=SubCategory::findOrFail($id);
    return view('Admin.category.sub_category_edit',compact('subcategory','categories'));


 }
 public function subCategoryUpdate(Request $request){

    $subcat_id=$request->id;
    
    $request->validate([
        'category_id'=>'required',
        'subCategory_name'=>'required',
       
         ],[
        'category_id.required'=>'Please Select Category',
         'subCategory_name.required'=>'Insert Sub Category name',
             ]);
    
     SubCategory::findOrFail($subcat_id)->update([
    'category_id'=>$request->category_id,
    'subCategory_name'=>$request->subCategory_name,

    'subCategory_name_slug'=>strtolower(str_replace(' ','-',$request->subCategory_name)),

 ]);
 $notification = array(
 
 'message'=>'SubCatogery updated Successfully',
 'alert-type'=>'info'
 );
 return redirect()->route('sub.category')->with($notification);
   
 }
 public function subCategoryDelete($id){
  SubCategory::findOrFail($id)->delete();
  $notification = array(

      'message'=>'Subcatogery Deleted Successfully',
      'alert-type'=>'success'
      );
      return redirect()->back()->with($notification);
        
      
      

}

}
