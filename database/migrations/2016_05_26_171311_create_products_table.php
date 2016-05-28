<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('afmetingen');

            $table->decimal('prijs_particulier', 4, 2);
            $table->decimal('prijs_handelaar', 4, 2);
            $table->boolean('invoorraad')->default(true);

            $table->text('beschrijving');
            $table->string('coverfoto')->default('images/producten/geenfoto.jpg');

            $table->integer('subcategorie_id')->unsigned();
            $table->foreign('subcategorie_id')->references('id')->on('subcategories');

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
        Schema::drop('products');
    }
}
