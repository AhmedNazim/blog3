<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEtat extends Migration
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
            $table->string('etat')->nullable()->after('type_visite');
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
            $table->dropColumn('etat');
        });
    }
}
