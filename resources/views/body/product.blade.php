
    @extends('body.main')
    @section('title') 
   Products Page
    @endsection
   @section('product')  
 
   @php
   $categories=App\Models\Category::orderby('category_name')->get();
  

   @endphp

<button class="shop-by">shop by</button>
<div class="row mt-0 mb-15">

<table class="table">
  <thead>
    <tr>
      <th scope="col">  @foreach($categories as $category)
      <th scope="col">

      
<div class="btn-group">

  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    {{$category->category_name}} 

  </button>


  <ul class="dropdown-menu">
    @php
        
    $subcategories=App\Models\SubCategory::where('category_id',$category->id)->orderBy('subCategory_name')->get();
    @endphp
    
    @foreach($subcategories as $subcategory)
    <li><a class="dropdown-item" href="{{url('subcategory/products/'.$subcategory->id .'/'. $subcategory->subCategory_name_slug)}}">{{$subcategory->subCategory_name}}</a></li>
    @endforeach
    

  </ul>

</div>
  @endforeach

      </th>
    
  
      <th scope="col"><div class="btn-group">
      
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  Size
        </button>
       
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">S</a></li>
          <li><a class="dropdown-item" href="#">M</a></li>
          <li><a class="dropdown-item" href="#">Large</a></li>
          {{-- <li><hr class="dropdown-divider"></li> --}}
      
     
        </ul>
      </div></th>
      <th scope="col"><div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
 Price
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Low To High</a></li>
          <li><a class="dropdown-item" href="#">High to Low</a></li>
      
          {{-- <li><hr class="dropdown-divider"></li> --}}
      
     
        </ul>
      </div></th>
    </tr>
  </thead>
</table>
</div>
<div class="row mx-auto container">
  @foreach($products as $item)
    <div class="product text-center col-lg-3 col-md-4 col-12">

        <img class="img-fluid mb-3" src="{{asset($item->product_image)}}"   alt="">
    <div class="star">
   
    <h5 class="p-name">{{$item->product_name}}</h5>
    <h4 class="p-price">{{$item->selling_price}} $</h4>
    <button class="buy-btn"><a href="{{url('product/details/'.$item->id)}}">buy Now</a></button>
    

    </div>
  </div>
@endforeach

 
</div>

</div>

<div class="text-right">
  <div class="pagination-container">
 
    
      {{ $products->links()  }}
  
  </div>

</div>
  
@endsection