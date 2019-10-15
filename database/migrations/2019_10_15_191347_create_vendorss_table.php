<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("dni",8);
            $table->string("name",100);
            $table->string("lastName",100);
            $table->string("city",100);
            $table->string("phone",50);
            $table->string("type")->nullable()->default("VENDEDOR");
            $table->string("observation")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
