<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoblistTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('joblists', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->nullable();
      $table->string('filename')->nullable();
      $table->string('url')->nullable();
      $table->text('responsibility')->nullable();
      $table->text('eligibility')->nullable();
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
    Schema::dropIfExists('joblists');
  }

}
