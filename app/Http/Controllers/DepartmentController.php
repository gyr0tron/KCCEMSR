<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

class DepartmentController extends Controller
{
    public function get($name)
    {
      $dep = Department::where("url",$name)->first();
      if(!$dep) {
        abort(404, 'Page Not Found');
      }
      return view('pages.department', compact("dep"));
    }
}
