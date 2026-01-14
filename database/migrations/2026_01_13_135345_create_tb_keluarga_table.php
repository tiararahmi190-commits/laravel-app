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
        Schema::create('tb_keluarga', function (Blueprint $table) {
            $table->bigIncrements('keluarga_id');
            $table->string('nama_kepala',100);
            $table->text('alamat');
            $table->string('no_hp',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_keluarga');
    }
};
