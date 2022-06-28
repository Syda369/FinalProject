
@extends('Admin.master')
@section('image')



<div class="wrapper">
    <div class="brand col-12 ">

<form class="Newbrand" method="post" action="{{route('image.update',$image->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$image->id}}">
    <input type="hidden" name="old_image" value="{{$image->image}}">
    <h4 class="text-center">update image</h4>
    <div class="form-group">
      <label>title</label>
      <input type="text" class="form-control mb-3" name="title" value="{{$image->title}}">
      @error('title')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="exampleInputPassword1">Image</label>
      <input type="file" class="form-control mb-3" name="image" >
      @error('image')
         
        <span class="text-danger">{{$message}}</span>
          @enderror
    </div>
   
     
    <input type="submit" class="btn btn-primary mb-5" value="Update" >
  </form>
</div>
</div>
@endsection
