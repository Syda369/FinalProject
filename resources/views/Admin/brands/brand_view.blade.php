
@extends('Admin.master')
@section('brand')
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
      <th class="col-md-5 col-xs-5">Brand EN</th>
    
      <th class="col-md-3 col-xs-3">Image</th>
      <th class="col-md-3 col-xs-3">Action</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
    @foreach($brands as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->brand_name_en}}</td>
      {{-- <td>{{$item->brand_name_ar}}</td> --}}
      <td><img src="{{asset($item->brand_image)}}" style="width:70px; height:40px;"></td>
    
        <td>
          <a href="{{route('brand.edit',$item->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
          <a href="{{route('brand.delete',$item->id)}}" class="btn btn-danger" title="Delete" id='delete'><i class="fa fa-trash" ></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    
<form class="Newbrand" method="post" action="{{route('brand.store')}}" enctype="multipart/form-data">
    @csrf
    <h4 class="text-center">New Brand</h4>
    <div class="form-group">
      <label>brand name English</label>
      <input type="text" class="form-control mb-3" name="brand_name_en">
      @error('brand_name_en')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    {{-- <div class="form-group mb-3">
        <label >brand name Arabic</label>
        <input type="text" class="form-control mb-3" name="brand_name_an">
        @error('brand_name_ar')
         
        <span class="text-danger">{{$message}}</span>
          @enderror
      </div> --}}
    <div class="form-group mb-3">
      <label for="exampleInputPassword1">Image</label>
      <input type="file" class="form-control mb-3" name="brand_image" >
      @error('brand_image')
         
        <span class="text-danger">{{$message}}</span>
          @enderror
    </div>
   
     
    <button type="submit" class="btn btn-warning">Add Brand</button>
  </form>
</div>
</div>
@endsection