<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('departments', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 191)->unique();
      $table->string('url', 191)->unique();
      $table->longtext('description')->nullable();
      $table->longtext('vision')->nullable();
      $table->longtext('mission')->nullable();
      $table->longtext('objectives')->nullable();
      $table->longtext('outcome')->nullable();
      $table->string('image')->nullable();
    });

    $departments = array(
      array("name"=>"Computer Engineering", "url"=>"computer"),
      array("name"=>"Electronics Engineering", "url"=>"electronics"),
      array("name"=>"Electronics & Telecommunication", "url"=>"extc"),
      array("name"=>"Information Technology", "url"=>"it"),
      array("name"=>"Dept of Humanities and Sciences", "url"=>"humanities-sciences")
    );

    foreach ($departments as $key => $value) {
      DB::table('departments')->insert([
        'name' => $value['name'],
        'url' => $value['url'],
      ]);
    }


  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('departments');
  }
}
