<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char("description",100);
            $table->string("code");
            $table->string("Observation");
            $table->boolean("hasIgv");

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedInteger('unitMeasure_id');
            $table->foreign('unitMeasure_id')->references('id')->on('unit_measures');


            $table->unsignedInteger('typeEntity_id')->nullable()->default(2);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
