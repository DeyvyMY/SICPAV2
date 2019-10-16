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
            $table->string('status');
            $table->decimal('subtotal', 12, 2);
            $table->decimal('igv', 12, 2);
            $table->decimal('total', 12, 2);
            $table->decimal('discount', 12, 2);
            $table->decimal('balance', 12, 2);
            $table->string('condition');
            $table->decimal('type_change', 12, 2);
            $table->string('currency');
            $table->string('guide');
            $table->date('due_date');
            $table->date('payment_date');
            $table->string('bank');
            $table->string('operation_number');
            $table->string('document_file');
            $table->string('order_note');
            $table->string('order_purchase');
            $table->string('description');
            $table->string('observation');
            $table->integer('correlative_number');

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
