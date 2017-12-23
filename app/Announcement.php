<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;

class Announcement extends Model
{
    protected $table = "annoucements";
    public $timestamps = true;
}
