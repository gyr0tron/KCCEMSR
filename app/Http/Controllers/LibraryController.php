<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\FileUpload;

class LibraryController extends Controller
{
  public function getQuestionPapers()
  {
    return view('pages.question-papers');
  }
  public function getDepartments(Request $request) {
    $reply = [];
    foreach (Department::orderBy('id','ASC')->get() as $dep) {
      $data['name'] = $dep->name;
      $data['url'] = $dep->url;
      array_push($reply, $data);
    }
    return $reply;
  }
  public function getYears(Request $request) {
    $reply = [];
    $dep = Department::where('url',$request->input('department'))->first();
    if(!$dep) return [];
    if($dep->isPrimary()) {
      $data['no'] = "1";
      $data['name'] = "FE";
      array_push($reply, $data);
    }
    else {
      $data['no'] = "2";
      $data['name'] = "SE";
      array_push($reply, $data);
      $data['no'] = "3";
      $data['name'] = "TE";
      array_push($reply, $data);
      $data['no'] = "4";
      $data['name'] = "BE";
      array_push($reply, $data);
    }
    return $reply;
  }
  public function getSems(Request $request) {
    switch ($request->input('year')) {
      case '1':
      return [1,2];
      case '2':
      return [3,4];
      case '4':
      return [5,6];
      case '4':
      return [7,8];
    }
    return [1,2];
  }
  public function searchQuestionPapers(Request $request) {
    $department = $request->input('department');
    $year = $request->input('year');
    $sem = $request->input('sem');
    $reply = [];
    $groups = FileUpload::where('type','question-papers')->where('department', $department)->where('year',$year)->where('sem',$sem)->distinct()->get(['section']);
    // return $groups;
    foreach ($groups as $group) {
      $group = $group->section;
      $groupData = [];
      $files = FileUpload::where('type','question-papers')->where('department', $department)->where('year',$year)->where('sem',$sem)->where('section',$group)->get();
      foreach ($files as $file) {
        $data['name'] = $file->name;
        $data['url'] = $file->getUrl();
        $data['year'] = $file->section;
        array_push($groupData, $data);
      }
      array_push($reply, ['year'=>$group,'papers'=>$groupData]);
    }
    return $reply;
  }
}
