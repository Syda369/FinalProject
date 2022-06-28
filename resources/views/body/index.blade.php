
    @extends('body.main')
    @section('home') 
    @section('title') 
    Home Page
    @endsection
    <section id="home">
        <div class="container">
    <h5>NEW ARRAIVALS</h5>
    <h1><span>Best Price</span> This Year</h1>
  <p>Wide assortment of clothes</p>
      
  <a href="{{url('shope')}}"> <button>SHOPE NOW</button></a>
</div>
    </section>
    {{-- brand data --}}
    @php
    $brands=App\Models\Brand::orderby('brand_name_en')->get();
    @endphp

    <section id="brand" class="container">

     <div class="row m-0 py-5">
        {{-- brand foreach start --}}
        @foreach($brands as $brand)
    <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset($brand->brand_image)}}" alt="">
     @endforeach
    
      {{-- brand foreach end --}}
     </div>
 

     </section>

   {{-- image table data --}}
 @php
 $images=App\Models\imageHome::orderby('title')->get();
 @endphp

   <section id="new" class="w-100">
    
    <div class="row p-0 m-0">
              {{--image foreach start --}}
      @foreach($images as $image)
        <div class="one col-lg-4 col-md-12 col-12 p-0 ">
        <img class="img-fluid" src="{{asset($image->image)}}" style=" height:300px;" alt="">
        <div class="details">
        <h2>{{$image->title}}</h2>
         <button class="text-uppercase">Shop now</button>
        </div>
        </div>
        @endforeach
                {{--image foreach end --}} 
    </div>


   </section>
   <section id="featured" class="my-5 pb-5">

 
   <div class="container text-center mt-5 py-5">
    <h3 style="font-weight: bold;">Our Featured</h3>
    <hr>
    <p style="font-weight: bold;">Here you can check our products list with fair price</p>
    
    </div>
    
</section>
@php
$products=App\Models\Product::orderby('product_name')->get();
@endphp


{{-- <div class="row mx-auto container">
 
@for($i=0 ;$i<4;$i++)
    <div class="product text-center col-lg-3 col-md-4 col-12">

        <img class="img-fluid mb-3"  src="{{asset($products[$i]->product_image)}}" style=" height:300px; width:600px"  alt="">
  
    <h5 class="p-name">{{$products[$i]->product_name}}</h5>
    <h4 class="p-price">{{$products[$i]->selling_price}} $</h4>
    <button class="buy-btn"><a href="{{url('product/details/'.$products[$i]->id)}}">buy Now</a></button>

 

    </div> 
    @endfor
</div>  --}}

 @endsection