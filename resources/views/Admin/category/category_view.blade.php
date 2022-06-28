
@extends('Admin.master')
@section('brand')
<div class="wrapper">
    <div class="brand col-12 ">
<div class="form-group pull-center" >
    <input type="text" class="search form-control" placeholder="What you looking for?"  width="50%">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>ID</th>
      <th class="col-md-5 col-xs-5">Category Icon</th>
    
      <th class="col-md-3 col-xs-3">Category Name</th>
      <th class="col-md-3 col-xs-3">Action</th>
    </tr>
   
  </thead>
  <tbody>
    @foreach($category as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->category_name}}</td>
      <td><span><i class="{{$item->category_icon}}"></i></span></td>
     
     
    
        <td>
          <a href="{{route('category.edit',$item->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
          <a href="{{route('category.delete',$item->id)}}"  class="btn btn-danger" title="Delete" id='delete'><i class="fa fa-trash"></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    
<form class="Newbrand" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
    @csrf
    <h4 class="text-center">New Category</h4>
    <div class="form-group">
      <label>Category name<span class="text-danger">*</span> </label>
      <input type="text" class="form-control mb-3" name="category_name">
      @error('category_name')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label>Category icon<span class="text-danger">*</span></label>
      <input type="text" class="form-control mb-3" name="category_icon">
      @error('category_icon')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
 
   
     
    <button type="submit" class="btn btn-warning">Add new</button>
  </form>
</div>
</div>
@endsection