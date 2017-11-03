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
      $images = Carousel::select("image","title","description")->get();
      foreach ($images as &$image) {
        $image->image = $image->getUrl();
      }
      return $images;
    }
}
