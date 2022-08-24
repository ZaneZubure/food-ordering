<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diners', function (Blueprint $table) {
            $table->id();
            //$table->primary('diner_id');
            $table->string('name')->unique();
            $table->string('type');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->float('rating');
            
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
        Schema::dropIfExists('diners');
    }
}
