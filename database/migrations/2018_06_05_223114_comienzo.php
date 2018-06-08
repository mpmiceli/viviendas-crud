<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comienzo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tipo_viviendas')) {
            Schema::create('tipo_viviendas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre', 100);
            });
        }

        if (!Schema::hasTable('viviendas')) {
            Schema::create('viviendas', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('cant_ambientes');
                $table->integer('cant_banos');
                $table->boolean('patio')->default(false);
                $table->boolean('garage')->default(false);
                $table->boolean('existe')->default(true);

                // FK
                $table->unsignedInteger('tipo_id');
                $table->foreign('tipo_id')->references('id')->on('tipo_viviendas');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('viviendas')) {
            Schema::drop('viviendas');
        }
        if (Schema::hasTable('tipo_viviendas')) {
            Schema::drop('tipo_viviendas');
        }
    }
}
