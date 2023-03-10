<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('selecteds', function (Blueprint $table) {
        $table->increments('id');
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
        Schema::dropIfExists('selecteds');
    }
}
