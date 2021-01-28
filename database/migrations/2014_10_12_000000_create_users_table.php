<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaidejai', function (Blueprint $table) {
            $table->id();
            $table->string('vardas', 24);
            $table->string('slaptazodis', 40);
            $table->string('email', 40)->unique();
            $table->integer('skin')->nullable();
            $table->integer('pinigai')->nullable();
            $table->integer('patirtis')->nullable();
            $table->integer('gender')->nullable();
            $table->dateTime('regdate')->nullable();
            $table->integer('vip')->nullable();
            $table->integer('admin')->nullable();
            $table->integer('mutelaikas')->nullable();
            $table->integer('VipLaikas')->nullable();
            $table->integer('AdminLaikas')->nullable();
            $table->integer('banned')->nullable();
            $table->integer('BanLaikas')->nullable();
            $table->integer('darbas')->nullable();
            $table->integer('uniform')->nullable();
            $table->integer('wUniform')->nullable();
            $table->integer('alga')->nullable();
            $table->integer('Prazaide')->nullable();
            $table->integer('direktorius')->nullable();
            $table->integer('pavaduotojas')->nullable();
            $table->integer('Gaudomumas')->nullable();
            $table->integer('Rangas')->nullable();
            $table->integer('bank_pin')->nullable();
            $table->integer('VisasDarboXP')->nullable();
            $table->integer('rep')->nullable();
            $table->string('SlaptasKlausimas',40)->nullable();
            $table->string('KlausimoAtsakymas',40)->nullable();
            $table->integer('visp')->nullable();
            $table->integer('aisp')->nullable();
            $table->integer('disp')->nullable();
            $table->integer('totalbans')->nullable();
            $table->string('adminmutename', 24)->nullable();
            $table->integer('priziuretojas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaidejai');
    }
}
