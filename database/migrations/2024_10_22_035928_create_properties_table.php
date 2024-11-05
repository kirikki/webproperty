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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents');
            $table->string('judul');
            $table->decimal('harga', 15, 2);
            $table->string('daerah');
            $table->string('wilayah');
            $table->string('provinsi');
            $table->string('satuan_luas');
            $table->integer('lt'); // Luas Tanah
            $table->integer('lb'); // Luas Bangunan
            $table->integer('kt'); // Kamar Tidur
            $table->integer('km'); // Kamar Mandi
            $table->integer('kt_p'); // Kamar Pembantu
            $table->integer('km_p'); // Kamar Mandi Pembantu
            $table->string('hadap');
            $table->integer('lantai');
            $table->integer('listrik');
            $table->string('status_p'); // Status Property
            $table->string('jenis_p'); // Jenis Property
            $table->string('tipe_p'); // Tipe Property
            $table->text('deskripsi');
            $table->string('image');
            
            // Foreign key relationship to agents table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
