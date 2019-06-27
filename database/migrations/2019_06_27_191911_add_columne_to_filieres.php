<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumneToFilieres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->bigInteger('classes_id')->unsigned()->after('id');
            $table->foreign('classes_id')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->dropForeign(['classes_id']);
            $table->dropColumn('classes_id');
        });
    }
}
