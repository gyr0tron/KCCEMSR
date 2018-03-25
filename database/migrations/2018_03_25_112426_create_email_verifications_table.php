<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailVerificationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('email_verifications', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('userid');
      $table->string('email');
      $table->string('tokenid',191)->unique();
      $table->string('token');
      $table->integer('times')->default(0);
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('email_verifications');
  }
}
