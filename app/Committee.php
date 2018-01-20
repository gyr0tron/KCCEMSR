<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class Committee extends Model
{
  protected $table = "committees";
  public $timestamps = true;

  // Image
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
    $path = public_path('public/files');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }
  public function removeImage() {
    $filename = $this->image;
    $filepath = public_path('public/images/' .$filename);
    File::delete($filepath);
  }

  // File
  public function getFile() {
    return url("public/files/" . $this->filename);
  }

  public function uploadFile($file, $filename="")
  {
    $this->checkDirs();
    if($filename=="") {
      $filename = $file->getClientOriginalName();
      if(file_exists(public_path('public/files/') . $filename)) {
        $filename = str_replace('.' . $file->clientExtension(), '', $filename) .'-' . uniqid() . '.' . $file->clientExtension();
      }
    }else {
      $filename = $filename  . '.' . $file->clientExtension();
    }
    $file->move(public_path('public/files/'), $filename);
    return $filename;
  }

  public function deleteFile()
  {
    $path = public_path('public/files/');
    File::delete($path . $this->filename);
  }

  public function generateUrl()
  {
    $url = strtolower($this->name);
    $url = str_replace(" ", "-", $url);
    $no = 1;
    while(Committee::where('url',$url)->first()) {
      $url = $url.'-'.$no++;
    }
    $this->url = $url;
  }



  public static function getAll() {
    $committees = collect([
      (object)["name"=>"Student Council", "url"=>"student-council"],
      (object)["name"=>"E-Cell", "url"=>"ecell"],
      (object)["name"=>"KC Magazine", "url"=>"kc-magazine"],
      (object)["name"=>"KC Rotaract", "url"=>"kc-rotaract"],
      (object)["name"=>"IEEE-KCCOE", "url"=>"ieee-kccoe"],
      (object)["name"=>"IIP", "url"=>"iip"],
      (object)["name"=>"Sports", "url"=>"sports"],
      (object)["name"=>"Cultural", "url"=>"cultural"],
      (object)["name"=>"Literary", "url"=>"literary"],
    ]);
    return $committees;
  }
}
