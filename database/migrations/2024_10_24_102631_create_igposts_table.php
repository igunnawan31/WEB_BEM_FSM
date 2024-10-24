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
        Schema::create('igposts', function (Blueprint $table) {
            $table->id();
            $table->string('post');
            $table->string('deskripsi_foto');
            $table->foreignId('bidang_id')->constrained(
                table:'bidangs',
                indexName: 'igposts_bidang_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igposts');
    }
};
