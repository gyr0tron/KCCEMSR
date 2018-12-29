<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('stories', function (Blueprint $table) {
      $table->increments('id');
      $table->enum('type', [0,1]);
      $table->string('title')->nullable();
      $table->date('date')->nullable();
      $table->string('from')->nullable();
      $table->string('to')->nullable();
      $table->string('filename')->nullable();
      $table->string('url')->nullable();
      $table->integer('created_by');
      $table->integer('updated_by');
      $table->timestamps();
    });
  }
  public function down()
  {
    Schema::dropIfExists('stories');
  }
}
