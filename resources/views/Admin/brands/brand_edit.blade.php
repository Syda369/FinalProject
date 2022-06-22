
@extends('Admin.master')
@section('brand')



<div class="wrapper">
    <div class="brand col-12 ">

<form class="Newbrand" method="post" action="{{route('brand.update',$brand->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$brand->id}}">
    <input type="hidden" name="old_image" value="{{$brand->brand_image}}">
    <h4 class="text-center">New Brand</h4>
    <div class="form-group">
      <label>brand name English</label>
      <input type="text" class="form-control mb-3" name="brand_name_en" value="{{$brand->brand_name_en}}">
      @error('brand_name_en')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="exampleInputPassword1">Image</label>
      <input type="file" class="form-control mb-3" name="brand_image" >
      @error('brand_image')
         
        <span class="text-danger">{{$message}}</span>
          @enderror
    </div>
   
     
    <input type="submit" class="btn btn-primary mb-5" value="Update" >
  </form>
</div>
</div>
@endsection
