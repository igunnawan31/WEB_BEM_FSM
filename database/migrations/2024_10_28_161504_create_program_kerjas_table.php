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
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('namaproker');
            $table->foreignId('bidang_id')->constrained(
                table:'bidangs',
                indexName: 'program_kerjas_bidang_id'
            );
            // $table->string('bidang');
            $table->string('deskripsi');
            $table->string('path_foto_proker')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerjas');
    }
};
