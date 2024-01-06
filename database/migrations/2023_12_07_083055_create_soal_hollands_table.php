<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalHollandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_hollands', function (Blueprint $table) {
            $table->id();
            $table->string('typesoal');
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('soal_3');
            $table->string('soal_4');
            $table->string('soal_5');
            $table->string('soal_6');
            $table->string('soal_7');
            $table->string('soal_8');
            $table->string('soal_9');
            $table->string('soal_10');
            $table->string('soal_11');
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
        Schema::dropIfExists('soal_hollands');
    }
}
