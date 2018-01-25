<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

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
    $dep = Department::where('url',$request->input('department'))->first();
    if(!$dep) return [];
    if($dep->isPrimary()) return ["FE"];
    return ['SE','TE','BE'];
  }
  public function getSems(Request $request) {
    switch ($request->input('year')) {
      case 'FE':
      return [1,2];
      case 'SE':
      return [3,4];
      case 'TE':
      return [5,6];
      case 'BE':
      return [7,8];
    }
    return [1,2];
  }
}
