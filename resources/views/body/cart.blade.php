
   @extends('body.main')
   @section('cart')
   @include('body.productHeader')
   
<button class="shop-by">Cart</button>
<div class="row mt-0 mb-15">

<table class="table  col-3-lg col-4-md col-12-sm ml-5">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">IMAGE</th>
      <th scope="col">QTY</th>
      <th scope="col">SIZE</th>
      <th scope="col">PRICE</th>
      <th scope="col">TOTAL</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tr>
    <td></td>
    <td></td>
    <td><img src="{{asset('https://m.media-amazon.com/images/I/81CFdDw+WUL._AC_UX425_.jpg')}} "width="100px" height="100px"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>  <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
  </tr>
</table>
@endsection