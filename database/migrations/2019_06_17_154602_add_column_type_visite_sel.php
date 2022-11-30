<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTypeVisiteSel extends Migration
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
            $table->string('type_visite')->nullable()->after('date_der_visite_sel');
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
            $table->dropColumn('type_visite');
        });
    }
}
