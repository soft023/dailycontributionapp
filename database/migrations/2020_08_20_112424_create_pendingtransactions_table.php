<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendingtransactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('refrenceno');
            $table->string('dname');
            $table->string('cname');
            $table->string('daccountno');
            $table->string('caccountno');
            $table->string('amount');
            $table->string('narration');
            $table->string('postedby');
            $table->string('treatedby')->nullable();
            $table->string('status');
            $table->timestamps('financialdate');
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
        Schema::dropIfExists('pendingtransactions');
    }
}
