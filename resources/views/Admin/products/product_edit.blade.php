@extends('Admin.master')
@section('addProduct')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="wrapper">
  <form class="Newbrand" method="post" action="{{route('product-store')}}" enctype="multipart/form-data">
    @csrf
    {{-- <input type="hidden" name="id" value="{{$product->id}}">
    <input type="hidden" name="old_image" value="{{$product->product_image}}"> --}}
 
    <div class="col-md-12 order-md-1 col-sm-12">
        <h4 class="mb-5">Edit Product</h4>
     
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <label> Brand <span class="text-danger">*</span></label>
                <select name="brand_id" class="form-control"  required="">
                    <option value="" selected="" disabled="">Select Brand</option>
          
                    @foreach ($brand as $item)
    
                    <option value="{{$item->id}}"{{$item->id== $product->brand_id ? 'selected' :'null'}}>{{$item->brand_name_en}}</option>
                    @endforeach   
                </select>
              </div>          
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <label>Category <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-control" required="" >
                        <option value="" selected="" disabled="">Select Category</option>
              
                        @foreach ($categories as $category)
    
                        <option value="{{$category->id}}"{{$category->id== $product->category_id ? 'selected' :'null'}}>{{$category->category_name}}</option>
                        @endforeach   
                    </select>
               
   
                               
                </div>
            </div>
                <div class="col-md-4 mb-3">
                  <div class="form-group">
                    <label>SubCategory<span class="text-danger">*</span></label>
                        <select name="subcategory_id" class="form-control"  required="">
                            <option value="" selected="" disabled="">Select Sub Category</option>
                            @foreach ($subcategories as $sub)
    
                            <option value="{{$sub->id}}"{{$sub->id== $product->subcategory_id ? 'selected' :'null'}}>{{$sub->subCategory_name}}</option>
                            @endforeach 
                          </select>
                          @error('subcategory_id') 
                         <span class="text-danger">{{ $message }}</span>
                         @enderror         
                    </div>
          </div>
          </div>
          <div class="row">
        <div class="col-md-4 mb-3">
          <div class="form-group">
        <label> Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="" name="product_name" required="" value="{{$product->product_name}}">
        @error('product_name')
        </div>
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
      <div class="col-md-4 mb-3">
        <div class="form-group">
        <label>Price <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="" name="selling_price" required=""  value="{{$product->selling_price}}">
        @error('selling_price')
    </div>
  
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
</div>
  
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <label>Quantity <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id=""  name="product_qty" required=""  value="{{$product->product_qty}}">
                @error('product_qty')
                </div>
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
        <div class="col-md-4 mb-3">
          <div class="form-group">
          <label>code <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id=""  name="product_code" required="" value="{{$product->product_code}}">
          @error('product_code')
          </div>
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
      </div>
      <div class="col-md-4">

        <div class="form-group">
     <label>Size<span class="text-danger">*</label></h5>
     <div class="controls">
  <input type="text"  name="product_size" class="form-control"  data-role="tagsinput" value="{{$product->product_size}}">
    @error('product_size') 
  <span class="text-danger">{{ $message }}</span>
  @enderror
       </div>
   </div>
  </div>


   
   
  <div class="col-md-4">   
<div class="form-group mb-3">
      <label for="exampleInputPassword1">Image<span class="text-danger">*</span></label>
     
      <input type="file" class="form-control mb-3" name="product_image" required="">
      @error('product_image')
      {{-- onChange="mainThamUrl(this)" --}}
        <span class="text-danger">{{$message}}</span>
          @enderror
    </div>
    <img src="" id="mainImage">
  </div>


      </div>
      <div class="col-md-4">   
        <div class="form-group mb-3">
              <label for="exampleInputPassword1">Long Desc<span class="text-danger" required="" >*</span></label>
            
    <textarea  name="long_descp" rows="5" cols="33">
        {!! $product->long_descp!!}
    </textarea>
           
            </div>
          </div>
 
        </div>

    <button type="submit" class="btn btn-warning">update product</button>
  </form>
</div>

    <script type="text/javascript">
          $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{ url('/product/subcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                     
                        success:function(data) {
                           var d =$('select[name="subcategory_id"]').empty();
                              $.each(data, function(key, value){
                                  $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subCategory_name + '</option>');
                                
                              });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
      </script>
        <script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainImage').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	

        </script>
    

@endsection
