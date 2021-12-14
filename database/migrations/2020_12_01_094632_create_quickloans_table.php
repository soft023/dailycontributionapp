<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuickloansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quickloans', function (Blueprint $table) {

            
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('bvn');
            $table->string('phoneone');
            $table->string('phonetwo')->nullable();
            $table->string('dob');
            $table->string('maritalstatus');
            $table->string('email');
            $table->string('noofchildren');
            $table->string('homeaddress');
            $table->string('lga');
            $table->string('stateoforigin');
            $table->string('nationality');
            $table->string('idtype');
            $table->string('idcardno');
            $table->string('idissuedate');
            $table->string('idexpirydate');



            $table->string('loantype');
            $table->string('tenure');
            $table->string('net');
            $table->string('loanamount');
            $table->string('amountinword');
            $table->string('loanpurpose');
            $table->string('repaymentsource');
            $table->string('bankname');
            $table->string('salaryacount');




            $table->string('doe');  
            $table->string('gradelevel');
            $table->string('mda');
            $table->string('staffidno');
            $table->string('biometricno');
            $table->string('officeaddress');
            $table->string('officeremail')->nullabe();
            $table->string('accountofficer');




            $table->string('loanpassport');
            $table->string('loansignature');
            $table->string('loanstaffidcard');
            $table->string('loanvalidid');
            $table->string('loanletter');
            $table->string('loanpayslip');




            $table->string('credit')->nullable();
            $table->string('creditcomment')->nullable();

            $table->string('control')->nullable();
            $table->string('controlcomment')->nullable();

            $table->string('fincon')->nullable();
            $table->string('finconcomment')->nullable();

            $table->string('md')->nullable();
            $table->string('mdcomment')->nullable();

            $table->string('operations')->nullable();
            $table->string('operationsstatus')->nullable();







            $table->string('category');
            $table->string('stage');
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
        Schema::dropIfExists('quickloans');
    }
}
