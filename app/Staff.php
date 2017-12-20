<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class Staff extends Model
{
    protected $table = "staff";
    public $timestamps = true;

    public function getUrl() {
      return url("public/images/" . $this->image);
    }
    public function uploadImage($file) {
      $this->checkDirs();
      $filename = str_random(30) . uniqid() . '.' . 'jpg';
      $filepath = public_path('public/images/' .$filename);
      Image::make($file)->save( $filepath );
      $this->image = $filename;
    }
    public function checkDirs() {
      $path = public_path('public/images');
      File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
    }
    public function removeImage() {
      $filename = $this->image;
      $filepath = public_path('public/images/' .$filename);
      File::delete($filepath);
    }
}
