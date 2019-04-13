<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Individu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('individu', function (Blueprint $table) {
          $table->bigIncrements('id_individu');
          $table->string('nom');
          $table->string('prenom');
          $table->date('date_naiss');
          $table->string('cat_socio_pro');
          $table->string('rue');
          $table->integer('code_postal');
          $table->string('ville');
          $table->string('departement');
          $table->string('num_phone');
          $table->string('email')->unique();
          $table->string('carac_socio_com');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individu');
    }
}
