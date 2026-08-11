<?php

// database/migrations/xxxx_xx_xx_create_services_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('starting_price', 8, 2)->nullable();
            $table->text('detailed_description')->nullable();
            $table->string('duration')->nullable(); // e.g., "4-6 hours"
            $table->string('category')->default('braiding'); // braiding, styling, care
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('icon_class')->nullable(); // e.g., "bi-magic"
            $table->text('image_path')->nullable();
            $table->json('features')->nullable(); // JSON array of features
            $table->json('aftercare_tips')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
