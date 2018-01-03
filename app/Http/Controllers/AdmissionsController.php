<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FileUpload;

class AdmissionsController extends Controller
{
  public function get($action)
  {
    $file = FileUpload::where('type', $action)->first();
    if(!$file) abort("404");
    $admission_list = FileUpload::admission_list;
    $admission_name_list = FileUpload::admission_name_list;
    $title = $admission_name_list[array_search($action, $admission_list)];
    $url = $file->getUrl();
    return view('pages.pdfview', compact("title", "url"));
  }
}
