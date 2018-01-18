<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Message;

class AboutController extends Controller
{
    public function getAbout()
    {
      return view('pages.about');
    }
    public function getCommittees()
    {
      return view('pages.committees');
    }
    public function getInfrastructures()
    {
      return view('pages.infrastructure');
    }
}
