<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FileUpload;

class AcademicsController extends Controller
{
  public function getCurriculumplan()
  {
    $file = FileUpload::where('type','curriculum-plan')->first();
    if(!$file) abort("404");
    $title = "Curriculum plan";
    $url = $file->getUrl();
    return view('pages.pdfview', compact("title", "url"));
  }

  public function getStaffNotices()
  {
    return view('pages.staff-notices');
  }
  public function getStaffNoticebyId($id)
  {
    $file = FileUpload::where('type','staff-notices')->where('id',$id)->first();
    if(!$file) abort("404");
    $title = $file->name;
    $url = $file->getUrl();
    return view('pages.pdfview', compact("title", "url"));
  }
}
