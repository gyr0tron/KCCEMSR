<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class AcademicTopper extends Model
{
  protected $table = "academic_toppers";
  public $timestamps = true;

  public function getYear()
  {
    switch ($this->year) {
      case 2:
      return "SE";
      case 3:
      return "TE";
      case 4:
      return "BE";
      default:
      return "Undefined";
    }
  }

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
