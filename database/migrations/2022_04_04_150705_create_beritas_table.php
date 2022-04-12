<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('kategori_beritas')->onUpdate('cascade')
                ->onDelete('cascade');;
            $table->string('slug')->unique();
            $table->string('judul');
            $table->text('excerpt');
            $table->text('isi');
            $table->string('penulis');
            $table->string('gambar');
            $table->enum('status', ['live', 'draft']);
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
        Schema::dropIfExists('beritas');
    }
}
