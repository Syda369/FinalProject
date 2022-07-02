
  @extends('body.main')
  @section('title') 
{{$product->product_name}} Details
  @endsection

  @section('productDetails')  
  
<section class="container sproduct my-5 pt-5">
<div class="row mt-5">
<div class="col-lg-5 col-md-12 col-12">
<img class="img-fluid w-100px  pb-1"  src="{{asset($product->product_image)}}" alt="" id="img">

</div> 
@php
$tags_size = App\Models\Product::groupBy('product_size')->select('product_size')->get();

@endphp 
<div class="col-lg-5 col-md-12 col-12">

<h3 class="py-4" id="pname">{{$product->product_name}}</h3>
<h2 id="price">{{$product->selling_price}}<span> $</span></h2>
@if($product->product_size !== null)
<select class="my-3" id="size">
@foreach($size_v as $size)

  <option value="$size" >{{$size}}</option>

  

   
@endforeach
</select>
  
@endif
<div class="form-group">
  <label for="exampleFormControlInput1">Quantity</label> 
  <input type="number" class="form-control" id="exampleFormControlInput1" value="1" min="1" max="5" >
</div> <!-- // end form group -->
<input type="hidden" id="product_id" value={{$product->id}} min="1">
<button type="submit" class="btn btn-secondary mb-2" onclick="addToCart()">Add to Cart</button>

<h4 class="mt-5 mb-5">description</h4>
<span>
    {{$product->long_descp}}</span>
</div>
</div>
</section>
@endsection











