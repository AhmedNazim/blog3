<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDateDerVisiteSel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selecteds', function (Blueprint $table) {
            //
            $table->dateTime('date_der_visite_sel')->nullable()->after('prenom_sel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selecteds', function (Blueprint $table) {
            //
            $table->dropColumn('date_der_visite_sel');
        });
    }
}
