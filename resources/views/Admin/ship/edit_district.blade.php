@extends('Admin.master')
@section('district')
<div class="wrapper">
    <div class="brand col-12 ">
       
        <span class="counter pull-right"></span>
        <table class="table table-hover table-bordered results">

			<form method="post" action="{{ route('district.update',$district->id ) }}" >
                @csrf
       
                <div class="form-group mt-5 text-center">
                    <h5>Division Select <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="division_id" class="form-control "  >
                            <option value="" selected="" disabled="">Select Division</option>
                            @foreach($division as $div)
                            <option value="{{ $div->id }}" {{ $div->id == $district->division_id ? 'selected': '' }} >{{ $div->division_name }}</option>	
                            @endforeach
                        </select>
                        @error('division_id') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror 
                     </div>
                         </div>


                         

	 <div class="form-group mt-5 text-center">
		<h5>District Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="district_name" class="form-control" value="{{ $district->district_name }}" > 
	 @error('district_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>



			 <div class="text-xs-right mt-5 text-center">
	<input type="submit" class="btn btn-rounded btn-warning mt-5 center" value="Update">					 
						</div>
					</form>

				</table>
				</div>
				
			</div>
			
		</div>

		  </div>
		  <!-- /.row -->
	


@endsection