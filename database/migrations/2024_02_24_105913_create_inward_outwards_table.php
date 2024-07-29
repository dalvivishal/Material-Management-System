<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardOutwardsTable extends Migration
{
  public function up()
  {
    Schema::create('inward_outwards', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('material_category'); // Field for material category
      $table->unsignedBigInteger('material_id');
      $table->date('date');
      $table->float('quantity', 8, 2);
      $table->timestamps();

      // Define foreign key constraints
      $table->foreign('material_category')->references('id')->on('categories')->onDelete('cascade');
      $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('inward_outwards');
  }
}
