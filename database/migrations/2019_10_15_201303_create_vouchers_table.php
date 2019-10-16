<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('number');
            $table->date('date');
            $table->string('status')->default("active");
            $table->decimal('subtotal', 12, 2)->nullable();
            $table->decimal('igv', 12, 2)->nullable();
            $table->decimal('total', 12, 2)->nullable();
            $table->decimal('discount', 12, 2)->nullable();
            $table->decimal('balance', 12, 2)->nullable();
            $table->string('condition')->nullable();
            $table->decimal('type_change', 12, 2)->nullable();
            $table->string('currency');
            $table->string('guide')->nullable();
            $table->date('due_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('bank')->nullable();
            $table->string('operation_number')->nullable();
            $table->string('document_file')->nullable();
            $table->string('order_note')->nullable();
            $table->string('order_purchase')->nullable();
            $table->string('description')->nullable();
            $table->string('observation')->nullable();
            $table->integer('correlative_number')->nullable();

            $table->integer('voucher_type_id')->unsigned();
            $table->foreign('voucher_type_id')->references('id')->on('voucher_types');

            $table->integer('voucher_type_inc_id')->unsigned();
            $table->foreign('voucher_type_inc_id')->references('id')->on('voucher_type_inc');

            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors');

            $table->integer('entity_id')->unsigned();
            $table->foreign('entity_id')->references('ent_id')->on('entidad');

            $table->integer('voucher_reference')->unsigned();
            $table->foreign('voucher_reference')->references('id')->on('vouchers');

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
        Schema::dropIfExists('vouchers');
    }
}
