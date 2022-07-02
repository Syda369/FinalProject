<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Icons/Glyphs -->

<script src="https://kit.fontawesome.com/d472ea2979.js" crossorigin="anonymous"></script>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script


  src="https://code.jquery.com/jquery-3.5.1.js"
  
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- jQueryUI -->

    <script type = "text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/d472ea2979.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<link rel="stylesheet" href="{{asset('/bodyCss/header.css')}}">
<link rel="stylesheet" href="{{asset('/bodyCss/footer.css')}}">
<link rel="stylesheet" href="{{asset('/bodyCss/products.css')}}">
<link rel="stylesheet" href="{{asset('/bodyCss/login.css')}}">
<link rel="stylesheet" href="{{asset('/bodyCss/productDtail.css')}}">
<link rel="stylesheet" href="{{asset('/bodyCss/index.css')}}">

<title>@yield('title')</title>
</head>
@include('body.header')
@yield('home')
<section id="featured" class="my-5 py-5">

@yield('product')
 
@yield('cart')
@yield('productDetails')
@yield('search')

</section>
@include('body.footer')
<script src="{{asset('/js/body/header.js')}}"></script>
{{-- <script src="{{asset('/js/body/login.js')}}"></script>
<script src="{{asset('/js/body/register.js')}}"></script>
 --}}

  <!--Add to cart Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><span id="pname"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  
        <div class="modal-body" >
          
         <div class="row">

<div class="col-md-4">
 
   
        <img src=" " class="card-img-top" alt="..." style="height: 240px; width: 180px;" id="pimage">
        <div class="card-body">
        
   
      </div>
   
</div>


<div class="col-md-5" >
    <ul class="list-group">
        <li class="list-group-item">Price: <strong id="price"> </strong></li>
        <li class="list-group-item">Code:  <strong id="pcode"> </strong></li>
        <li class="list-group-item">Category: <strong id="pcategory"> </strong></li>
        <li class="list-group-item">Brand:  <strong id="pbrand"> </strong></li>
       
        <li class="list-group-item">Stock:  <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span> 
          <span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span> 
      
        </li>
     
      </ul>
</div>


<div class="col-md-3">

    <div class="form-group" id="sizeArea">
        <label for="size">Size</label>
        <select class="form-control" name="size" id="size">


        
        </select>
      </div>
      <div class="form-group">
        <label for="qty">Quantity</label> 
        <input type="number" class="form-control" id="qty" value="1" min="1" max="5" >
      </div> <!-- // end form group -->
   
      <input type="hidden" id="product_id">
<button type="submit" class="btn btn-secondary mb-2" onclick="addToCart()">Add to Cart</button>




        </div><!-- // end col md -->




</div>



</div>


        </div>
        {{-- //end modal body --}}
     
      </div>
    </div>
  </div>
  <script type="text/javascript">

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

// Start Product View with Modal 
function productView(id){
    // alert(id)
    $.ajax({
        type: 'GET',
        url:'/product/view/modal/'+id,
        dataType:'json',
        success:function(data){
          
            $('#pname').text(data.product.product_name);
            $('#price').text(data.product.selling_price);
            $('#pcode').text(data.product.product_code);
              $('#pcategory').text(data.product.category.category_name);
            $('#pbrand').text(data.product.brand.brand_name_en);
            $('#pimage').attr('src','/'+data.product.product_image);
            $('#product_id').val(id);
            $('#qty').val(1);
            
            $.each(data.size,function(key,value){

               $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>')
                  if(data.size=="")
                  {
                   $('#sizeArea').hide();
                  }else{
                    $('#sizeArea').show();
                  }
                  if (data.product.product_qty > 0) {
                $('#aviable').text('');
                $('#stockout').text('');
                $('#aviable').text('aviable');
            }else{
                $('#aviable').text('');
                $('#stockout').text('');
                $('#stockout').text('stockout');
            } // end Stock Option 


            })
        }
    })
   
           
     
}
///end product view
//add to cart

function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var size = $('#size option:selected').text();
        var qty = $('#qty').val();
      
        $.ajax({
       
            Type:"POST",
            dataType:'JSON',
            data:{
              "_token": "{{ csrf_token() }}",size:size, qty:qty, product_name:product_name,
            },
            url:"/cart/data/store/"+id,
            success:function(data){
              $('#closeModel').click();
              const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }

              
            }
    //         error: function (request, status, error) {
    //   console.log(request.responseText);
    // }
        })
    }






//end add to cart


</script>
{{-- cart page --}}

<script type="text/javascript">
  function cart(){
     $.ajax({
         type: 'GET',
         url: '/user/get-cart-product',
         dataType:'json',
         success:function(response){
 var rows = ""
 $.each(response.carts, function(key,value){
     rows += `<tr>
     <td class="col-md-2"><img src="/${value.options.image} " alt="imga" style="height:100px;width:100px"></td>
     
     <td class="col-md-5">
         <div class="product-name"><a href="#">${value.name}</a></div>
          
         <div class="price"> 
                         ${value.price}
                     </div>
                 </td>
                 <td class="col-md-2">
          ${value.options.size == null
            ? `<span> .... </span>`
            :
          `<strong>${value.options.size} </strong>` 
          }           
            </td>
            
            <td class="col-md-2">
    
           ${value.qty > 1
            ? `<button type="submit" class="btn btn-danger btn-sm" id="${value.rowId}" onclick="cartDecrement(this.id)">-</button> `
            : `<button type="submit" class="btn btn-danger btn-sm" disabled >-</button> `
            }
        
        <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width:25px;" >  
         <button type="submit" class="btn btn-success btn-sm" id="${value.rowId}" onclick="cartIncrement(this.id)" >+</button>    
         
            </td>
            <td class="col-md-2">
            <strong>$${value.subtotal} </strong> 
            </td>
     <td class="col-md-1">
     
      <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
     </td>
             </tr>`
     });
             
             $('#cartPage').html(rows);
         }
     })
  }
cart();





///  Cart remove Start 
    function cartRemove(id){
        $.ajax({
            type: 'GET',
          
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
    
            cart();
      
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }

 // -------- CART INCREMENT --------//
 function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/user/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                cart();
        
            }
        });
    }
 // ---------- END CART INCREMENT -----///
// -------- CART Decrement  --------//
function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/user/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                cart();
              
            }
        });
    }
 // ---------- END CART Decrement -----///



    </script>
    
    {{-- cart page end --}}
</body>
</html>