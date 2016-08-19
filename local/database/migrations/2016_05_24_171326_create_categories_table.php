<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('cat_linknaam')->unique();
            $table->tinyInteger('volgorde')->unique()->nullable();
            
            $table->string('coverfoto')->default('images/cover/_geenfoto.jpg');
            $table->string('fullresfoto')->default('images/cover/_geenfoto.jpg');
    
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
        Schema::drop('categories');
    }
}
