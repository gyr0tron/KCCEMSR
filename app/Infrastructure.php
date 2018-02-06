<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;
use App\ImageUpload;

class Infrastructure extends Model
{
  protected $table = "infrastructures";
  protected $casts = [
    'images' => 'array',
  ];
  public $timestamps = true;

  public function getFeaturedImage() {

    $idno = $this->images[0];
    $img = ImageUpload::where("id",$idno)->first();
    if(!$img) return "http://via.placeholder.com/250x150";
      return $img->getUrl();
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
