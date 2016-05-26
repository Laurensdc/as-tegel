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
            $table->increments('product_id');
            $table->string('naam');
            $table->string('afmeting');
            $table->decimal('prijs_particulier', 4, 2);
            $table->decimal('prijs_handelaar', 4, 2);

            $table->string('coverfoto');

            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories');

            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('subcat_id')->on('subcategories');

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
