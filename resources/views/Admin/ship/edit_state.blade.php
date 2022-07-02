@extends('Admin.master')
@section('ship')

<div class="wrapper">
    <div class="brand col-lg-12 col-md-6 col-md-4 ">

    </div>
    

    <form method="post" action="{{ route('district.store') }}"  width="50%">
        <form method="post" action="{{ route('state.store') }}" >
 
        
        
    @csrf
    <div class="form-group mt-5 text-center">
        <h5>Division Select <span class="text-danger">*</span></h5>
        <div class="controls">
        <select name="division_id" class="form-control"  >
        <option value="" selected="" disabled="">Select Division</option>
        @foreach($division as $div)
        <option value="{{ $div->id }}">{{ $div->division_name }}</option>	
        @endforeach
        </select>
        @error('division_id') 
        <span class="text-danger">{{ $message }}</span>
        @enderror 
        </div>
        <div class="form-group  mt-5 text-center">
            <h5>District Select <span class="text-danger">*</span></h5>
            <div class="controls">
            <select name="district_id" class="form-control"  >
            <option value="" selected="" disabled="">Select District</option>
            @foreach($district as $dis)
            <option value="{{ $dis->id }}">{{ $dis->district_name }}</option>	
            @endforeach
            </select>
            @error('district_id') 
            <span class="text-danger">{{ $message }}</span>
            @enderror 
            </div>
            </div>
            
   

<div class="form-group  mt-5 text-center">
    <h5>State Name  <span class="text-danger">*</span></h5>
    <div class="controls">
    <input type="text"  name="state_name" class="form-control" > 
    @error('state_name	') 
    <span class="text-danger">{{ $message }}</span>
    @enderror 
    </div>
    </div>
    
     
    <button type="submit" class="btn btn-warning">Update</button>
  </form>
</div>
</div>
@endsection