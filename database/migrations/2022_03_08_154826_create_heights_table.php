<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heights', function (Blueprint $table) {
            $table->id();
            $table->string('Height_Cm');
            $table->unsignedBigInteger('Client__Id');
            $table->unsignedBigInteger('Categore_id');
            $table->foreign('Client__Id')->references('id')->on('clients')->onDelete('cascade');

            $table->string('Natural');
            $table->string('Abnormal');
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
        Schema::dropIfExists('heights');
    }
}
