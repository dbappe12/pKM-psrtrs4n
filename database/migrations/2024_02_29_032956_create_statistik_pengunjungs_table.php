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
        Schema::create('statistik_pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->string('dilihat')->nullable();
            $table->string('hari_ini')->nullable();
            $table->string('bulan_ini')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_pengunjungs');
    }
};
