<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('publicites', function (Blueprint $table) {
          $table->bigIncrements('idPublicite');
          $table->string('titre');
          $table->string('description');
          $table->string('methode_envoie');
          $table->timestamp('date_creation')->useCurrent();
          $table->timestamp('date_limite')->nullable();
          $table->string('etat')->default('En attente');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicites');
    }
}
