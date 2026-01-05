<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolio_items')->insert([
            [
                'title' => 'Knotless Braids',
                'description' => 'Beautiful, seamless knotless braids for a natural look.',
                'image_path' => 'portfolio/KnotlessBraids.jpg',
                'category' => 'knotless',
                'is_featured' => true,
                'sort_order' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Box Braids with Beads',
                'description' => 'Classic box braids with decorative beads.',
                'image_path' => 'portfolio/BoxBraidswithBeads.jpg',
                'category' => 'box-braids',
                'is_featured' => true,
                'sort_order' => 2,
                'created_at' => now(),
            ],
            [
                'title' => 'Creative Cornrows',
                'description' => 'Intricate cornrow patterns with creative designs.',
                'image_path' => 'portfolio/CornrowsBraids.jpg',
                'category' => 'cornrows',
                'is_featured' => true,
                'sort_order' => 3,
                'created_at' => now(),
            ],
            [
                'title' => 'Goddess Braids',
                'description' => 'Elegant goddess braids for a regal look.',
                'image_path' => 'portfolio/GoddessBraids.jpg',
                'category' => 'goddess',
                'is_featured' => false,
                'sort_order' => 4,
                'created_at' => now(),
            ],
            [
                'title' => 'Lemonade Braids',
                'description' => 'Side-swept lemonade braids inspired by Beyoncé.',
                'image_path' => 'portfolio/LemonadeBraid.jpg',
                'category' => 'lemonade',
                'is_featured' => false,
                'sort_order' => 5,
                'created_at' => now(),
            ],
            [
                'title' => 'Butterfly Braids',
                'description' => 'Delicate butterfly braids with unique styling.',
                'image_path' => 'portfolio/ButterflyBraids.jpg',
                'category' => 'creative',
                'is_featured' => false,
                'sort_order' => 6,
                'created_at' => now(),
            ],
        ]);
    }
}
