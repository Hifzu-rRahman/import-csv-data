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
        Schema::create('financial_trans', function (Blueprint $table){
            $table->id();
            $table->integer('moduleid')->nullable();
            $table->integer('tranid')->nullable();
            $table->string('admno');
            $table->string('amount');
            $table->string('crdr');
            $table->string('transDate');
            $table->string('acadYear');
            $table->string('Entrymode');
            $table->string('voucherno');
            $table->integer('brid')->nullable();
            $table->string('Type of consession');
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
        Schema::dropIfExists('financial_trans');
        
    }
};
