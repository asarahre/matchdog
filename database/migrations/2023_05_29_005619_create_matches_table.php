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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id_liked');
            $table->unsignedBigInteger('pet_id_liked_by');
            $table->timestamps();

            $table->foreign('pet_id_liked')->references('id')->on('perfilpets');
            $table->foreign('pet_id_liked_by')->references('id')->on('perfilpets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
