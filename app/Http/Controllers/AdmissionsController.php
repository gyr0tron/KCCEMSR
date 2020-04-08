<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\FileUpload;
use App\Mail\MockcetMail;
use Mail;

class AdmissionsController extends Controller
{
  public function __construct()
  {
    $this->middleware('admission', ['only' => ['studentApplication']]);
  }
  public function get($action)
  {
    if($action == "aicte-affiliation") return view('pages.aicte-affiliation');
    if($action == "total-intake") return view('pages.total-intake');
    if($action == "scholarship") return view('pages.scholarship');
    $file = FileUpload::where('type', $action)->first();
    if(!$file) abort("404");
    $admission_list = FileUpload::admission_list;
    $admission_name_list = FileUpload::admission_name_list;
    $title = $admission_name_list[array_search($action, $admission_list)];
    $url = $file->getUrl();
    $menu_item = "admissions";
    return view('pages.pdfview', compact("title", "url", "menu_item"));
  }
  public function applyOnline()
  {
    if(Auth::check()) {
      return redirect()->route('admissions-application');
    }
    return view('pages.admissions.apply');
  }
  public function details() {
    return view('pages.admissions.details');
  }
  public function studentApplication()
  {
    return view('pages.admissions.student-application');
  }
  public function mockcet2020()
  {
    return view('pages.admissions.mockcet2020');
  }
  public function postMockcet2020(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|unique:mock_test_users',
    ]);
    $name = $request->input('name');
    $to_email = $request->input('email');

    $user = \App\MockTestUser::create([
      'name' => $name,
      'email' => $to_email,
    ]);

    // Mail::send('mails.mockcet', ['name'=>$name], function($message) use($to_email)  {
    //   $message->subject("MOCK CET 2020 Test");
    //   if(strpos(env('MAIL_USERNAME'), "@"))$message->from(env('MAIL_USERNAME'), 'kccemsr.edu.in');
    //   $message->to($to_email);
    // });
    return view('pages.admissions.mockcet2020')->with(['success'=>true]);
  }
}
