<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class Story extends Model
{
  protected $table = "stories";
  public $timestamps = true;

  public function getUrl() {
    return url("public/files/events" . $this->filename);
  }

  public function uploadFile($file, $filename="")
  {
    $this->checkDirs();
    if($filename=="") {
      $filename = $file->getClientOriginalName();
      if(file_exists(public_path('public/files/events') . $filename)) {
        $filename = str_replace('.' . $file->clientExtension(), '', $filename) .'-' . uniqid() . '.' . $file->clientExtension();
      }
    }else {
      $filename = $filename  . '.' . $file->clientExtension();
    }
    $file->move(public_path('public/files/events'), $filename);
    return $filename;
  }

  public function checkDirs() {
    $path = public_path('public/files/events');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }

  public function deleteFile()
  {
    $path = public_path('public/files/events');
    File::delete($path . $this->filename);
  }

  public function generateUrl()
  {
    $url = strtolower($this->title);
    $url = str_replace(" ", "-", $url);
    $this->url = $url;
  }
}
