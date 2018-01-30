<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\FileUpload;

class GrievanceController extends Controller
{
  public function get() {
    return view('pages.grievance');
  }
}
