<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Auth;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function getRole() {
    switch ($this->access) {
      case '2':
      return "Administrator";
      break;
      case '1':
      return "Editor";
      break;
      default:
      return "User";
      break;
    }
  }

  public function is_admin() {
    return $this->access == 2;
  }
  public function is_admission() {
    return $this->access == 2 || $this->access == 3
  }

}
