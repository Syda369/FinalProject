<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ShipDiv;
use App\Models\ship_districts;
use App\Models\ShipState;
use Carbon\Carbon;
class AdminProfileController extends Controller
{
    //
    public function AdminProfile(){
  $adminData=Admin::find(1);
  return view('Admin.admin_profile_view',compact( 'adminData'));

    }

    
     
	public function DivisionView(){
		$divisions = ShipDiv::orderBy('id','DESC')->get();
		return view('Admin.ship.view_division',compact('divisions'));
	}
public function DivisionStore(Request $request){
    	$request->validate([
    		'division_name' => 'required',   	 
    	 
    	]);
    	 
      ShipDiv::insert([
	 
		'division_name' => $request->division_name,
		'created_at' => Carbon::now(),
    	]);
	    $notification = array(
			'message' => 'Division Inserted Successfully',
			'alert-type' => 'success'
		);
		return redirect()->back()->with($notification);
    } // end method 
    public function DivisionEdit($id){
  $divisions = ShipDiv::findOrFail($id);
	 return view('Admin.ship.division_Edit',compact('divisions'));
    }
    public function DivisionUpdate(Request $request,$id){
      ShipDiv::findOrFail($id)->update([
	 
		'division_name' => $request->division_name,
		'created_at' => Carbon::now(),
    	]);
	    $notification = array(
			'message' => 'Division Updated Successfully',
			'alert-type' => 'info'
		);
		return redirect()->route('manage-division')->with($notification);
    } // end mehtod 
    public function DivisionDelete($id){
      ShipDiv::findOrFail($id)->delete();
    	$notification = array(
			'message' => 'Division Deleted Successfully',
			'alert-type' => 'info'
		);
		return redirect()->back()->with($notification);
    } // end method 

       //// Start Ship District 

    public function DistrictView(){
      $division = ShipDiv::orderBy('division_name','ASC')->get();
      $district = ship_districts::orderBy('id','DESC')->get();
      return view('Admin.ship.district',compact('division','district'));
      }
   
   
public function DistrictStore(Request $request){

  $request->validate([
    'division_id' => 'required',  
    'district_name' => 'required',  	 

  ]);


  ship_districts::insert([

'division_id' => $request->division_id,
'district_name' => $request->district_name,
'created_at' => Carbon::now(),

  ]);

  $notification = array(
  'message' => 'District Inserted Successfully',
  'alert-type' => 'success'
);

return redirect()->back()->with($notification);

} // end method 



public function DistrictEdit($id){

$division =ShipDiv::orderBy('division_name','ASC')->get();
$district = ship_districts::findOrFail($id);
return view('Admin.ship.edit_district',compact('district','division'));
}




public function DistrictUpdate(Request $request,$id){

  ship_districts::findOrFail($id)->update([

'division_id' => $request->division_id,
'district_name' => $request->district_name,
'created_at' => Carbon::now(),

  ]);

  $notification = array(
  'message' => 'District Updated Successfully',
  'alert-type' => 'info'
);

return redirect()->route('manage-district')->with($notification);


} // end mehtod 





  public function DistrictDelete($id){

    ship_districts::findOrFail($id)->delete();

  $notification = array(
  'message' => 'District Deleted Successfully',
  'alert-type' => 'info'
);

return redirect()->back()->with($notification);

} // end method 




//// End Ship District

 ////////////////// Ship State //////////

 public function StateView(){
  $division = ShipDiv::orderBy('division_name','ASC')->get();
  $district = ship_districts::orderBy('district_name','ASC')->get();
  $state = ShipState::orderBy('id','DESC')->get();
  return view('Admin.ship.view_state',compact('division','district','state'));
  }






  public function StateStore(Request $request){

    $request->validate([
      'division_id' => 'required',  
      'district_id' => 'required', 
      'state_name' => 'required', 	 

    ]);


ShipState::insert([

  'division_id' => $request->division_id,
  'district_id' => $request->district_id,
  'state_name' => $request->state_name,
  'created_at' => Carbon::now(),

    ]);

    $notification = array(
    'message' => 'State Inserted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

  } // end method 


public function StateEdit($id){
  $division =  ShipDiv::orderBy('division_name','ASC')->get();
  $district =ship_districts::orderBy('district_name','ASC')->get();
  $state = ShipState::findOrFail($id);
  return view('Admin.ship.edit_state',compact('division','district','state'));
  }
  public function StateDelete($id){

    ShipState::findOrFail($id)->delete();

    $notification = array(
    'message' => 'State Deleted Successfully',
    'alert-type' => 'info'
  );

  return redirect()->back()->with($notification);

  } // end method 


  //////////////// End Ship State ////////////






  
}
