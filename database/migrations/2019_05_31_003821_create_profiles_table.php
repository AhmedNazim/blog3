<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profiles', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('int_cor_med')->default(1);
        $table->integer('modif_cor_med')->default(1);
        $table->integer('affic_donn_med')->default(1);
        $table->integer('int_donn_pat')->default(1);
        $table->integer('modif_donn_pat')->default(1);
        $table->integer('afficher_donn_pat')->default(1);
        $table->integer('gerer_rendez')->default(1);
        $table->integer('cons_his_man')->default(1);
        $table->integer('cons_his_rendez')->default(1);
        $table->integer('rechercher')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
