<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use File;

class Carousel extends Model
{
  protected $table = "carousel";

  public function getUrl() {
    return url("public/carousel/" . $this->image);
  }
  public function getThumb() {
    return url("public/carousel/thumb/" . $this->image);
  }
  public function uploadImage($file) {
    $this->checkDirs();
    $filename = str_random(30) . uniqid() . '.' . 'jpg';
    $filepath = public_path('public\\carousel\\' .$filename);
    Image::make($file)->save( $filepath );
    $thumb = public_path('public\\carousel\\thumb\\' .$filename);
    Image::make($file)->resize(250, 150)->save($thumb);
    $this->image = $filename;
  }
  public function deleteImage() {
    $filename = $this->image;
    $filepath = public_path('public\\carousel\\' .$filename);
    File::delete($filepath);
    $thumb = public_path('public\\carousel\\thumb\\' .$filename);
    File::delete($thumb);
  }
  public function checkDirs() {
    $path = public_path('public\\carousel');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
    $path = public_path('public\\carousel\\thumb');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }
}
