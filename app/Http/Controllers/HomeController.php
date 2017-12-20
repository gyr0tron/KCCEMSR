<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Message;

class HomeController extends Controller
{
    public function getHome()
    {
      return view('home');
    }

    public function getCarousel() {
      $images = Carousel::select("image","title","description")->get();
      foreach ($images as &$image) {
        $image->image = "public/carousel/$image->image";
      }
      return $images;
    }
    public function sendContact(Request $request) {
      $message = new Message();
      $message->name = $request->input("name","");
      $message->email = $request->input("email","");
      $message->message = $request->input("message","");
      $message->save();
      return "Your message was send successfully!";
    }
}
