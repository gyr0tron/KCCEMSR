<?php

namespace App;

class Committee
{
  const committees = [
    ["name"=>"Student Council", "url"=>"student-council"],
    ["name"=>"E-Cell", "url"=>"ecell"],
    ["name"=>"KC Magazine", "url"=>"kc-magazine"],
    ["name"=>"KC Rotaract", "url"=>"kc-rotaract"],
  ];

  public static function all() {
    return Self::committees;
  }
}
