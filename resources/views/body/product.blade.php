
    @extends('body.main')
   @section('product')  
   {{-- @include('body.productHeader') --}}

<button class="shop-by">shop by</button>
<div class="row mt-0 mb-15">

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">
        <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
Womans
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">coats</a></li>
    <li><a class="dropdown-item" href="#">T-shirt</a></li>
    <li><a class="dropdown-item" href="#">Pants</a></li>
    {{-- <li><hr class="dropdown-divider"></li> --}}
    <li><a class="dropdown-item" href="#">shoes</a></li>
    <li><a class="dropdown-item" href="#">bags</a></li>
  </ul>
</div>
      </th>
      <th scope="col"><div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
       Men
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">coats</a></li>
          <li><a class="dropdown-item" href="#">T-shirt</a></li>
          <li><a class="dropdown-item" href="#">Pants</a></li>
          {{-- <li><hr class="dropdown-divider"></li> --}}
          <li><a class="dropdown-item" href="#">shoes</a></li>
          <li><a class="dropdown-item" href="#">bags</a></li>
        </ul>
      </div></th>
      <th scope="col"><div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
       Kids
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">coats</a></li>
          <li><a class="dropdown-item" href="#">T-shirt</a></li>
          <li><a class="dropdown-item" href="#">Pants</a></li>
          {{-- <li><hr class="dropdown-divider"></li> --}}
          <li><a class="dropdown-item" href="#">shoes</a></li>
          <li><a class="dropdown-item" href="#">bags</a></li>
        </ul>
      </div>


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
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="product text-center col-lg-3 col-md-4 col-12">

        <img class="img-fluid mb-3" src="https://m.media-amazon.com/images/I/71oTzAAu1iL._AC_SX500._SX._UX._SY._UY_.jpg"  alt="">
    <div class="star">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <h5 class="p-name">Under Armour Women's Charged Assert 9 Running Shoe</h5>
    <h4 class="p-price">$100</h4>
    <button class="buy-btn">buy Now</button>
    

    </div>
<div class="product text-center col-lg-3 col-md-4 col-12">

    <img class="img-fluid mb-3" src="{{asset('https://m.media-amazon.com/images/I/81CFdDw+WUL._AC_UX425_.jpg')}}"  alt="">
<div class="star">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
<h5 class="p-name">Women's Lightweight Long-Sleeve Jacket</h5>
<h4 class="p-price">$100</h4>
<button class="buy-btn">buy Now</button>


</div>
<div class="product text-center col-lg-3 col-md-4 col-12">

    <img class="img-fluid mb-3" src="https://m.media-amazon.com/images/I/81tLC2YruqL._AC_SX569_.jpg
    "   alt="">
<div class="star">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
</div>
<h5 class="p-name">Columbia Women's Arcadia Ii Jacket</h5>
<h4 class="p-price">$100</h4>
<button class="buy-btn">buy Now</button>


</div>
<div class="product text-center col-lg-3 col-md-4 col-12">
    
    <img class="img-fluid mb-3" src="https://m.media-amazon.com/images/I/61bTIfKIIIL._AC_UX522_.jpg"  alt="">
<div class="star">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>

</div>
<h5 class="p-name">Columbia Women's Switchback Iii Jacket</h5>
<h4 class="p-price">$100</h4>
<button class="buy-btn">buy Now</button>
</div>
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