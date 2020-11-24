<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCalonhimaToVotingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voting', function (Blueprint $table) {
            $table->integer('farmasi3')->after('farmasi2')->default(0);
            $table->integer('ilkom3')->after('ilkom2')->default(0);
            $table->integer('matik3')->after('matik2')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voting', function (Blueprint $table) {
            $table->dropColumn(['farmasi3', 'ilkom3', 'matik3']);
        });
    }
}
