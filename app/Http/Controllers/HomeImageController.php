<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imageHome;
use Carbon\Carbon;
use Image;

class HomeImageController extends Controller
{
    //
    public function imagesView(){
        $images=imageHome::latest()->get();
        return view('Admin.Images.image_view',compact('images'));
       }


       public function  ImageStore(Request $request){
        $request->validate([
           'title'=>'required',
          
           'image'=>'required',
        ],[
            'title'=>'Insert Title ',
            
        ]);
        $image=$request->file('image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                                         
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $save_url='upload/brand/'.  $name_gen;
        imageHome::insert([
    'title'=>$request->title,
    
  
    'image'=> $save_url,
    
    
    ]);
    $notification = array(
    
    'message'=>'Image Inserted Successfully',
    'alert-type'=>'success'
    );
    return redirect()->back()->with($notification);
      }
      
  public function ImageEdit($id){
    $image=imageHome::findOrFail($id);
    return view('Admin.Images.image_edit',compact('image'));

  }
  public function ImageUpdate(Request $request){
    $id=$request->id;
    $old_img=$request->old_image;
    if($request->file('image')){
      unlink( $old_img);
    $image=$request->file('image');
    $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                                     
    Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
    $save_url='upload/brand/'.  $name_gen;
    imageHome::findOrFail($id)->update([
'title'=>$request->title,



'image'=> $save_url,


]);
$notification = array(

'message'=>'image updated Successfully',
'alert-type'=>'info'
);
return redirect()->route('manage-image')->with($notification);
  

    }else{
        imageHome::findOrFail($id)->update([
        'title'=>$request->title,
       
  
        
        
        ]);
        $notification=array(
        
        'message'=>'image updated Successfully',
        'alert-type'=>'info'
        );
        
        return redirect()->route('manage-image')->with($notification);
          
        
    }

  }
  public function ImageDelete($id){
   $image= imageHome::findOrFail($id);
   $img=$image->image;
   unlink($img);
   imageHome::findOrFail($id)->delete();
$notification=array(
        
  'message'=>'image Deleted Successfully',
  'alert-type'=>'success'
  );
  
  return redirect()->back()->with($notification);
    
  }
}
