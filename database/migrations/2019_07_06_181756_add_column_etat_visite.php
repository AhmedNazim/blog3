<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEtatVisite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selectedvalides', function (Blueprint $table) {
            //
            $table->string('etat_visite')->after('etat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selectedvalides', function (Blueprint $table) {
            //
            $table->dropColumn('etat_visite');
        });
    }
}
