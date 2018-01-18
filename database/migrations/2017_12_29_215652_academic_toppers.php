<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AcademicToppers extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('academic_toppers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->nullable();
      $table->string('pointer')->nullable();
      $table->string('image')->nullable();
      $table->string('department')->nullable();
      $table->integer('year')->nullable();
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
    Schema::dropIfExists('academic_toppers');
  }
}
