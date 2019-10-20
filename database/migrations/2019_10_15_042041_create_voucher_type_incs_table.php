<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTypeIncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_type_inc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('code');
            $table->unsignedInteger('voucher_type_id');
            $table->foreign('voucher_type_id')->references('id')->on('voucher_types');
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
        Schema::drop('voucher_type_inc');
    }
}
