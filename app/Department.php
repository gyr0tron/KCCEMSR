<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


use Image;
use File;

class Department extends Model
{
    protected $table = "departments";
    public $timestamps = false;

    public static function getName($url) {
      $dep = Self::where("url",$url)->first();
      if(!$dep) return "College";
      return $dep->name;
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

    public function isPrimary()
    {
      if($this->url == "humanities-sciences") return true;
      return false;
    }

}
