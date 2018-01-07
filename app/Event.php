<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Eventimage;

class Event extends Model
{
  protected $table = "events";

  public function getFeaturedImage() {
    if(strlen($this->featured) > 1) {
      return url("public/events/" . $this->featured);
    }
    else {
      $img = Eventimage::where("event",$this->id)->first();
      if(!$img) return "http://via.placeholder.com/250x150";
      return $img->getUrl();
    }
  }

  public function generateUrl()
  {
    $url = strtolower($this->name);
    $url = str_replace(" ", "-", $url);
    $no = 1;
    while(Event::where('url',$url)->first()) {
      $url = $url.'-'.$no++;
    }
    $this->url = $url;
  }

}
