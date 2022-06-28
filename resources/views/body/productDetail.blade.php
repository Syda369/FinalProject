
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

<h3 class="py-4">{{$product->product_name}}</h3>
<h2>{{$product->selling_price}}<span> $</span></h2>
@if($product->product_size !== null)
@foreach($tags_size  as $size)
<select class="my-3">
  <option>Select Size</option>

  

    <option>	{{ str_replace(',',' ',$size->product_size)  }}</option>
    @endforeach
</select>

@endif
<input type="number" value="1">
<button class="buy-btn">Add to Cart</button>
<h4 class="mt-5 mb-5">Product Details</h4>
<span>
    {{$product->long_descp}}</span>
</div>
</div>
</section>
@endsection











