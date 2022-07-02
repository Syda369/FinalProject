@extends('Admin.master')
@section('ship')

<div class="container">
    <div class="brand col-12 ">
        <div class="form-group pull-center" >
            <input type="text" class="search form-control" placeholder="What you looking for?"  width="50%">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results "  >
          <thead>
            <tr>
          
 
                <th>Div ID</th>
                <th>Dis ID</th>
                <th>Div Name </th> 
                <th>Dis Name </th>
                <th>State Name </th>
                <th>Action</th>

            </tr>
           
          </thead>
          <tbody>
            @foreach($state as $item)
            <tr>
               <td> {{ $item->division_id }}  </td> 
               <td> {{ $item->district_id }}  </td> 
               <td> {{ $item->division_name }}  </td> 
               <td> {{ $item->district_name }}  </td> 
               <td> {{ $item->state_name }}  </td>
               <td style="width:30%">
        
                
        
        <a href="{{ route('state.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
        <a href="{{ route('district.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">  <i class="fa fa-trash"></i></a>
            <a href="{{ route('state.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
            <i class="fa fa-trash"></i></a>
               </td>
       
            </tr>
             @endforeach
                               </tbody>
       
                             </table>
                        

        <div class="col-lg-12 col-md-4 col-sm-12">

            <div class="box mt-5 text-center width=40%">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Division </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                <div class="table-responsive">

                    <form method="post" action="{{ route('district.store') }}" >
                        <form method="post" action="{{ route('state.store') }}" >
     @csrf



<div class="form-group">
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



<div class="form-group">
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



 <div class="form-group">
    <h5>State Name  <span class="text-danger">*</span></h5>
    <div class="controls">
 <input type="text"  name="state_name" class="form-control" > 
 @error('state_name	') 
 <span class="text-danger">{{ $message }}</span>
 @enderror 
</div>
</div>



         <div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-warning mt-5" value="Add New">					 
                    </div>
                </form>



            </table>

                </div>
            </div>
            <!-- /.box-body -->
          </div>
    

@endsection