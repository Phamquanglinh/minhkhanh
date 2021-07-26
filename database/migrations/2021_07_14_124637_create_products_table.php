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
            $table->integer("status")->default(1)->comment("0: inactive, 1: active");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("trademark_id");
            $table->longText("avatar");
            $table->longText("description");
            $table->string("price");
            $table->string("code");
            $table->integer("type");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("category");
            $table->foreign("trademark_id")->references("id")->on("trademark");
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
