<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string ('nama');
            $table->date ('tanggal');
            $table->foreignId('id_darah')->constrained('darahs')->onDelete("cascade")->onUpdate("cascade");
            $table->string('penyakit');
            $table->string('nohp');
            $table->foreignId('id_jadwal')->constrained('jadwals')->onDelete("cascade")->onUpdate("cascade");
            $table->string('status');
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
        Schema::dropIfExists('formulirs');
    }
};
