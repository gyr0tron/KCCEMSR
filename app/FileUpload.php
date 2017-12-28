<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class FileUpload extends Model
{
  protected $table = "fileuploads";
  public $timestamps = true;

  public function getUrl() {
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

  public function checkDirs() {
    $path = public_path('public/files');
    File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
  }
}
