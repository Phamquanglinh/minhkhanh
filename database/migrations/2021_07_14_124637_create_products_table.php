<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->integer("status");
            $table->unsignedBigInteger("category_id");
            //$table->unsignedBigInteger("trade_id");
            $table->longText("avatar");
            $table->string("short");
            $table->longText("description");
            $table->string("price");
            $table->string("origin_price");
            $table->string("code");
           // $table->integer("type");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories");
            //$table->foreign("trade_id")->references("id")->on("trades");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
