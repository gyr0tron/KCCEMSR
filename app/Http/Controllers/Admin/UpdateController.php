<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Setting;
use App\ResponseBuilder;

class UpdateController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function update()
  {
    if(!Auth::user()->is_admin()) {
      return redirect()->route('admin_dashboard');
    }
    chdir(base_path());
    exec('git reset --hard 2>&1', $output);
    exec('git pull origin master 2>&1', $output);
    if(base_path("public") != public_path()) {
      $folders = ['images','js','css'];
      foreach ($folders as $f) {
        $src = base_path("public/$f");
        $dest = public_path();
        if (!file_exists(public_path($f))) mkdir(public_path($f), 0700);
        $res = system("cp -r $src $dest 2>&1");
      }
    }
    return view("pages.admin.update",compact("output"));
  }
  public function settings(Request $request) {
    if(!Auth::user()->is_admin()) {
      return redirect()->route('admin_dashboard');
    }
    // Mail Settings
    Setting::set('mail_contactus', $request->input('mail_contactus', ''));
    Setting::set('mail_career', $request->input('mail_career', ''));
    Setting::set('mail_grievance', $request->input('mail_grievance', ''));
    Setting::set('mail_admissions', $request->input('mail_admissions', ''));
    // Maintenance
    $break = $request->input('break','off');
    $break = $break=='on'?1:0;
    $breakTitle = $request->input('break-title','Service Unavailable');
    Setting::set('break',$break);
    Setting::set('break-title',$breakTitle);
    Setting::save();
    return ResponseBuilder::send(true, "", route("admin_settings"));
  }
}
