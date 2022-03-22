<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbdominalCircumferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abdominal__circumferences', function (Blueprint $table) {
            $table->id();
            $table->string('Ocean_Poison');
            $table->unsignedBigInteger('Client_id');
            $table->unsignedBigInteger('Categore_id');
            $table->foreign('Client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('Cause_Harm');
            $table->string('Does_No_Harm');
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
        Schema::dropIfExists('abdominal__circumferences');
    }
}
