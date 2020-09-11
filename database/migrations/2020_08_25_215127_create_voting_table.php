<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->integer('bem1')->default(0);
            $table->integer('bem2')->default(0);
            $table->integer('matik1')->default(0);
            $table->integer('matik2')->default(0);
            $table->integer('fisika1')->default(0);
            $table->integer('fisika2')->default(0);
            $table->integer('bio1')->default(0);
            $table->integer('bio2')->default(0);
            $table->integer('ilkom1')->default(0);
            $table->integer('ilkom2')->default(0);
            $table->integer('farmasi1')->default(0);
            $table->integer('farmasi2')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voting');
    }
}
