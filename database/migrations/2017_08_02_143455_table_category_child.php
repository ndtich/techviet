<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCategoryChild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_child', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category_parent')->unsigned();
            $table->foreign('id_category_parent')->references('id')->on('category_parent');
            $table->string('name');
            $table->string('alias');
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('category_child');
    }
}
