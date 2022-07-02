@extends('Admin.master')
@section('district')


          <div class="wrapper">
    <div class="brand col-12 ">
<div class="form-group pull-center" >
    <input type="text" class="search form-control" placeholder="What you looking for?"  width="50%">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
    
      <th class="col-md-3 col-xs-3">Div ID </th> 
   <th class="col-md-3 col-xs-3">Division Name </th> 
   <th class="col-md-3 col-xs-3">District Name </th>
   <th class="col-md-5 col-xs-5">Action</th>
    </tr>
   
  </thead>
  <tbody>
    @foreach($district as $item)
    <tr>
      <td> {{ $item->division_id }}  </td> 
      <td> {{ $item->division->division_name ?? ""}}  </td> 
      <td> {{ $item->district_name }}  </td> 
    
      <td width="40%">
        <a href="{{ route('division.edit',$item->id) }}" class="btn btn-info" title="Edit Division"><i class="fa fa-pencil"></i> </a>
        <a href="{{ route('division.delete',$item->id) }}" class="btn btn-danger" title="Delete Divisoin" id="delete">   <i class="fa fa-trash"></i></a>

        <a href="{{ route('district.edit',$item->id) }}" class="btn btn-info" title="Edit district"><i class="fa fa-pencil"></i> </a>
        <a href="{{ route('district.delete',$item->id) }}" class="btn btn-danger" title="Delete district" id="delete">
          <i class="fa fa-trash"></i></a>

    @endforeach
  </tbody>
</table>
    </div>
    
    
    <form method="post" action="{{ route('division.store') }}" >
      <form method="post" action="{{ route('district.store') }}" >

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
         </div>
   
                 
         <div class="form-group mt-5 text-center">
          <h5> District Name  <span class="text-danger">*</span></h5>
          <div class="controls">
         <input type="text"  name="district_name" class="form-control" > 
         @error('district_name') 
         <span class="text-danger">{{ $message }}</span>
         @enderror 
        </div>
  
 
   
     
    <button type="submit" class="btn btn-warning mt-5 text-center">Add new</button>
  </form>

</div>
</div>
</div>      
          @endsection 