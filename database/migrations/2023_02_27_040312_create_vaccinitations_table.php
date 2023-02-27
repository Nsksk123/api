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
        Schema::create('vaccinitations', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Vaccinated');
            $table->string('Spot');
            $table->string('Vaccine');
            $table->string('vaccinitator')->default(null);
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
        Schema::dropIfExists('vaccinitations');
    }
};
