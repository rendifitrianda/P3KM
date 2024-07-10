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
        Schema::create('tb_dosen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nidn');
            $table->string('klaster');
            $table->string('institusi');
            $table->string('program_studi');
            $table->string('ktp');
            $table->string('jabatan');
            $table->longText('alamat');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('tlp');
            $table->string('website');
            $table->string('username');
            $table->string('password');
            $table->enum('status', [""]);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_dosen');
    }
};
