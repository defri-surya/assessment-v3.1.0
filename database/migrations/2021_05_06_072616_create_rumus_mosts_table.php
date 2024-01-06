<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumusMostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumus_mosts', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai');
            $table->string('D');
            $table->string('I');
            $table->string('S');
            $table->string('C');
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
        Schema::dropIfExists('rumus_mosts');
    }
}
