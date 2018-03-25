<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function getLogin() {
      return view('pages.alumni.login');
    }
}
