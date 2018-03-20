<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApllyJobRequest;

use App\Department;
use App\Event;
use App\Staff;
use App\Achievement;
use App\Committee;
use App\JobList;
use App\ResponseBuilder;

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
  public function getMediaAtKc()
  {
    return view('pages.mediainkc');
  }
  public function getCareerAtKc_PDF($url)
  {
    $job = JobList::where('url',$url)->first();
    if(!$job) abort(404);
    $title = $job->name;
    $url = $job->getUrl();
    return view('pages.pdfview', compact("title", "url"));
  }
  public function getCareerAtKcApply($url)
  {
    $job = JobList::where('url',$url)->first();
    if(!$job) abort(404);
    return view('pages.careeratkc-apply', compact('job'));
  }
  public function postCareerAtKCApply(ApllyJobRequest $request)
  {
    $url = $request->input('url');
    $job = JobList::where('url',$url)->first();
    if(!$job) abort(404);
    return ResponseBuilder::send(true, "Your application has been received.", "/");
  }

}
