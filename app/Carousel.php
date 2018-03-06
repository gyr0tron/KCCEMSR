<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use File;

class Carousel extends Model
{
  protected $table = "carousels";
  protected $casts = [
    'images' => 'array',
  ];
  public $timestamps = true;
}
