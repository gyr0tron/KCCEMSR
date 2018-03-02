<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class Announcement extends Model
{
  protected $table = "annoucements";
  public $timestamps = true;

  public function getUrl() {
    return url("public/files/annoucements/" . $this->filename);
  }

  public function getType() {
    switch ($this->type) {
      case 0:
      return 'Curricular';
      case 1:
      return 'Extra Curricular';
      default:
      return 'Unknown';
    }
  }

  public function uploadFile($file, $filename="")
  {
    $this->checkDirs();
    if($filename=="") {
      $filename = $file->getClientOriginalName();
      if(file_exists(public_path('public/files/annoucements/') . $filename)) {
        $filename = str_replace('.' . $file->clientExtension(), '', $filename) .'-' . uniqid() . '.' . $file->clientExtension();
      }
    }else {
      $filename = $filename  . '.' . $file->clientExtension();
    }
    $file->move(public_path('public/files/annoucements/'), $filename);
    return $filename;
  }

  public function checkDirs() {
    $path = public_path('public/files');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }

  public function deleteFile()
  {
    $path = public_path('public/files/annoucements/');
    File::delete($path . $this->filename);
  }
}
