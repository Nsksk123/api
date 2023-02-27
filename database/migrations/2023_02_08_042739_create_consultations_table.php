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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default(null);
            $table->string('disease_history')->default(null);
            $table->string('current_symptoms')->default(null);
            $table->string('doctor_notes')->default(null);
            $table->string('doctor')->default(null);
            $table->unsignedBigInteger('user_id')->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id_card')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
};
