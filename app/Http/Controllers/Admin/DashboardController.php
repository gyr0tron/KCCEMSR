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
use App\Committee;
use App\FileUpload;

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
  //New Carousel
  public function newcarousel()
  {
    return view("pages.admin.newcarousel");
  }
  //Edit Carousel
  public function editcarousel($id)
  {
    $car = Carousel::where("id",$id)->first();
    if(!$car) abort(404,"Page Not Found");
    return view("pages.admin.newcarousel", compact('car'));
  }
  // Testimonials
  public function testimonials() {
    return view("pages.admin.testimonials");
  }
  // Infrastructures
  public function infrastructures() {
    return view("pages.admin.infrastructure");
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
  public function department_edit($url, $action, $edit) {
    $dep = Department::where("url",$url)->first();
    if(!$dep) abort(404, 'Page Not Found');
    return view("pages.admin.department", compact("dep","action","edit"));
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
  public function edituser($edit)
  {
    if(!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    $user = User::where('id',$edit)->first();
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
  protected $academics_list = ['curriculum-plan','staff-notices','exam-results', 'exam-timetable', 'exam-notices', 'publications'];
  public function academics($action) {
    if(!in_array($action, $this->academics_list)) abort(404, 'Page Not Found');
    return view("pages.admin.academics", compact("action"));
  }
  // Library
  public function library($action)
  {
    $library_list = FileUpload::library_list;
    $library_list_name = FileUpload::library_list_name;
    if(!in_array($action, $library_list)) abort(404, 'Page Not Found');
    $action_name = $library_list_name[array_search($action, $library_list)];
    return view("pages.admin.library", compact("action", "action_name", "library_list","library_list_name"));
  }
  // Admissions
  public function admissions($action)
  {
    $admission_list = FileUpload::admission_list;
    $admission_name_list = FileUpload::admission_name_list;
    if(!in_array($action, $admission_list)) abort(404, 'Page Not Found');
    $action_name = $admission_name_list[array_search($action, $admission_list)];
    return view("pages.admin.admissions", compact("action", "action_name", "admission_list","admission_name_list"));
  }
  // Committees
  public function committees()
  {
    return view('pages.admin.committees');
  }
  public function editCommittee($id)
  {
    $committee = Committee::where('id',$id)->first();
    if(!$committee) abort(404);
    return view('pages.admin.committees', compact('committee'));
  }
  // Careet at KC
  public function careeratkc()
  {
    return view('pages.admin.careeratkc');
  }
  // Placements
  public function placements($action)
  {
    $placments = ['placement-process'];
    if(!in_array($action, $placments)) abort(404, 'Page Not Found');
    return view("pages.admin.placements", compact("action"));
  }
}
