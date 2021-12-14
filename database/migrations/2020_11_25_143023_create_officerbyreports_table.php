<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficerbyreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officerbyreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('officer');
            $table->string('customer');
            $table->string('accountno');
            $table->string('deposit');
            $table->string('withdrawal');
            $table->string('balance');
            $table->string('posters');
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
        Schema::dropIfExists('officerbyreports');
    }
}
