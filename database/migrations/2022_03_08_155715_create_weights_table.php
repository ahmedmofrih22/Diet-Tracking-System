<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->string('Weight_kg');
            $table->unsignedBigInteger('id_Client');
            $table->unsignedBigInteger('Categore_id');
            $table->foreign('id_Client')->references('id')->on('clients')->onDelete('cascade');
            $table->string('Plus');
            $table->string('Minus');
            $table->string('Needs_A_Diet');
            $table->string('Needs_Nourishment');

            $table->string('Notes')->nullable();
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
        Schema::dropIfExists('weights');
    }
}
