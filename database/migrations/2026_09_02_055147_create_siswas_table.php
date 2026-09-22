<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void /** Method up() berisi instruksi untuk membuat atau mengubah struktur database.
    */
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nisn');
            $table->string('nama_siswa');
            $table->enum('jenis_kelamin',['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // Unique hanya untuk data yang belum dihapus
            $table->string('nis_active')
                ->nullable()
                ->storedAs('IF(deleted_at IS NULL, nis, NULL)');

            $table->string('nisn_active')
                ->nullable()
                ->storedAs('IF(deleted_at IS NULL, nisn, NULL)');

            $table->unique('nis_active');
            $table->unique('nisn_active');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
