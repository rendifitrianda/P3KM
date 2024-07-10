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
        Schema::create('tb_catatan_harian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dosen');
            $table->enum('jenis_catatan', [""]);
            $table->string('judul');
            $table->longText('keterangan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_catatan_harian');
    }
};
