<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminProfileController extends Controller
{
    //
    public function AdminProfile(){
  $adminData=Admin::find(1);
  return view('Admin.admin_profile_view',compact( 'adminData'));

    }
}
