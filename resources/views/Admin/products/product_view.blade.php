
@extends('Admin.master')
@section('viewProduct')
<link rel="stylesheet" href="{{asset('/AdminCss/admin.css')}}">
<div class="wrapper">
    <div class="row">
    <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="What you looking for?">
  </div>
  <span class="counter pull-right"></span>
<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr >
        <th class="th-sm">image</th>
      <th class="th-sm">Pro-Name</th>
    
      <th class="th-sm">qty</th>
      <th class="th-sm">Price</th>
      <th class="th-sm">status</th>
      <th class="th-sm">Action</th>
    </tr>

  </thead>
  <tbody>
    @foreach($products as $item)
    <tr>
        <td><img src="{{asset($item->product_image)}}" style="width:60px;hieght:50px;"></td>
      <td scope="row">{{$item->product_name}}</td>
     
      <td>{{$item->product_qty}}Pic</td>
      <td>{{$item->selling_price}} $</td>
      <td>
     @if($item->status == 1)
     <span class="badge bg-success">Active</span>

     @else
     <span class="badge bg-danger">In Active</span>
     @endif


      </td>
    
        <td width="30%">
          {{-- <a href="{{ route('product-edit',$item->id) }}" class="btn btn-primary" title="Product Details Data"><i class="fa fa-eye"></i> </a> --}}
          <a href="{{route('product-edit',$item->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
          <a href="{{ route('product.delete',$item->id) }}"  class="btn btn-danger" title="Delete" id='delete'><i class="fa fa-trash"></i></a>
        
          @if($item->status == 1)
          <a href="{{ route('product-inactive',$item->id) }}" class="btn btn-danger" title="In active now"><i class="fa fa-arrow-down"></i> </a>
          @else
          <a href="{{ route('product-active',$item->id) }}" class="btn btn-success" title="Active now"><i class="fa fa-arrow-up"></i> </a>
          @endif
        </td>
        @endforeach
    </tr>
   
  </tbody>
</table>
    </div>
    


</div>
</div>
@endsection