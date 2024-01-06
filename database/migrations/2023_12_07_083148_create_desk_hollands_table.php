<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeskHollandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desk_hollands', function (Blueprint $table) {
            $table->id();
            $table->string('typeholland');
            $table->text('deskripsi');
            $table->text('karakter');
            $table->text('kelebihan');
            $table->text('kelemahan');
            $table->text('job_match');
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
        Schema::dropIfExists('desk_hollands');
    }
}
