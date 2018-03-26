<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class EmailVerification extends Model
{
  protected $table = "email_verifications";
  public $timestamps = true;

}
