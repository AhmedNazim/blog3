<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricule_p');
            $table->string('nom_pat');
            $table->string('prenom_pat');
            $table->date('date_naiss_pat');
            $table->string('lieu_naiss_pat');
            $table->string('sexe_pat');
            $table->date('date_recru_pat');
            $table->string('email_emp_pat');
            $table->string('poste_trav_pat');
            $table->integer('n_poste_pat');
            $table->string('groupage_pat');
            $table->string('situation_fam_pat');    
            $table->integer('n_securite_so_pat');
            $table->string('adresse_pat');
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
        Schema::dropIfExists('patients');
    }
}
