<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_balita', function (Blueprint $table) {
            $table->id('balita_id');
            $table->unsignedBigInteger('keluarga_id');
            $table->string('nama_balita', 100);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->timestamps();
            
            // Foreign key ke tabel keluarga
            $table->foreign('keluarga_id')
                  ->references('keluarga_id')
                  ->on('tb_keluarga')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_balita');
    }
};