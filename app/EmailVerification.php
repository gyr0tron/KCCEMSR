<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use File;

class EmailVerification extends Model
{
  protected $table = "email_verifications";
  public $timestamps = true;

  public static function new(User $user, $email) {
    $ev = new Self();
    $ev->userid = $user->id;
    $ev->email = $email;
    $ev->token = str_random(128);
    $ev->save();
    return $ev;
  }
  public static function verify($token) {
    $ev = EmailVerification::where('token',$token)->first();
    if($ev) {
      $user = User::where('id',$ev->userid)->first();
      $user->email = $ev->email;
      $user->verified = '1';
      $user->save();
      $ev->forceDelete();
      return $user;
    }
    return false;
  }


}
