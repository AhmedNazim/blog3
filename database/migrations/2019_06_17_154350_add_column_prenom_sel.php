<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPrenomSel extends Migration
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
            $table->string('prenom_sel')->nullable()->after('nom_sel');
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
            $table->dropColumn('prenom_sel');
        });
    }
}
