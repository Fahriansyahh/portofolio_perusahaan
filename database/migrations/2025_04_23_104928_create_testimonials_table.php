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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position')->nullable();   // Posisi atau jabatan
            $table->string('company');    // Nama perusahaan klien
            $table->text('message');                  // Isi testimoni
            $table->string('photo')->nullable();      // Foto klien

            $table->foreignId('service_id')           // Terkait dengan service
                ->nullable()
                ->constrained('services')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
