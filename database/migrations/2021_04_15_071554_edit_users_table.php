<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (Blueprint $table){

            $table->string('nom')->after('email');
            $table->string('prenom')->after('nom');
            $table->boolean('salarie')->after('prenom');
            $table->integer('salaire')->after('salarie');
            $table->string('poste')->after('salaire');
            $table->string('cni')->after('poste');
            $table->dateTime('date_embauche')->default('2021-04-05 00:00:00')->after('cni');
            $table->integer('duree_contrat')->after('date_embauche');
            $table->dateTime('date_naissance')->default('2021-04-05 00:00:00')->after('duree_contrat');
            $table->integer('telephone')->after('date_naissance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table){

            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->dropColumn('salarie');
            $table->dropColumn('salaire');
            $table->dropColumn('poste');
            $table->dropColumn('cni');
            $table->dropColumn('date_embauche');
            $table->dropColumn('duree_contrat');
            $table->dropColumn('date_naissance');
            $table->dropColumn('telephone');
        });
    }
}
