<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdgovorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odgovor', function (Blueprint $table) {
            $table->id();
            $table->text('odgovor');
            $table->unsignedBigInteger('pitanje_id');
            $table->foreign('pitanje_id')->references('id')->on('pitanja');
            $table->unsignedBigInteger('korisnik_id');
            $table->foreign('korisnik_id')->references('id')->on('korisnici');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odgovor');
    }
}
