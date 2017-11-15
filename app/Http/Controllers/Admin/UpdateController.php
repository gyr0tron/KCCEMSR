<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

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
    exec('git pull origin master', $output);
    if(base_path("public") != public_path()) {
      $folders = ['images','js','css'];
      foreach ($folders as $f) {
        $src = base_path("public\\$f");
        $dest = public_path();
        if (!file_exists(public_path($f))) mkdir(public_path($f), 0700);
        $res = system("cp -r $src $dest");
      }
    }
    return view("pages.admin.update",compact("output"));
  }
}
