<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image_logo')->nullable();
            $table->string('image_header')->nullable();
            $table->string('judul');
            $table->text('diskripsi');

            // Anggota 1
            $table->string('image_1')->nullable();
            $table->string('name_1');
            $table->string('jurusan_1');
            $table->string('anggota_1');
            $table->string('email_1');
            $table->string('no_hp_1');
            $table->string('tmpt_tgl_1');
            $table->string('umur_1');
            $table->text('bio_1');

            // Anggota 2
            $table->string('image_2')->nullable();
            $table->string('name_2');
            $table->string('jurusan_2');
            $table->string('anggota_2');
            $table->string('email_2');
            $table->string('no_hp_2');
            $table->string('tmpt_tgl_2');
            $table->string('umur_2');
            $table->text('bio_2');

            // Anggota 3
            $table->string('image_3')->nullable();
            $table->string('name_3');
            $table->string('jurusan_3');
            $table->string('anggota_3');
            $table->string('email_3');
            $table->string('no_hp_3');
            $table->string('tmpt_tgl_3');
            $table->string('umur_3');
            $table->text('bio_3');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};