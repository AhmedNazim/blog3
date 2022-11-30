<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricule');
            $table->string('nom_emp');
            $table->string('prenom_emp');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->string('sexe');
            $table->date('date_recru');
            $table->string('email_emp');
            $table->integer('n_poste');
            $table->string('poste_trav');
            $table->string('groupage');
            $table->string('situation_fam');    
            $table->integer('n_securite_so');
            $table->string('adresse');
            $table->boolean('maladie_chro');
            $table->string('categorie');






            
      
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
        Schema::dropIfExists('employes');
    }
}
