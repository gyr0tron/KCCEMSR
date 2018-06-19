<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaruoselTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('carousels', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name',191)->unique();
      $table->string('type')->nullable();
      $table->string('images')->nullable();
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
    Schema::dropIfExists('carousels');
  }
}
