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
use App\Http\Requests\AdminAddAcademicTopper;
use App\Http\Requests\AdminAddStaff;
use App\Http\Requests\AdminAddAnnouncement;
use App\Http\Requests\AdminFileUploadDefaultRequest;
use App\Http\Requests\AdminAddStaffNotices;
use App\Http\Requests\AdminAddExamResult;
use App\Http\Requests\AdminAddPublication;
use App\Http\Requests\AdminAddTestimonial;
use App\Http\Requests\AdminAddCommitteeRequest;
use App\Http\Requests\AdminAddInfrastructure;

use Auth;
use Setting;
use Image;
use App\User;
use App\Carousel;
use App\Message;
use App\Event;
use App\Eventimage;
use App\Department;
use App\Achievement;
use App\AcademicTopper;
use App\Staff;
use App\Announcement;
use App\FileUpload;
use App\Publication;
use App\Testimonial;
use App\Committee;
use App\Infrastructure;
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
    $event->generateUrl();
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
    $event->generateUrl();
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
  // Edit contact details
  public function editContactDetails(Request $request)
  {
    Setting::set('contact-address', $request->input('address'));
    Setting::set('contact-phone', $request->input('phone'));
    Setting::set('contact-email', $request->input('email'));
    Setting::save();
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
    if($request->image) {
      $dep->removeImage();
      $dep->uploadImage($request->image);
    }
    $dep->description = $request->input("description","");
    $dep->message = $request->input("message","");
    $dep->vision = $request->input("vision","");
    $dep->mission = $request->input("mission","");
    $dep->objectives = $request->input("objectives","");
    $dep->outcome = $request->input("outcome","");
    $dep->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Departmental Achievement
  public function addDepartmentalAchievement(AdminAddDepartmentalAchievement $request)
  {
    $ach = new Achievement();
    $ach->name = $request->input("name","");
    $ach->description = $request->input("description", "");
    $ach->department = $request->input("department", "");
    $ach->type = "1";
    $ach->created_by = Auth::user()->id;
    $ach->updated_by = Auth::user()->id;
    $file = $request->image;
    if($file) {
      $ach->uploadImage($file);
    }
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
  // Edit Department Student Achievement
  public function editStudentAchievement(Request $request)
  {
    $id = $request->input('achievement-id','-1');
    $ach = Achievement::where('id',$id)->first();
    if(!$ach) abort(404, 'Not Found');
    $ach->name = $request->input("name","");
    $ach->description = $request->input("description", "");
    $ach->updated_by = Auth::user()->id;
    $file = $request->image;
    if($file) {
      $ach->removeImage();
      $ach->uploadImage($file);
    }
    $ach->save();
    return ResponseBuilder::send(true, "", route('admin_department',[$ach->department, 'students-achievement']));
  }
  // Edit Departmental Achievement
  public function editDepartmentalAchievement(Request $request)
  {
    $id = $request->input('achievement-id','-1');
    $ach = Achievement::where('id',$id)->first();
    if(!$ach) abort(404, 'Not Found');
    $ach->name = $request->input("name","");
    $ach->description = $request->input("description", "");
    $ach->updated_by = Auth::user()->id;
    $file = $request->image;
    if($file) {
      $ach->removeImage();
      $ach->uploadImage($file);
    }
    $ach->save();
    return ResponseBuilder::send(true, "", route('admin_department',[$ach->department, 'departmental-achievements']));
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
    $ach->removeImage();
    $ach->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Add Academic Topper
  public function addAcademicTopper(AdminAddAcademicTopper $request)
  {
    $top = new AcademicTopper();
    $top->name = $request->input('topper_name');
    $top->pointer = $request->input('topper_pointer');
    $top->year = $request->input('topper_year');
    $top->department = $request->input("topper_department","");
    $file = $request->topper_image;
    if($file) {
      $top->uploadImage($file);
    }
    $top->created_by = Auth::user()->id;
    $top->updated_by = Auth::user()->id;
    $top->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function removeAcademicTopper(Request $request)
  {
    $id = $request->input("id","-1");
    $top = AcademicTopper::where("id",$id)->first();
    if(!$top) abort(500, 'Not Found');
    $top->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Add Staff
  public function addStaff(AdminAddStaff $request)
  {
    $staff = new Staff();
    $staff->name = $request->input("name","");
    $staff->displayname = $request->input("display","");
    $staff->email = $request->input("email","");
    $staff->designation = $request->input("designation","");
    $staff->qualification = $request->input("qualification","");
    $staff->experience = $request->input("experience","");
    $staff->interest = $request->input("interest","");
    $staff->department = $request->input("department","");
    $staff->workshops = $request->input("workshops","");
    $staff->publications = $request->input("publications","");
    $staff->created_by = Auth::user()->id;
    $staff->updated_by = Auth::user()->id;
    $staff->uploadImage($request->image);
    $staff->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function editStaff(Request $request)
  {
    $id = $request->input('staff-id','-1');
    $staff = Staff::where('id',$id)->first();
    if(!$staff) abourt(404,"Not Found");
    $staff->name = $request->input("name","");
    $staff->displayname = $request->input("display","");
    $staff->email = $request->input("email","");
    $staff->designation = $request->input("designation","");
    $staff->qualification = $request->input("qualification","");
    $staff->experience = $request->input("experience","");
    $staff->interest = $request->input("interest","");
    $staff->workshops = $request->input("workshops","");
    $staff->publications = $request->input("publications","");
    $staff->updated_by = Auth::user()->id;
    if($request->image) {
      $staff->removeImage();
      $staff->uploadImage($request->image);
    }
    $staff->save();
    return ResponseBuilder::send(true, "", route('admin_department',[$staff->department, 'staff']));
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
  // Add Announcement
  public function addAnnouncement(AdminAddAnnouncement $request)
  {
    $anouncement = new Announcement();
    $anouncement->title = $request->input("title","");
    $anouncement->link = $request->input("description", "");
    $anouncement->created_by = Auth::user()->id;
    $anouncement->updated_by = Auth::user()->id;
    $anouncement->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function removeAnnouncement(Request $request)
  {
    $id = $request->input("id","-1");
    $anouncement = Announcement::where("id",$id)->first();
    if(!$anouncement) abort(404, 'Not Found');
    $anouncement->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Acadmics
  public function updateCurriculum(AdminFileUploadDefaultRequest $request)
  {
    $type = "curriculum-plan";
    $upload = FileUpload::where('type',$type)->first();
    if(!$upload) {
      $upload = new FileUpload();
      $upload->type = $type;
      $upload->created_by = Auth::user()->id;
      $upload->updated_by = Auth::user()->id;
    }
    $upload->filename = $upload->uploadFile($request->file('file'), $type);
    $upload->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function addStaffnotices(AdminAddStaffNotices $request)
  {
    $type = "staff-notices";
    $upload = new FileUpload();
    $upload->type = $type;
    $upload->name = $request->input('title');
    $upload->created_by = Auth::user()->id;
    $upload->updated_by = Auth::user()->id;
    $upload->filename = $upload->uploadFile($request->file('file'));
    $upload->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function addExamResults($action, AdminAddExamResult $request)
  {
    $upload = new FileUpload();
    $upload->type = $action;
    $upload->name = $request->input('name');
    $upload->department = $request->input('department');
    $upload->year = $request->input('year');
    $upload->created_by = Auth::user()->id;
    $upload->updated_by = Auth::user()->id;
    $upload->filename = $upload->uploadFile($request->file('file'));
    $upload->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function addPublication(AdminAddPublication $request)
  {
    $publication = new Publication();
    $publication->name = $request->input('name');
    $publication->description = $request->input('description');
    $publication->uploadImage($request->image);
    $publication->created_by = Auth::user()->id;
    $publication->updated_by = Auth::user()->id;
    $publication->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function editPublication()
  {

  }
  public function removePublication(Request $request)
  {
    $id = $request->input("id","-1");
    $publication = Publication::where("id",$id)->first();
    if(!$publication) abort(404, 'Not Found');
    $publication->removeImage();
    $publication->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Testimonial Add
  public function addTestimonial(AdminAddTestimonial $request)
  {
    $test = new Testimonial();
    $test->name = $request->input("name");
    $test->comment = $request->input("comment");
    $test->created_by = Auth::user()->id;
    $test->updated_by = Auth::user()->id;
    $test->uploadImage($request->image);
    $test->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Testimonial Remove
  public function removeTestimonial(Request $request)
  {
    $id = $request->input("id","-1");
    $test = Testimonial::where("id",$id)->first();
    if(!$test) abort(404, 'Not Found');
    $test->removeImage();
    $test->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Infrastructure Add
  public function addInfrastructure(AdminAddInfrastructure $request)
  {
    $test = new Infrastructure();
    $test->name = $request->input("name");
    $test->description = $request->input("description");
    $test->created_by = Auth::user()->id;
    $test->updated_by = Auth::user()->id;
    $test->uploadImage($request->image);
    $test->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Infrastructure Remove
  public function removeInfrastructure(Request $request)
  {
    $id = $request->input("id","-1");
    $test = Infrastructure::where("id",$id)->first();
    if(!$test) abort(404, 'Not Found');
    $test->removeImage();
    $test->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  public function updateAdmission($action, Request $request)
  {
    $admission_list = FileUpload::admission_list;
    if(!in_array($action, $admission_list)) abort(404, 'Page Not Found');
    $upload = FileUpload::where('type',$action)->first();
    if(!$upload) {
      $upload = new FileUpload();
      $upload->type = $action;
      $upload->created_by = Auth::user()->id;
      $upload->updated_by = Auth::user()->id;
    }
    $upload->filename = $upload->uploadFile($request->file('file'), $action);
    $upload->save();
    return ResponseBuilder::send(true, "", "");
  }
  // Library
  public function addLibrary($action, Request $request)
  {
    $library_list = FileUpload::library_list;
    if(!in_array($action, $library_list)) abort(404, 'Page Not Found');
    $upload = FileUpload::where('type',$action)->first();
    $upload = new FileUpload();
    $upload->type = $action;
    $upload->name = $request->input('name');
    $upload->department = $request->input('department');
    $upload->year = $request->input('year');
    $upload->created_by = Auth::user()->id;
    $upload->updated_by = Auth::user()->id;
    $upload->filename = $upload->uploadFile($request->file('file'));
    $upload->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function removeLibrary(Request $request)
  {
    $id = $request->input("id","-1");
    $upload = FileUpload::where("id",$id)->first();
    if(!$upload) abort(404, 'Not Found');
    $upload->deleteFile();
    $upload->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
  // Committee
  public function addCommittee(AdminAddCommitteeRequest $request)
  {
    $test = new Committee();
    $test->name = $request->input("name");
    $test->description = $request->input("description");
    $test->created_by = Auth::user()->id;
    $test->updated_by = Auth::user()->id;
    $test->uploadImage($request->image);
    $test->filename = $test->uploadFile($request->file('file'));
    $test->save();
    return ResponseBuilder::send(true, "", "");
  }
  public function removeCommittee(Request $request)
  {
    $id = $request->input("id","-1");
    $upload = Committee::where("id",$id)->first();
    if(!$upload) abort(404, 'Not Found');
    $upload->deleteFile();
    $upload->removeImage();
    $upload->forceDelete();
    return ResponseBuilder::send(true, "", "");
  }
}
