<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Eventimage;

class Event extends Model
{
  protected $table = "events";
  protected $dates = ['date','created_at','updated_at'];


  public function getFeaturedImage() {
    if($this->featured) {
      $img = Eventimage::where("id",$this->featured)->first();
    }
    else {
      $img = Eventimage::where("id",$this->id)->first();
    }
    if(!$img) return "http://via.placeholder.com/250x150";
    return $img->getUrl();
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
