<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class Admission extends Model
{
    protected $table = "admissions";
    public $timestamps = true;

    public function getImage() {
      $filename = $this->id . '.' . 'jpg';
      $filepath = public_path('public/admissions/' .$filename);
      if(File::exists($filepath)) {
        return url("public/admissions/" . $filename);
      }
      else {
        return "";
      }
    }
    public function uploadImage($file) {
      $this->checkDirs();
      $filename = $this->id . '.' . 'jpg';
      $filepath = public_path('public/admissions/' .$filename);
      Image::make($file)->save( $filepath );
    }
    public function deleteImage() {
      $filename = $this->id . '.' . 'jpg';
      $filepath = public_path('public/admissions/' .$filename);
      File::delete($filepath);
    }
    public function checkDirs() {
      $path = public_path('public/admissions/');
      File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
    }
}
