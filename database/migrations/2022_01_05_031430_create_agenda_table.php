<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('jenis',['Kuliah Reguler', 'Bimbingan Akademik', 'PKM-P', 'PKM-K', 'PKM-M', 'PKM-T', 'PKM-KC', 'Tugas Akhir', 'Magang', 'Proyek Penelitian']);
            $table->string('gambar');
            $table->date('tanggal');
            $table->text('deskripsi');
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
        Schema::dropIfExists('agenda');
    }
}
