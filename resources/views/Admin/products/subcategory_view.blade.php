
    @extends('body.main')
    @section('title') 
  subCategroy Products
    @endsection
   @section('product')  
   
<div class="row mx-auto container">
    @foreach($products as $product)
    <div class="product text-center col-lg-3 col-md-4 col-12">

    <img class="img-fluid mb-3" src="{{asset($product->product_image)}}"  alt="">

    <h5 class="p-name">{{$product->product_name}}</h5>
    <h4 class="p-price">{{$product->selling_price}} $</h4>
    <button class="buy-btn"><a href="{{url('product/details/'.$product->id)}}">buy Now</a></button>

 

    </div> 
    @endforeach

<nav aria-label="...">
    <ul class="pagination mt-5">
      <li class="page-item disabled">
        <span class="page-link">Previous</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item" aria-current="page">
        <span class="page-link">2</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>

</div>

@endsection