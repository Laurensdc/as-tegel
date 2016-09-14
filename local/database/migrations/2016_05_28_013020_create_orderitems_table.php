<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('afmetingen');
            $table->decimal('prijs_besteld', 4, 2);

            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');

            // Necessary?? Mb just fill it in under name            
           // $table->integer('subcategorie_id')->unsigned();
           // $table->foreign('subcategorie_id')->references('id')->on('subcategories');

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
        Schema::drop('orderitems');
    }
}
