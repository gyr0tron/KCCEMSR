<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FileUpload;

class AdmissionsController extends Controller
{
  public function get($action)
  {
    if($action == "aicte-affiliation") return view('pages.aicte-affiliation');
    if($action == "total-intake") return view('pages.total-intake');
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
    return view('pages.admissions.apply');
  }
  public function studentApplication()
  {
    return view('pages.admissions.student-application');
  }
}
