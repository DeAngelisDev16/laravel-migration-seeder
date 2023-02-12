<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('from', 50);
            $table->string('to', 50);
            $table->dateTime('departure_hour');
            $table->dateTime('arrive_hour');
            $table->string('train_reference', 50);
            $table->tinyInteger('train_carriage_number');
            $table->boolean('In_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
};
