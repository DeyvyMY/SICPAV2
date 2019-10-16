<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("number");
            $table->date("date");
            $table->string("state")->default("active");
            $table->double("subTotal")->nullable();
            $table->double("igv")->nullable();
            $table->double("total");
            $table->double("discount")->nullable();
            $table->double("balance")->nullable();
            $table->double("exchangeRate")->nullable();
            $table->string("condition")->nullable();
            $table->string("guide")->nullable();

            $table->unsignedInteger('voucherType_id');
            $table->foreign('voucherType_id')->references('id')->on('voucher_types');

            $table->unsignedInteger('entity_id');
            $table->foreign('entity_id')->references('id')->on('entidad');


            $table->unsignedInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');

            $table->date("dueDate")->nullable();
            $table->date("paymentDate")->nullable();

            $table->string("bank")->nullable();

            $table->string("numOperation");
            $table->string("document")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
