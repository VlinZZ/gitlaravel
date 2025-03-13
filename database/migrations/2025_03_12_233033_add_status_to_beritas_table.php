<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'needs_improvement', 'rejected'])
                ->default('pending')
                ->after('gambar'); // Menambahkan setelah kolom 'gambar'

            $table->text('improve_notes')->nullable()->after('status'); // Catatan perbaikan
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn(['status', 'improve_notes']);
        });
    }
};

