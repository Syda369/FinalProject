
@php
   $prefix=Request::route()->getPrefix();
   $route=Route::current()->getName();
 


@endphp

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
    <div class="sidebar-nav">
        <div class="icon"><i class="fas fa-users"></i></div>
        <span>Emoployees</span>
    </div>
    <div class="sidebar-nav">
        <div class="icon"><i class="fa-regular fa-calendar-days"></i></div>
        <span>Calender</span>
    </div>
    <div class="sidebar-nav">
        <div class="icon"><i class="fas fa-chart-bar"></i></div>
        <span>Reports</span>
    </div>
    <div class="sidebar-nav">
        <div class="icon"><i class="fas fa-folder-open"></i></div>
        <span>Files</span>
    </div>
    <div class="sidebar-nav">
        <div class="icon"><i class="fas fa-lightbulb"></i></div>
        <span>Elements</span>
    </div>
    <div class="sidebar-nav">
        <div class="icon"><i class="fas fa-ellipsis-h"></i></div>
        <span>More</span>
    </div>
</div>
