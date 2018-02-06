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
    $menu_item = "academics";
    return view('pages.pdfview', compact("title", "url","menu_item"));
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
    $menu_item = "exam";
    return view('pages.pdfview', compact("title", "url","menu_item"));
  }
  protected $exam_actions = ['results', 'notices', 'timetable'];
  protected $exam_title = ['Exam Results', 'Exam Notices', 'Exam Timetable'];
  public function getExam($action)
  {
    if(!in_array($action, $this->exam_actions)) abort("404");
    $title = $this->exam_title[array_search($action, $this->exam_actions)];
    $type = "exam-$action";
    return view('pages.exam', compact('title','action','type'));
  }
  public function getExamByID($action, $id)
  {
    if(!in_array($action, $this->exam_actions)) abort("404");
    $type = "exam-$action";
    $file = FileUpload::where('type', $type)->where('id',$id)->first();
    if(!$file) abort("404");
    $title = $file->name;
    $url = $file->getUrl();
    $menu_item = "exam";
    return view('pages.pdfview', compact("title", "url","menu_item"));
  }
  public function getPublications()
  {
    return view('pages.publications');
  }
}
