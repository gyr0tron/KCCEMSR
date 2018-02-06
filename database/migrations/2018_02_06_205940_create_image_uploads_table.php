<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageUploadsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('imageuploads', function (Blueprint $table) {
      $table->increments('id');
      $table->string('image')->nullable();
    });
  }
  public function down()
  {
    Schema::dropIfExists('imageuploads');
  }
}
