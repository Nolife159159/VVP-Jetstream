<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vipispejimai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vipispejimai', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('kasispejo', 24);
            $table->string('priezastis', 31);
            $table->dateTime('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vipispejimai');
    }
}
