<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAddUserRequest;
use App\Http\Requests\AdminEditUserRequest;
use App\Http\Requests\AdminUserSettingsRequest;
use App\Http\Requests\AdminAddCarouselImageRequest;
use App\Http\Requests\AdminEditCarouselImageRequest;

use Auth;
use Image;
use App\User;
use App\Carousel;
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
    if(!Auth::user()->is_admin()) abort("403","No Access");
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
    if(!Auth::user()->is_admin()) abort("403","No Access");
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
    if(!Auth::user()->is_admin()) abort("403","No Access");
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
    if(strlen($request->input("password")) > 0) {
      $user->password = bcrypt($request->input("password"));
    }
    $user->fullname = $request->input("fullname");
    $user->email = $request->input("email");
    $user->skin = $request->input("skin");
    $user->save();
    return ResponseBuilder::send(true, "", route("admin_dashboard"));
  }

  // Carousel new image
  public function addCarouselImage(AdminAddCarouselImageRequest $request)
  {
    $car = new Carousel();
    $car->title = $request->input("title");
    $car->description = $request->input("description", "");
    $car->created_by = Auth::user()->id;
    $car->updated_by = Auth::user()->id;

    $file = $request->image;
    if(!$file) App::abort(404, 'File not found!');
    $car->uploadImage($file);
    $car->save();
    return ResponseBuilder::send(true, "", route("admin_carousel"));
  }
  // Carousel edit image
  public function editCarouselImage(AdminEditCarouselImageRequest $request)
  {
    $car = Carousel::where("id", $request->input("id"))->first();
    if(!$car)abort("404","Not found");

    $car->title = $request->input("title");
    $car->description = $request->input("description", "");
    $car->updated_by = Auth::user()->id;

    $file = $request->image;
    if($file) {
      $car->deleteImage();
      $car->uploadImage($file);
    }
    $car->save();
    return ResponseBuilder::send(true, "", route("admin_carousel"));
  }
  // Carousel remove image
  public function removeCarouselImage(Request $request)
  {
    $id = $request->input("id","0");
    $car = Carousel::where("id",$id)->first();
    if(!$car) abort("404","Not Found");
    $car->deleteImage();
    $car->forceDelete();
    return ResponseBuilder::send(true, "", route("admin_carousel"));
  }
}
