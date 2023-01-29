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
        Schema::create('common_fee_collection', function (Blueprint $table){
            $table->id();
            $table->integer('moduleId')->nullable();
            $table->integer('transId')->nullable();
            $table->string('admno');
            $table->string('rollno');
            $table->string('amount');
            $table->integer('brid')->nullable();
            $table->string('acadamicYear');
            $table->string('financialYear');
            $table->string('displayReceiptNo');
            $table->string('Entrymode');
            $table->string('PaidDate');
            $table->string('inactive');
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
        Schema::dropIfExists('common_fee_collection');
        
    }
};
