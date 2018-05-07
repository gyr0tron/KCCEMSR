<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApllyJobRequest;
use App\Http\Requests\GrievanceRequest;

use App\Department;
use App\Event;
use App\Staff;
use App\Achievement;
use App\Committee;
use App\JobList;
use App\FileUpload;
use App\ResponseBuilder;
use App\Mail\CareerAtKCMail;
use App\Mail\GrievanceMail;

use File;
use Mail;
use Setting;

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
  public function getProfileResume($id)
  {
    $staff = StafF::where('id',$id)->first();
    if(!$staff) abort(404, 'Page Not Found');
    $title = $staff->name;
    $fp = FileUpload::where('id', $staff->file)->first();
    if($fp) $url = $fp->getUrl("public/files/staff/");
    else $url = '';
    $menu_item = "";
    $no_download = true;
    return view('pages.pdfview', compact("title", "url", "menu_item", "no_download"));
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
    return view('pages.kcinmedia');
  }
  public function getCareerAtKc_PDF($url)
  {
    $job = JobList::where('url',$url)->first();
    if(!$job) abort(404);
    $title = $job->name;
    $url = $job->getUrl();
    return view('pages.pdfview', compact("title", "url"));
  }
  public function getCareerAtKcApply($id)
  {
    $job = JobList::where('id',$id)->first();
    if(!$job) abort(404);
    return view('pages.careeratkc-apply', compact('job'));
  }
  public function postCareerAtKCApply(ApllyJobRequest $request)
  {
    $id = $request->input('id');
    $job = JobList::where('id',$id)->first();
    if(!$job) abort(404);
    $path = public_path("temp\\resumes\\");
    $file = $request->resume;
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
    $filename = $file->getClientOriginalName();
    $file->move($path, $filename);
    $filename = $path . $filename;
    Mail::to(Setting::get('mail_career'))->send(new CareerAtKCMail($request->input('name'), $request->input('email'), $request->input('phone'), $filename, $job->name));
    File::delete($path . $filename);
    return ResponseBuilder::send(true, "Your application has been received.", "/");
  }
  public function postGrievance(GrievanceRequest $request)
  {
    $name = $request->input('name','');
    $email = $request->input('email','');
    $phone = $request->input('phone','');
    $subject = $request->input('subject','');
    $message = $request->input('message','');
    $emails = explode(",", Setting::get('mail_grievance'));
    foreach($mail as $mails) {
      Mail::to($mail)->send(new GrievanceMail($name, $email, $phone, $subject, $message));
    }
    return ResponseBuilder::send(true, "Your application has been received.", "/");
  }

}
