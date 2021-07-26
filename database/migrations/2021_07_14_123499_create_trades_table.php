<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('trademark')) {
            Schema::create('trademark', function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->integer("type")->comment("1: Camera, 2: Elevator, 3: Recorder");
                $table->integer("status")->default(1)->comment("0: inactive, 1: active");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trademark');
    }
}
