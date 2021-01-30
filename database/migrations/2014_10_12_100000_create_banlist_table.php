<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banlist', function (Blueprint $table) {
            $table->string('vardas', 24);
            $table->string('reason', 31);
            $table->integer('type');
            $table->string('kasUzblokavo', 34);
            $table->integer('likeslaikas');
            $table->dateTime('banData');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banlist');
    }
}
