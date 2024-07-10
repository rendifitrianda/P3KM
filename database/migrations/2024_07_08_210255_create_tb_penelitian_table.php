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
        Schema::create('tb_penelitian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dosen');
            $table->string('ketua');
            $table->string('bidang');
            $table->string('tahun');
            $table->string('peran');
            $table->string('berkas');
            $table->string('penilaian');
            $table->string('status_penelitian');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penelitian');
    }
};
