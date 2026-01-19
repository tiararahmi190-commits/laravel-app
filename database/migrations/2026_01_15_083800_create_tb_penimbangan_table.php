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
        Schema::create('tb_penimbangan', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('balita_id');
            $table->date('tanggal');
            $table->decimal('berat', 5, 2);
            $table->decimal('tinggi', 5, 2);
            $table->string('status_gizi', 50)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
            
            // Foreign key ke tabel balita
            $table->foreign('balita_id')
                  ->references('balita_id')
                  ->on('tb_balita')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penimbangan');
    }
};