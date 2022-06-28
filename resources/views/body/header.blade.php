<div class="menu-bar">
 <a href="{{('/')}}"> <h1 class="logo">Diva<span><i class="fas fa-dove"></i></span></h1></a>
  <form class="search">
    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    </form>
  <ul>
    <li><a href="{{url('shope')}}">shope</a></li>
    {{-- //get category data --}}
   @php
$categories=App\Models\Category::orderby('category_name')->get();

@endphp

    <li><a href="#">Category <i class="fas fa-caret-down"></i></a>

        <div class="dropdown-menu">
            <ul>
              {{-- category foreach start --}}
              @foreach($categories as $category)
              <li>
                <a href="#">{{$category->category_name}} <i class="fas fa-caret-right"></i> </a>
                 {{-- //get subcategory data --}}
                @php
        
                $subcategories=App\Models\SubCategory::where('category_id',$category->id)->orderBy('subCategory_name')->get();
                @endphp
                
                <div class="dropdown-menu-1">
                  <ul>
                    
              {{-- subcategory foreach start --}}
                    @foreach($subcategories as $subcategory)
                    <li><a href="{{url('subcategory/products/'.$subcategory->id .'/'. $subcategory->subCategory_name_slug)}}">{{$subcategory->subCategory_name}}</a> 
                      
                      
                      @endforeach</li>
                       {{-- subcategory foreach end--}}
                  
                  </ul>
                </div>
              </li>
              @endforeach
            
              {{-- category foreach end--}}
            </ul>
          </div>

          <li><a href="{{ route('login') }}">login</a></li>
          <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
              <li><a href="{{ route('admin.login') }}"><i class="fas fa-user-cog"></i></a></li>
       
    </li>
 
  </ul>
</div>

