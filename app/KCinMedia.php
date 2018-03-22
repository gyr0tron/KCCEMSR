<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;
use App\ImageUpload;

class KCinMedia extends Model
{
  protected $table = "kcinmedia";
  public $timestamps = true;
}
