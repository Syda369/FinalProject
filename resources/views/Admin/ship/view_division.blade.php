@extends('Admin.master')
@section('ship')

<div class="wrapper">
    <div class="brand col-12 ">
        <div class="form-group pull-center" >
            <input type="text" class="search form-control" placeholder="What you looking for?"  width="50%">
        </div>
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">
          <thead>
            <tr>
          
 
            
              <th class="col-md-3 col-xs-3">Division Name</th>
              <th class="col-md-3 col-xs-3">Action</th>
            </tr>
           
          </thead>
          <tbody>
            @foreach($divisions as $item)
            <tr>
                <td>{{ $item->division_name }} </td>
            
             
             
            
                <td>
                  <a href="{{route('division.edit',$item->id)}}" class="btn btn-info"><i class="fa fa-pencil"  title="Edit"></i></a>
                  <a href="{{route('division.delete',$item->id)}}"  class="btn btn-danger" title="Delete" id='delete'><i class="fa fa-trash"></i></a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      

        <div class="col-lg-12 col-md-4 col-sm-12">

            <div class="box mt-5 text-center">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Division </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">


<form method="post" action="{{ route('division.store') }}" >
        @csrf


    <div class="form-group">
       <h5>Division Name  <span class="text-danger">*</span></h5>
       <div class="controls">
    <input type="text"  name="division_name" class="form-control" > 
    @error('division_name') 
    <span class="text-danger">{{ $message }}</span>
    @enderror 
   </div>
   </div>



            <div class="text-xs-right mt-5">
   <input type="submit" class="btn btn-warning" value="Add New">					 
                       </div>
                   </form>





                   </div>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box --> 
           </div>




         </div>
         <!-- /.row -->
       </section>
       <!-- /.content -->

     </div>
</div>
</div>

@endsection