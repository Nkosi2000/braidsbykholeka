<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
        [
            'name' => 'Knotless Braids',
            'description' => 'Gentle on your scalp with a natural, seamless look. Perfect for long-term protective styling.',
            'price' => 120.00,
            'price_note' => 'Starting from',
            'duration' => '3-4 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 1,
            'created_at' => now(),
        ],
        [
            'name' => 'Goddess Braids',
            'description' => 'Elegant, thicker braids often styled with curls or accessories for a regal look.',
            'price' => 140.00,
            'price_note' => 'Starting from',
            'duration' => '4-6 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 2,
            'created_at' => now(),
        ],
        [
            'name' => 'Box Braids with Beads',
            'description' => 'Gentle on your scalp with a natural, seamless look. Perfect for long-term protective styling.',
            'price' => 120.00,
            'price_note' => 'Starting from',
            'duration' => '3 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 1,
            'created_at' => now(),
        ],
        [
            'name' => 'Butterfly Braids',
            'description' => 'Elegant, thicker braids often styled with curls or accessories for a regal look.',
            'price' => 140.00,
            'price_note' => 'Starting from',
            'duration' => '4-6 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 2,
            'created_at' => now(),
        ],
        [
            'name' => 'Cornrows Braids',
            'description' => 'Gentle on your scalp with a natural, seamless look. Perfect for long-term protective styling.',
            'price' => 120.00,
            'price_note' => 'Starting from',
            'duration' => '4 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 1,
            'created_at' => now(),
        ],
        [
            'name' => 'Lemonade Braids',
            'description' => 'Elegant, thicker braids often styled with curls or accessories for a regal look.',
            'price' => 140.00,
            'price_note' => 'Starting from',
            'duration' => '5 hours',
            'category' => 'braids',
            'is_popular' => true,
            'sort_order' => 2,
            'created_at' => now(),
        ],
    ]);
    }
}
