<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('templates', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('template_id');
      $table->string('object_name');
      $table->string('point');
      $table->integer('x');
      $table->integer('y');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('templates');
  }
}
