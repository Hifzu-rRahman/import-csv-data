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
        Schema::create('common_fee_collection_headwise', function (Blueprint $table){
            $table->id();
            $table->integer('moduleId')->nullable();
            $table->integer('receiptId')->nullable();
            $table->integer('headId')->nullable();
            $table->string('headName');
            $table->integer('brid')->nullable();
            $table->string('amount');
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
        Schema::dropIfExists('common_fee_collection_headwise');
        
    }
};
