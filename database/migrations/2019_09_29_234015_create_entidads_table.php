<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad', function (Blueprint $table) {
            $table->increments('ent_id');
            $table->string('ent_ruc');
            $table->string('ent_rz');
            $table->string('ent_dir');
            $table->string('ent_ciu');
            $table->string('ent_prov');
            $table->string('ent_tel');
            $table->string('ent_cont');
            $table->string('ent_ctel');
            $table->string('ent_dpto');
            $table->string('ent_correo');
            $table->integer('tent_id')->unsigned();
            $table->foreign('tent_id')->references('tent_id')->on('tipo_entidad');
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
        Schema::dropIfExists('entidad');
    }
}
