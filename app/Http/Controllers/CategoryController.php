<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    //
    public function CategoryView(){

      
            $category=Category::latest()->get();
            return view('Admin.category.category_view',compact('category'));
           }
          public function  CategoryStore(Request $request){
            $request->validate([
                'category_name'=>'required',
               
                'category_icon'=>'required',
             ],[
                 'category_name.required'=>'Insert Category name',
                 
             ]);
            
         Category::insert([
         'category_name'=>$request->category_name,
        
         'category_slug'=>strtolower(str_replace(' ','-',$request->brand_name_en)),
         'category_icon' =>$request->category_icon,
         
         ]);
         $notification = array(
         
         'message'=>'catogery Inserted Successfully',
         'alert-type'=>'success'
         );
         return redirect()->back()->with($notification);
           }
         
         
          public function CategoryEdit($id){
            $category=Category::findOrFail($id);
            return view('Admin.Category.category_edit',compact('category'));
        

          }
public function CategoryUpdate(Request $request){
    $cat_id=$request->id;
    $request->validate([
        'category_name'=>'required',
       
        'category_icon'=>'required',
     ],[
         'category_name.required'=>'Insert Category name',
         
     ]);
    
 Category::findOrFail($cat_id)->update([
 'category_name'=>$request->category_name,

 'category_slug'=>strtolower(str_replace(' ','-',$request->brand_name_en)),
 'category_icon' =>$request->category_icon,
 
 ]);
 $notification = array(
 
 'message'=>'catogery updated Successfully',
 'alert-type'=>'success'
 );
 return redirect()->route('view.category')->with($notification);
   
 
 




}
public function CategoryDelete($id){
    Category::findOrFail($id)->delete();
    $notification = array(
 
        'message'=>'catogery Deleted Successfully',
        'alert-type'=>'success'
        );
        return redirect()->route('sub.category')->with($notification);
          
        
        

}
          
    }

