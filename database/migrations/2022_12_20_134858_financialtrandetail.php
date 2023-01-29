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
        Schema::create('financial_transdetail', function (Blueprint $table){
            $table->id();
            $table->integer('financialTranId')->nullable();
            $table->integer('moduleid')->nullable();
            $table->string('amount');
            $table->integer('headId')->nullable();
            $table->string('crdr');
            $table->integer('brid')->nullable();
            $table->string('head_name');
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
        Schema::dropIfExists('financial_transdetail');

    }
};
