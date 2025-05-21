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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('id_menu_induk');
            $table->string('type');
            $table->string('title');
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->string('active');
            $table->string('permission')->nullable();
            $table->string('id_permission')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
