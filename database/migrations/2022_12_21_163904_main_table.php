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
        Schema::create('main_trans_table', function (Blueprint $table){
            $table->id();
            // $table->text('sr_no')->nullable();
            $table->string('date')->nullable();
            $table->string('academic_year')->nullable();
            $table->string('session')->nullable();
            $table->string('alloted_category')->nullable();
            $table->string('voucher_type')->nullable();
            $table->string('voucher_no')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('adm_no')->nullable();
            $table->string('status')->nullable();
            $table->string('fee_category')->nullable();
            $table->string('faculty')->nullable();
            $table->string('program')->nullable();
            $table->string('department')->nullable();
            $table->string('batch')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('fee_head')->nullable();
            $table->integer('due_amt')->nullable();
            $table->integer('paid_amt')->nullable();
            $table->integer('concession_amt')->nullable();
            $table->integer('scholarship_amt')->nullable();
            $table->integer('reverse_concession_amt')->nullable();
            $table->integer('write_off_amt')->nullable();
            $table->integer('adjusted_amt')->nullable();
            $table->integer('refund_amt')->nullable();
            $table->integer('fund_transfer_amt')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('main_trans_table');
      
    }
};
