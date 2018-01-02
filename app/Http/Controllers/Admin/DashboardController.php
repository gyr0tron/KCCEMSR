<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Carousel;
use App\Event;
use App\Eventimage;
use App\Department;
use App\Publication;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  // Home
  public function home()
  {
    return view("pages.admin.dashboard");
  }
  //Carousel
  public function carousel()
  {
    return view("pages.admin.carousel");
  }
  //Edit Carousel Image
  public function editcoarouselimage($id)
  {
    $car = Carousel::where("id",$id)->first();
    if(!$car) abort(404,"Page Not Found");
    return view("pages.admin.editcoarouselimage", compact("car"));
  }
  // Events
  public function events() {
    return view("pages.admin.events");
  }
  // New Events
  public function newevent() {
    return view("pages.admin.newevent");
  }
  // New Events
  public function editevent($id) {
    $event = Event::where("id",$id)->first();
    if(!$event) abort(404,"Page Not Found");
    $images = Eventimage::where("event",$id)->get();
    return view("pages.admin.editevent", compact("event", "images"));
  }
  public function messages() {
    return view("pages.admin.messages");
  }
  // Department
  public function department($url, $action) {
    $dep = Department::where("url",$url)->first();
    if(!$dep) abort(404, 'Page Not Found');
    return view("pages.admin.department", compact("dep","action"));
  }
  // Users
  public function users()
  {
    if(!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    return view("pages.admin.users");
  }
  // Edit User
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
  // Settings
  public function settings()
  {
    return view("pages.admin.settings");
  }
  // Announcements
  public function announcements()
  {
    return view("pages.admin.announcements");
  }
  // Academics
  protected $academics = ['curriculum-plan','staff-notices','exam-results', 'publications'];
  public function academics($action) {
    if(!in_array($action, $this->academics)) abort(404, 'Page Not Found');
    return view("pages.admin.academics", compact("action"));
  }
}
