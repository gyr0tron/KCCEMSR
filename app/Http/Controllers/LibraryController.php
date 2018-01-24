<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function getQuestionPapers()
    {
      return view('pages.question-papers');
    }
}
