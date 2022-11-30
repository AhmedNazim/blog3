<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueManTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('historiquemnps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricule');
            $table->string('qui')->nullable();
            $table->string('quoi')->nullable();
            $table->string('aqui')->nullable();
            $table->dateTime('quand')->nullable();
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
        Schema::dropIfExists('historiquemnps');
    }
}
