<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigInteger('equipement_id')->unique();
            $table->foreign('equipement_id')->references('id')->on('equipements');
            $table->integer('cout');
            $table->string('description');
            $table->string('statut');
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
        Schema::dropIfExists('ventes');
    }
}
