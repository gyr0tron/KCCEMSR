<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventimagesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('eventimages', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('event');
      $table->string('image')->nullable();
    });
  }
  public function down()
  {
    Schema::dropIfExists('eventimages');
  }
}
