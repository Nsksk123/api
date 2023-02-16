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
        Schema::create('spot_details', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('spot');
            $table->integer('vaccinations_count');
            $table->unsignedBigInteger('spot_id');

            $table->foreign('spot_id')->references('id')->on('spots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_details');
    }
};
