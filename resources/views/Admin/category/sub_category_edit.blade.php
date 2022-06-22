
@extends('Admin.master')
@section('brand')
<div class="wrapper">
    <div class="brand col-8 ">

    
<form class="Newbrand" method="post" action="{{route('subcategory.update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$subcategory->id}}">
        <h4 class="text-center mb-3 mt-3">Edit Sub Category</h4>
    <div class="form-group">
        {{-- <h5>Category select <span class="text-danger"></span></h5> --}}
        <div class="controls mb-3">
            
            <select name="category_id" class="form-control"  >
                <option value="" selected="" disabled="">Select Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected': ''}} >{{ $category->category_name }}</option>
        @endforeach   
    </select>
                        
       
                @error('category_id')
    
                <span class="text-danger">{{$message}}</span>
                    @enderror
</div>
</div>

    <div class="form-group">
      <label>Sub Category name </label>
      <input type="text" class="form-control mb-3" name="subCategory_name" value="{{$subcategory->subCategory_name}}">
      @error('subCategory_name')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  
 
   
     
    <button type="submit" class="btn btn-warning">Update</button>
  </form>
</div>
</div>
@endsection