<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodpurcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodpurchases', function (Blueprint $table) {
            $table->id();
            $table->integer('food_id');
            $table->foreign('food_id')->references('food_id')->on('food');
            $table->integer('purchase_id');
            $table->foreign('purchase_id')->references('purchase_id')->on('purchases');
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
        //
    }
}
