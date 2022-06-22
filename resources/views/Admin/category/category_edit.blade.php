
@extends('Admin.master')
@section('brand')
<div class="wrapper">
    <div class="brand col-8 ">

    </div>
    
<form class="Newbrand" method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <h4 class="text-center">Edit Category</h4>
    <div class="form-group">
      <label>Category name </label>
      <input type="text" class="form-control mb-3" name="category_name" value="{{$category->category_name}}">
      @error('category_name')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label>Category icon</label>
      <input type="text" class="form-control mb-3" name="category_icon"  value="{{$category->category_icon}}">
      @error('category_icon')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
 
   
     
    <button type="submit" class="btn btn-warning">Update</button>
  </form>
</div>
</div>
@endsection