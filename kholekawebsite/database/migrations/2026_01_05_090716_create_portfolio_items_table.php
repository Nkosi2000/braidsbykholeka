<?php

// database/migrations/xxxx_xx_xx_create_portfolio_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('category'); // knotless, box, protective, bespoke
            $table->string('style_type')->nullable(); // e.g., "Medium Knotless"
            $table->string('hair_type')->nullable(); // e.g., "Synthetic", "Human Hair"
            $table->string('duration')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('main_image');
            $table->json('gallery_images')->nullable();
            $table->json('tags')->nullable();
            $table->text('client_feedback')->nullable();
            $table->string('client_initials')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolio_items');
    }
};
