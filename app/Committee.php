<?php

namespace App;

class Committee
{
  public static function all() {
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
