<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilakhirHollandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilakhir_hollands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userid');
            $table->string('nama');
            $table->string('namasekolah');
            $table->foreignId('sekolahid');
            $table->foreignId('afiliatorid');
            $table->string('nisn');
            $table->string('jeniskelamin');
            $table->date('tanggallahir');
            $table->integer('total_R');
            $table->integer('total_I');
            $table->integer('total_A');
            $table->integer('total_S');
            $table->integer('total_E');
            $table->integer('total_C');
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
        Schema::dropIfExists('hasilakhir_hollands');
    }
}
