<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueManipulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('historiquems', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('matricule_pat');
        $table->string('nom_pat')->nullable();
        $table->string('prenom_pat')->nullable();
        $table->string('etat_rendez')->nullable();
        $table->date('date_rendez')->nullable();
        $table->dateTime('updated_at')->nullable();
        $table->dateTime('created_at')->nullable();
        $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('historiquems');
    }
}
