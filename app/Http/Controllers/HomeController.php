<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;

class HomeController extends Controller
{
    public function getHome()
    {
      return view('home');
    }

    public function getCarousel() {
      return Carousel::select("image","title","description")->get();
    }
}
