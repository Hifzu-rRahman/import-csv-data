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
        Schema::create('feetypes', function (Blueprint $table){
            $table->id();
            $table->string('feecategory');
            $table->string('f_name');
            $table->integer('Collection_id')->nullable();
            $table->integer('br_id')->nullable();
            $table->integer('Seq_id')->nullable();
            $table->string('Fee_type_ledger');
            $table->string('Fee_headtype');
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
        Schema::dropIfExists('feetypes');

    }
};
