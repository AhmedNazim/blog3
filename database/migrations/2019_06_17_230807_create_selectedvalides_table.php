<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectedvalidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('selectedvalides', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom_sel');
        $table->string('prenom_sel');
        $table->dateTime('date_der_visite_sel');
        $table->string('type_visite');
        $table->string('etat');
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
        Schema::dropIfExists('selectedvalides');
    }
}
