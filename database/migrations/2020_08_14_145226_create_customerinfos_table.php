<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('firstname');
            $table->string('surname');
            $table->string('othername');
            $table->string('address');
            $table->string('town');
            $table->string('lga');
            $table->string('state');
            $table->string('phone');
            $table->string('dob');
            $table->string('maritalstatus');
            $table->string('nationality');
            $table->string('nokname');
            $table->string('nokrelationship');
            $table->string('nokaddress');
            $table->string('nokphone');
            $table->string('occupation');
            $table->string('religion');
            $table->string('passport');
            $table->string('signature');
            $table->string('product');
            $table->string('accountno');
            $table->string('contribution')->nullable();
            $table->string('balance');
            $table->string('createdby');
            $table->string('status');
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
        Schema::dropIfExists('customerinfos');
    }
}




