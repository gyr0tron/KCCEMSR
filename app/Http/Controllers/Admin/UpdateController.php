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
      return redirect()->route('admin_update');
    }
    chdir(base_path());
    $last_line = system('git pull origin master', $retval);

    if(base_path("public") != public_path()) {
      $folders = ['images','js','css'];
      foreach ($folders as $f) {
        $src = base_path("public\\$f");
        $dest = public_path();
        mkdir(public_path($f));
        $res = system("cp -r $src $dest", $retval);
      }
    }
    return $retval;
  }
}
