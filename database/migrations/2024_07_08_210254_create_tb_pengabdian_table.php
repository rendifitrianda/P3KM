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
        Schema::create('tb_pengabdian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dosen');
            $table->string('skema');
            $table->string('judul');
            $table->string('tahun');
            $table->string('dana');
            $table->string('berkas');
            $table->string('program');
            $table->string('status_pengapdian');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengabdian');
    }
};
