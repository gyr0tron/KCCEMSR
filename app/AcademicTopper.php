<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicTopper extends Model
{
  protected $table = "academic_toppers";
  public $timestamps = true;

  public function getYear()
  {
    switch ($this->year) {
      case 2:
      return "Second";
      case 3:
      return "Third";
      case 4:
      return "Final";
      default:
      return "Undefined";
    }
  }
}
