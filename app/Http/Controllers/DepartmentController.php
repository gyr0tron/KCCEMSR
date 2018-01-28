<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Event;
use App\Staff;
use App\Achievement;
use App\Committee;

class DepartmentController extends Controller
{
  public function getList()
  {
    return view('pages.department-list');
  }
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
  public function getEvent($url)
  {
    $event = Event::where('url',$url)->first();
    if(!$event) abort(404, 'Page Not Found');
    return view('pages.event-details', compact("event"));
  }
  public function getAchievement($id)
  {
    $achivement = Achievement::where('id',$id)->first();
    if(!$achivement) abort(404, 'Page Not Found');
    return view('pages.achievement-details', compact("achivement"));
  }
  public function getLifeAtKc()
  {
    $types = Committee::getAll();
    return view('pages.lifeatkc', compact('types','title'));
  }
  public function getCareerAtKc()
  {
    return view('pages.careeratkc');
  }
}
