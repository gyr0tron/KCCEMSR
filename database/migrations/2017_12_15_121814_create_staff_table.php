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
      $table->string('image');
      $table->string('displayname');
      $table->longtext('qualification');
      $table->string('experience');
      $table->string('designation');
      $table->longtext('interest');
      $table->string('department')->nullable();
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
