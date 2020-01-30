<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FileUpload;

class AcademicsController extends Controller
{
  public function getCurriculumplan()
  {
    return view('pages.curriculum-plan');
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
  public function getCirculars() {
    return view('pages.circulars');
  }
  public function getCircularsByID($id) {
    $type = "circulars";
    $file = FileUpload::where('type', $type)->where('id',$id)->first();
    if(!$file) abort("404");
    $title = $file->name;
    $url = $file->getUrl();
    $menu_item = "circulars";
    return view('pages.pdfview', compact("title", "url","menu_item"));
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
  public function getNewsletter()
  {
    return view('pages.newsletter');
  }
  public function getResearchAndDevelopment($action)
  {
    return view('pages.rd', compact(['action']));
  }
  public function getStudnetCorner($type)
  {
    $file = FileUpload::where('type', $type)->first();
    if(!$file) abort("404");
    $title = $file->name;
    $url = $file->getUrl();
    $menu_item = "student-corner";
    return view('pages.pdfview', compact("title", "url","menu_item"));
  }
  public function getStudentDevelopment()
  {
    return view('pages.student-development');
  }
}
