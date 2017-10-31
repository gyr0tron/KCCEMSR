<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function home()
  {
    return view("pages.admin.dashboard");
  }
  public function users()
  {
    if(!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    return view("pages.admin.users");
  }
  public function edituser($id)
  {
    if(!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    $user = User::where('id',$id)->first();
    if(!$user) {
      return redirect()->route("admin_users");
    }
    return view("pages.admin.edituser", compact("user"));
  }
  public function settings()
  {
    return view("pages.admin.settings");
  }
}
