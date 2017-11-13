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
    $last_line = system('ls', $retval);
    return $last_line;
    // return redirect()->route('admin_settings');
  }
}
