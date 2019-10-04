<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\RibbonCutEvent;

use Auth;

class HumanValuesEducationCellController extends Controller
{
  public function __construct() {
    $this->middleware('auth', ['only' => 'trigger']);
  }
  public function index()
  {
    return view('pages.hvecell.index');
  }
  public function trigger()
  {
    event(new RibbonCutEvent('open'));
    return "Ok";
  }
}
