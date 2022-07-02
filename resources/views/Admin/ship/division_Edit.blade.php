@extends('Admin.master')
@section('ship')

<div class="wrapper">
    <div class="brand col-12 ">
        <div class="col-lg-12 col-md-4 col-sm-12">

            <div class="box mt-5 text-center">
               <div class="box-header with-border">
                 <h3 class="box-title">Add Division </h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">


<form method="post" action="{{ route('division.update',$divisions->id) }}" >
        @csrf


    <div class="form-group">
       <h5>Division Name  <span class="text-danger">*</span></h5>
       <div class="controls">
    <input type="text"  name="division_name" class="form-control" value="{{ $divisions->division_name }}" > 
    @error('division_name') 
    <span class="text-danger">{{ $message }}</span>
    @enderror 
   </div>
   </div>



            <div class="text-xs-right mt-5">
   <input type="submit" class="btn btn-warning" value="Update">					 
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
        @endsection