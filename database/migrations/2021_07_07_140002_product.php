<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->comment('商品名稱');
            $table->longText('explanation')->comment('產品說明');
            $table->bigInteger('price')->comment('價格');
            $table->string('quantity')->comment('數量');
            $table->string('category')->comment('分類ID');
            $table->tinyInteger('is_del')->comment('是否上架0:上架 1:下架'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
