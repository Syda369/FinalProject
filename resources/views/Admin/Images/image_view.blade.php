
@extends('Admin.master')
@section('image')
<div class="wrapper">

    <div class="brand col-8 ">
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>ID</th>
      <th class="col-md-5 col-xs-5">Title</th>
    
      <th class="col-md-3 col-xs-3">Image</th>
      <th class="col-md-3 col-xs-3">Action</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
    @foreach($images as $image)
    <tr>
      <th scope="row">{{$image->id}}</th>
      <td>{{$image->title}}</td>
   
      <td><img src="{{asset($image->image)}}" style="width:70px; height:40px;"></td>
    
        <td>
          <a href="{{route('image.edit',$image->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
          <a href="{{route('image.delete',$image->id)}}" class="btn btn-danger" title="Delete" id='delete'><i class="fa fa-trash" ></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    
<form class="Newbrand" method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
    @csrf
    <h4 class="text-center">New Image</h4>
    <div class="form-group">
      <label>Title <span class="text-danger">*</span></label>
      <input type="text" class="form-control mb-3" name="title">
      @error('title')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="exampleInputPassword1">Image<span class="text-danger">*</span></label>
      <input type="file" class="form-control mb-3" name="image" >
      @error('image')
         
        <span class="text-danger">{{$message}}</span>
          @enderror
    </div>
   
     
    <button type="submit" class="btn btn-warning">Add Image</button>
  </form>
</div>
</div>
@endsection