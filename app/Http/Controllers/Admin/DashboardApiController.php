<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAddUserRequest;
use App\Http\Requests\AdminEditUserRequest;
use App\Http\Requests\AdminUserSettingsRequest;

use Auth;
use App\User;
use App\ResponseBuilder;

class DashboardApiController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  // Add User
  public function addUser(AdminAddUserRequest $request)
  {
    $user = new User();
    $user->username = $request->input("username");
    $user->fullname = $request->input("fullname");
    $user->email = $request->input("email");
    $user->access = $request->input("role");
    $user->password = bcrypt($request->input("password"));
    $user->save();
    return ResponseBuilder::send(true, "", route("admin_users"));
  }

  // Edit User
  public function editUser(AdminEditUserRequest $request)
  {
    $user = User::where("username",$request->input("username"))->first();

    $email = $request->input("email");
    if($email != $user->email) {
      $new = User::where("email", $email)->first();
      if($new && $new->id != $user->id) {
        $messages = array("email" => "The email is already taken.");
        return ResponseBuilder::send(false, $messages, "");
      }
    }

    if($user) {
      $user->fullname = $request->input("fullname");
      $user->email = $request->input("email");
      $user->access = $request->input("role");
      if(strlen($request->input("password")) > 0) {
        $user->password = bcrypt($request->input("password"));
      }
      $user->save();
    }
    return ResponseBuilder::send(true, "", route("admin_users"));
  }

  // Remove User
  public function removeUser(Request $request)
  {
    $user = User::where('username', $request->input("username"));
    if($user) {
      $user->forceDelete();
    }
    return ResponseBuilder::send(true, "", route("admin_users"));
  }

  // User Settings
  public function userSettings(AdminUserSettingsRequest $request)
  {
    $user = Auth::user();
    $email = $request->input("email");
    if($email != $user->email) {
      $new = User::where("email", $email)->first();
      if($new && $new->id != $user->id) {
        $messages = array("email" => "The email is already taken.");
        return ResponseBuilder::send(false, $messages, "");
      }
    }
    $user->fullname = $request->input("fullname");
    $user->email = $request->input("email");
    $user->save();
    return ResponseBuilder::send(true, "", route("admin_settings"));
  }
}
