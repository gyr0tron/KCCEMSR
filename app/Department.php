<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    public $timestamps = false;

    public static function getName($url) {
      $dep = Self::where("url",$url)->first();
      if(!$dep) return "College";
      return $dep->name;
    }
}
