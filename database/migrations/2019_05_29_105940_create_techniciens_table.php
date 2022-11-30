<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('techniciens', function (Blueprint $table) {
            $table->integer('matricule')->unique();
            $table->string('nom_tech');
            $table->string('prenom_tech');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->string('email_tech');
            $table->string('sexe');
            $table->string('groupage');
            $table->string('adresse');
           
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
        Schema::dropIfExists('techniciens');
    }
}
