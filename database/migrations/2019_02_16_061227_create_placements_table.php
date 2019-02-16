<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacementsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('placements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->nullable();
      $table->string('company')->nullable();
      $table->double('package')->nullable();
      $table->string('year')->nullable();
      $table->integer('academic_year')->nullable();
    });
  }
  public function down()
  {
    Schema::dropIfExists('placements');
  }
}
