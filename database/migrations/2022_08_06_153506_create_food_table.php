<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            //$table->primary('food_id');
            $table->integer('diner_id');
            $table->string('name');
            $table->string('ingredients');
            $table->string('allergens');
            $table->string('description');
            $table->string('type');
            $table->float('price');
            $table->foreign('diner_id')->references('diner_id')->on('diners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
