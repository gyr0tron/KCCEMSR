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
}
