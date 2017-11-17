<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('achievements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->nullable();
      $table->enum('type',[0,1])->default("0");
      $table->string('department')->nullable("0");
      $table->string('image')->nullable();
      $table->longtext('description')->nullable();
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
    Schema::dropIfExists('achievements');
  }
}
