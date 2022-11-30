<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricule_pat')->default(1);
            $table->integer('travailleur_exposes_risque')->default(1);
            $table->integer('travailleur_affectes_postes_securite')->default(1);
            $table->integer('travailleur_charges_la_restauration')->default(1);
            $table->integer('handicapes_chroniques')->default(1);
            $table->integer('femmes_enceintes_mere')->default(1);
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            
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
        Schema::dropIfExists('categories');
    }
}
