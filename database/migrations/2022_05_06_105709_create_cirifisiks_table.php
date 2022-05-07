<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirifisiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirifisiks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_diagnosa')->nullable();
            $table->string('warna');
            $table->string('bentuk');
            $table->string('kerusakan');
            $table->string('umur');
            $table->enum('status', ['belum', 'sudah'])->default('belum');
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
        Schema::dropIfExists('cirifisiks');
    }
}
