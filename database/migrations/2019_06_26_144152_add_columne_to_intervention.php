<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumneToIntervention extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interventions', function (Blueprint $table) {
            $table->bigInteger('intervenant_id')->unsigned();
            $table->foreign('intervenant_id')->references('id')->on('intervenants');
            $table->bigInteger('salle_id')->unsigned();
            $table->foreign('salle_id')->references('id')->on('salles');
            $table->bigInteger('filiere_id')->unsigned()->after('id');
            $table->foreign('filiere_id')->references('id')->on('filieres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interventions', function (Blueprint $table) {
            $table->dropForeign(['intervenant_id']);
            $table->dropColumn('intervenant_id');

            $table->dropForeign(['classe_id']);
            $table->dropColumn('classe_id');

            $table->dropForeign(['filiere_id']);
            $table->dropColumn('filiere_id');
        });
    }
}
