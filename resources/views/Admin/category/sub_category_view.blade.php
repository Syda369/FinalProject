
@extends('Admin.master')
@section('brand')
<div class="wrapper">
    <div class="brand col-8 ">
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results" >
  <thead>
    <tr>
      {{-- <th>ID</th> --}}
      <th class="col-md-5 col-xs-5">Category</th>
    
      <th class="col-md-3 col-xs-3">Sub Category Name</th>
      <th class="col-md-3 col-xs-3">Action</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
 
    @foreach($subcategory as $item)
  
    <tr>
      @if(isset($item['Category']['category_name']))
      <th scope="row">{{$item['Category']['category_name']}}</th>

      <td>{{$item->subCategory_name}}</td>
    
         <td> <a href="{{route('subcategory.edit',$item->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
          <a href="{{route('subcategory.delete',$item->id)}}" class="btn btn-danger"  title="Delete" id='delete'><i class="fa fa-trash"></i></a></td>
    </tr>
    
    @endif
    @endforeach
 
 
  </tbody>
</table>
    </div>
    
<form class="Newbrand" method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
    @csrf
        <h4 class="text-center mb-3 mt-3">Add Sub Category</h4>
    <div class="form-group">
        {{-- <h5>Category select <span class="text-danger"></span></h5> --}}
        <div class="controls mb-3">
    <select name="category_id"  class="form-control" >
        <option value=""  slected="" disabled="">Select Category</option>
        @foreach ($categories as $category)
    
        <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach   
    </select>
                        
       
                @error('category_id')
    
                <span class="text-danger">{{$message}}</span>
                    @enderror
</div>
</div>

    <div class="form-group">
      <label>Sub Category name </label>
      <input type="text" class="form-control mb-3" name="subCategory_name">
      @error('subCategory_name')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    {{-- <div class="form-group">
      <label>Category icon</label>
      <input type="text" class="form-control mb-3" name="category_icon">
      @error('category_icon')
         
    <span class="text-danger">{{$message}}</span>
      @enderror
    </div> --}}
 
   
     
    <button type="submit" class="btn btn-warning">Add new</button>
  </form>
</div>
</div>
@endsection