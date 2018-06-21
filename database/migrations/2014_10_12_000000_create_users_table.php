<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('username', 191)->unique();
      $table->string('email', 191)->unique();
      $table->string('fullname');
      $table->string('password');
      $table->enum("access",['0','1','2','3','4'])->default('1');
      $table->enum("type",['0','1','2'])->default('1');//0-Admin, 1-Admission, 2-Alumni
      $table->enum("verified", ['0', '1'])->default('0');
      $table->string('skin')->default('blue');
      $table->rememberToken();
      $table->timestamps();
    });

    DB::table('users')->insert([
      'username' => "admin",
      'email' => "admin",
      'fullname' => "admin",
      'access' => "1",
      'type' => "0",
      "password" => bcrypt("admin"),
      'created_at' => date("Y-m-d H:i:s"),
      'updated_at' => date("Y-m-d H:i:s"),
    ]);
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
