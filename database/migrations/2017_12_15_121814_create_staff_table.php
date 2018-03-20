<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('staff', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 191)->unique();
      $table->string('email', 191)->nullable();
      $table->string('image')->nullable();
      $table->string('displayname')->nullable();
      $table->longtext('qualification')->nullable();
      $table->string('experience')->nullable();
      $table->string('designation')->nullable();
      $table->longtext('interest')->nullable();
      $table->string('file')->nullable();
      $table->longtext('workshops')->nullable();
      $table->longtext('publications')->nullable();
      $table->string('department')->nullable();
      $table->integer('sort')->nullable();
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
    Schema::dropIfExists('staff');
  }

}
