
    @extends('body.main')
    @section('home') 
    <section id="home">
        <div class="container">
    <h5>NEW ARRAIVALS</h5>
    <h1><span>Best Price</span> This Year</h1>
  <p>Wide assortment of clothes</p>
      
 <button>SHOPE NOW</button>
</div>
    </section>


    <section id="brand" class="container">
     <div class="row m-0 py-5">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/98da4da9-d9b5-4906-a48b-2b2295ee7812-200x.avif')}}" alt="">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/256x256bb.jpg')}}" alt="">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/800px-Zara_Logo.svg.png')}}" alt="">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/bDduVSa3_400x400.jpg')}}" alt="">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/ond.png')}}" alt="">
      <img class="img-fluid col-lg-2 col-md-4 col-6" src="{{asset('/img/brand/114357bc-c851-4d4a-8960-000e0400f008-200x.jpeg')}}" alt="">
     </div>
 
        
     </section>

   <section id="new" class="w-100">
    <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-12 p-0 ">
            <img class="img-fluid" src="img/body/pexels-victoria-borodinova-1619693.jpg" alt="">
        <div class="details">
            <h2>Sportwear Up To 50% Off</h2>
            <button class="text-uppercase">Shop now</button>
            </div>
                </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0 ">
            <img class="img-fluid" src="img/body/pexels-hipkicks-6777992.jpg" alt="">
        <div class="details">
            <h2>Extrem Rare Sneakers</h2>
            <button class="text-uppercase">Shop now</button>
            </div>

        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0 ">
            <img class="img-fluid" src="img/body/pexels-silvie-lindemann-296951.jpg" alt="">
        <div class="details">
            <h2>Awesome blank Outfit</h2>
            <button class="text-uppercase" >Shop now</button>
            </div>
        </div>
    </div>
   </section>
   <section id="featured" class="my-5 pb-5">

 
   <div class="container text-center mt-5 py-5">
    <h3 style="font-weight: bold;">Our Featured</h3>
    <hr>
    <p style="font-weight: bold;">Here you can check our products list with fair price</p>
    
    </div>
    
</section>


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
</div> 
 @endsection