<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumneToEtudiants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->bigInteger('classe_id')->unsigned()->after('id');
            $table->foreign('classe_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropForeign(['classe_id']);
            $table->dropColumn('classe_id');
        });
    }
}
