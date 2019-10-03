<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanValuesEducationCellController extends Controller
{
  public function index()
  {
    return view('pages.hvecell.index');
  }
}
