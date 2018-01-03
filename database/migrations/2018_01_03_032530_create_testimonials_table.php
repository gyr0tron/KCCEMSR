<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('testimonials', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->nullable();
      $table->longtext('comment')->nullable();
      $table->string('image')->nullable();
      $table->integer("created_by")->nullable();
      $table->integer("updated_by")->nullable();
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
    Schema::dropIfExists('testimonials');
  }
}
