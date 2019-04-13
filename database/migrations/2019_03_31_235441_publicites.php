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
      $date_limite = date('Y-m-').rand(date('d')+3, 30)." ".rand(date('H'),23).":".rand(date('i'),59).":".rand(date('s'),59);
      //$unMois = date('d/m/Y', strtotime("+30 days"));
       Schema::create('publicites', function (Blueprint $table) {
          $table->bigIncrements('idPublicite');
          $table->string('titre');
          $table->string('description');
          $table->string('methode_envoie');
          $table->timestamp('date_creation')->useCurrent();
          $table->timestamp('date_limite')->default(date('Y-m-').rand(date('d')+3, 30)." ".rand(date('H'),23).":".rand(date('i'),59).":".rand(date('s'),59));
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
