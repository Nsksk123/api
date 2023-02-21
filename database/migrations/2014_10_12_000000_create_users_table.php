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
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->unsignedBigInteger('id_card')->primary();
            $table->string('born_date');
            $table->string('gender');
            $table->string('address');
            $table->string('password');
            $table->integer('status');
            $table->unsignedBigInteger('region_id');
            $table->rememberToken();

            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
