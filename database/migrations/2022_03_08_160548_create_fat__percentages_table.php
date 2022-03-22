<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fat__percentages', function (Blueprint $table) {
            $table->id();
            $table->string('The_Ratio');
            $table->unsignedBigInteger('Client_number');
            $table->unsignedBigInteger('Categore_id');
            $table->foreign('Client_number')->references('id')->on('clients')->onDelete('cascade');
            $table->string('Fat_Type');
            $table->string('You_Need_Medical_Advice');
            $table->string('You_Do_Not_Need_Medical_Advice');
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
        Schema::dropIfExists('fat__percentages');
    }
}
