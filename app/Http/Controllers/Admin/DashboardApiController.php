<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAddUserRequest;
use App\Http\Requests\AdminEditUserRequest;
use App\Http\Requests\AdminUserSettingsRequest;
use App\Http\Requests\AdminAddCarouselImageRequest;
use App\Http\Requests\AdminEditCarouselImageRequest;
use App\Http\Requests\AdminAddNewEventRequest;
use App\Http\Requests\AdminAddDepartmentalAchievement;
use App\Http\Requests\AdminAddStudentAchievement;
use App\Http\Requests\AdminAddStaff;

use Auth;
use Image;
use App\User;
use App\Carousel;
use App\Message;
use App\Event;
use App\Eventimage;
use App\Department;
use App\Achievement;
use App\Staff;
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
  // Add new Event
  public function addEvent(AdminAddNewEventRequest $request)
  {
    $event = new Event();
    $event->name = $request->input("name");
    $event->department = $request->input("department","");
    $event->description = $request->input("description");
    $event->created_by = Auth::user()->id;
    $event->updated_by = Auth::user()->id;
    $event->save();
    $images = $request->images;
    if($images) {
      foreach ($images as $file) {
        $img = new Eventimage();
        $img->event = $event->id;
        $img->uploadImage($file);
        $img->save();
      }
    }
    $event->save();
    return ResponseBuilder::send(true, "", route("admin_events"));
  }
  public function removeEvent(Request $request) {
    $id = $request->input("id","-1");
    $event = Event::where("id",$id)->first();
    if(!$event) abort(404, 'Not Found');
    $imges = Eventimage::where("event",$id)->get();
    foreach ($imges as $img) {
      $img->deleteImage();
      $img->forceDelete();
    }
    $event->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Edit Event
  public function editEvent(AdminAddNewEventRequest $request)
  {
    $id = $request->input("id","-1");
    $event = Event::where("id",$id)->first();
    if(!$event) abort(404, 'Not Found');
    $event->name = $request->input("name");
    $event->department = $request->input("department","");
    $event->description = $request->input("description");
    $event->updated_by = Auth::user()->id;
    $event->save();
    $images = $request->images;
    if($images) {
      foreach ($images as $file) {
        $img = new Eventimage();
        $img->event = $event->id;
        $img->uploadImage($file);
        $img->save();
      }
    }
    $event->save();
    return ResponseBuilder::send(true, "", route("admin_events"));
  }
  // Remove Event Image
  public function editEventRemoveImage(Request $request) {
    $id = $request->input("id","-1");
    $img = Eventimage::where("id",$id)->first();
    if(!$img) abort(404, 'Not Found');
    $img->deleteImage();
    $img->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Delete Message
  public function deleteMessage(Request $request)
  {
    if(!Auth::user()->is_admin()) abort("403","No Access");
    $id = $request->input("id","-1");
    $message = Message::where("id",$id)->first();
    if(!$message) abort(404, 'Not Found');
    $message->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Department Overview
  public function departmentOverview(Request $request)
  {
    $id = $request->input("id","-1");
    $dep = Department::where("id",$id)->first();
    if(!$dep) abort(404, 'Not Found');
    $dep->description = $request->input("description","");
    $dep->vision = $request->input("vision","");
    $dep->mission = $request->input("mission","");
    $dep->objectives = $request->input("objectives","");
    $dep->placement = $request->input("placement","");
    $dep->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Departmental Achievement
  public function addDepartmentalAchievement(AdminAddDepartmentalAchievement $request)
  {
    $ach = new Achievement();
    $ach->description = $request->input("description", "");
    $ach->department = $request->input("department", "");
    $ach->type = "1";
    $ach->created_by = Auth::user()->id;
    $ach->updated_by = Auth::user()->id;
    $ach->save();
    return ResponseBuilder::send(true, "","");
  }

  // Department Student Achievement
  public function addStudentAchievement(AdminAddStudentAchievement $request)
  {
    $ach = new Achievement();
    $ach->name = $request->input("name","");
    $ach->description = $request->input("description", "");
    $ach->department = $request->input("department", "");
    $ach->type = "0";
    $ach->created_by = Auth::user()->id;
    $ach->updated_by = Auth::user()->id;
    $file = $request->image;
    if($file) {
      $ach->uploadImage($file);
    }
    $ach->save();
    return ResponseBuilder::send(true, "","");
  }
  // Remove Departmental Achievement
  public function removeDepartmentalAchievement(Request $request)
  {
    $id = $request->input("id","-1");
    $ach = Achievement::where("id",$id)->where("type","1")->first();
    if(!$ach) abort(404, 'Not Found');
    $ach->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Remove Student Achievement
  public function removeStudentAchievement(Request $request)
  {
    $id = $request->input("id","-1");
    $ach = Achievement::where("id",$id)->where("type","0")->first();
    if(!$ach) abort(404, 'Not Found');
    $ach->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Add Staff
  public function addStaff(AdminAddStaff $request)
  {
    $staff = new Staff();
    $staff->name = $request->input("name");
    $staff->displayname = $request->input("display");
    $staff->designation = $request->input("designation");
    $staff->qualification = $request->input("qualification");
    $staff->experience = $request->input("experience");
    $staff->interest = $request->input("interest");
    $staff->department = $request->input("department","");
    $staff->created_by = Auth::user()->id;
    $staff->updated_by = Auth::user()->id;
    $staff->uploadImage($request->image);
    $staff->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Remove Staff
  public function removeStaff(Request $request)
  {
    $id = $request->input("id","-1");
    $staff = Staff::where("id",$id)->first();
    if(!$staff) abort(404, 'Not Found');
    $staff->removeImage();
    $staff->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
}
