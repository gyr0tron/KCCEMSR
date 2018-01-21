<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementsController extends Controller
{
    public function get() {
      return view('pages.placements');
    }
}
