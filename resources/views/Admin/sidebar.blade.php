
@php
   $prefix=Request::route()->getPrefix();
   $route=Route::current()->getName();
 


@endphp
<div class="content">  
<div class="sidebar">
    <div class="sidebar-nav {{($route=='dashboard')?'active':''}}">
        <div class="icon"><a href="{{url('admin/dashboard')}}"><i class="fas fa-tachometer-alt"></i></div>
        <span>Dashboard</span></a>
    </div>
    <div class="sidebar-nav {{($prefix=='/brand')?'active':''}}">
        <div class="icon"><a href="{{route('all.brand')}}"><i class="fa-solid fa-copyright"></i></div>
        <span>Brands</span></a>
    </div>
    
    {{-- <div class="sidebar-nav  ">
        <div class="icon"><a href="#"><i class="fas fa-th-list"></i></div>
        <span>Catogery</span></a>
    </div> --}}
    <div class="sidebar-nav    {{($prefix=='/Category')?'active':''}} ">
        <div class="icon"><a href="{{route('view.category')}}"><i class="fas fa-th-list"></i></div>
        <span>Catogery</span></a>
    </div>
    <div class="sidebar-nav    {{($prefix=='/Category')?'active':''}} ">
        <div class="icon"><a href="{{route('sub.category')}}"><i class="fas fa-list-alt"></i></i></div>
        <span>Sub Catogery</span></a>
    </div>
    <div class="sidebar-nav {{($prefix=='/product')?'active':''}}" >
        <div class="icon"><a href="{{route('add-product')}}"><i class="fas fa-plus"></i></div>
        <span>Add Products</span></a>
    </div>
    <div class="sidebar-nav {{($route =='manage-product')?'active':''}} ">
        <div class="icon"><a href="{{route('manage-product')}}"><i class="fas fa-tools"></i></div>
        <span>Manage Products</span></a>
    </div>
   
    <div class="sidebar-nav {{($route =='manage-image')?'active':''}} ">
        <div class="icon"><a href="{{route('manage-image')}}"> <i class="fas fa-images"></i></div>
        <span>home-image</span></a>
    </div>
    <div class="sidebar-nav {{ ($route == 'manage-division')? 'active':'' }} ">
        <div class="icon"><a href="{{ route('manage-division') }}"> <i class="fas fa-shipping-fast"></i></i></div>
        <span>Shipping-Div</span></a>
    </div>
     <div class="sidebar-nav {{ ($route == 'manage-district')? 'active':'' }} ">
        <div class="icon"><a href="{{ route('manage-district') }}"><i class="fas fa-ship"></i></div>
        <span>Ship District</span></a>
    </div> 
    <div class="sidebar-nav {{ ($route == 'manage-state')? 'active':'' }} ">
        <div class="icon"><a href="{{ route('manage-state') }}"><i class="fas fa-flag-usa"></i></div>
        <span>State</span></a>
    </div> 
</div>  
