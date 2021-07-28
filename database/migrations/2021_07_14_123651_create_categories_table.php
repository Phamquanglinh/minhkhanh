<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->integer("type")->comment("1: Camera, 2: Elevator, 3: Recorder");
            $table->integer("status")->default(1)->comment("0: inactive, 1: active");
            $table->unsignedBigInteger("trademark_id");
            $table->timestamps();
            $table->foreign('trademark_id')->references('id')->on('trademark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
