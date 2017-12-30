<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Event;
use App\Staff;

class DepartmentController extends Controller
{
    public function get($name)
    {
      $dep = Department::where("url",$name)->first();
      if(!$dep) abort(404, 'Page Not Found');
      return view('pages.department', compact("dep"));
    }
    public function getProfile($id)
    {
      $staff = StafF::where('id',$id)->first();
      if(!$staff) abort(404, 'Page Not Found');
      return view('pages.staff-profile', compact("staff"));
    }
    public function getEvent($id)
    {
      $event = Event::where('id',$id)->first();
      if(!$event) abort(404, 'Page Not Found');
      return view('pages.event-details', compact("event"));
    }
}
