<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('products', function (Blueprint $tb_product){
            $tb_product->integer('id');
            $tb_product->string('title');
            $tb_product->string('description');
            $tb_product->integer('price');
            $tb_product->integer('quantity');
            $tb_product->integer('price_ht');
            $tb_product->integer('price_ttc');
            $tb_product->timestamps();
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
