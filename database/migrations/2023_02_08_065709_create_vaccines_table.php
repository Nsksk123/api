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
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->boolean('Sinovac');
            $table->boolean('Astrazenaca');
            $table->boolean('Moderna');
            $table->boolean('Pfizer');
            $table->boolean('Sinnopharm');
            $table->unsignedBigInteger('spot_id');
            $table->timestamps();

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
        Schema::dropIfExists('vaccines');
    }
};