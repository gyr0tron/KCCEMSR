<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTables extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('annoucements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title', 191);
      $table->string('link');
      $table->integer('type');
      $table->integer('created_by');
      $table->integer('updated_by');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('annoucements');
  }

}
