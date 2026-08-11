<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Add missing columns
        if (!Schema::hasColumn('services', 'slug')) {
            Schema::table('services', function (Blueprint $table) {
                $table->string('slug')->unique()->after('name');
            });
        }
        
        // Rename price column to starting_price if it exists
        if (Schema::hasColumn('services', 'price') && !Schema::hasColumn('services', 'starting_price')) {
            Schema::table('services', function (Blueprint $table) {
                $table->renameColumn('price', 'starting_price');
            });
        }
        
        // Rename price_note to detailed_description if it exists
        if (Schema::hasColumn('services', 'price_note') && !Schema::hasColumn('services', 'detailed_description')) {
            Schema::table('services', function (Blueprint $table) {
                $table->renameColumn('price_note', 'detailed_description');
            });
        }
        
        // Rename is_popular to is_featured if it exists
        if (Schema::hasColumn('services', 'is_popular') && !Schema::hasColumn('services', 'is_featured')) {
            Schema::table('services', function (Blueprint $table) {
                $table->renameColumn('is_popular', 'is_featured');
            });
        }
        
        // Add other missing columns
        $columnsToAdd = [
            'icon_class' => 'string',
            'image_path' => 'text',
            'features' => 'json',
            'aftercare_tips' => 'json',
        ];
        
        foreach ($columnsToAdd as $columnName => $columnType) {
            if (!Schema::hasColumn('services', $columnName)) {
                Schema::table('services', function (Blueprint $table) use ($columnName, $columnType) {
                    if ($columnType === 'json') {
                        $table->json($columnName)->nullable();
                    } else {
                        $table->string($columnName)->nullable();
                    }
                });
            }
        }
    }
    
    public function down()
    {
        // We'll keep this empty or add reverse operations if needed
    }
};