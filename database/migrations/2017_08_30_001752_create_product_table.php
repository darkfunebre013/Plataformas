<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('product', function (Blueprint $table) {
          $table->increments('Product_id');
          $table->string('name');
          $table->string('path');
          $table->text('description');
          $table->decimal('price', 5, 2);
          $table->timestamps();
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('Category_id')->on('category');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::drop('product');
  }
}
