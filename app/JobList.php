<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class JobList extends Model
{
  protected $table = "joblists";
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
    while(Event::where('url',$url)->first()) {
      $url = $url.'-'.$no++;
    }
    $this->url = $url;
  }
}
