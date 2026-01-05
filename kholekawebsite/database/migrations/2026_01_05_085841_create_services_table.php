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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Knotless Braids"
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); // e.g., 120.00
            $table->string('price_note')->nullable(); // e.g., "Starting from"
            $table->string('duration'); // e.g., "3-4 hours"
            $table->string('category')->default('braids'); // Allows filtering later
            $table->boolean('is_popular')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
