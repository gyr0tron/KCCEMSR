<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\RibbonCutEvent;

use Auth;

class HumanValuesEducationCellController extends Controller
{
  public function index()
  {
    return view('pages.hvecell.index');
  }
  public function trigger(Request $request)
  {
    if($request->input('token')==env('TOKEN_KEY')) {
      event(new RibbonCutEvent('open'));
    }
    return "Ok";
  }
}
