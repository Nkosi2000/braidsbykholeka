<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;

class PortfolioItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'title' => 'Medium Knotless Braids',
                'slug' => 'medium-knotless-braids',
                'description' => 'Natural-looking medium knotless braids with soft curls at the ends',
                'category' => 'knotless',
                'style_type' => 'Medium Size',
                'hair_type' => 'Premium Synthetic',
                'duration' => '6 hours',
                'is_featured' => true,
                'sort_order' => 1,
                'main_image' => 'images/watermarks/salon/portfolio/knotless1.jpg',
                'gallery_images' => json_encode([
                    'images/watermarks/salon/portfolio/knotless1.jpg',
                    'images/watermarks/salon/portfolio/knotless2.jpg',
                ]),
                'tags' => json_encode(['knotless', 'medium', 'natural', 'curls']),
                'client_feedback' => 'These are the most comfortable braids I\'ve ever had! No tension headaches and they look so natural.',
                'client_initials' => 'A.M.'
            ],
            [
                'title' => 'Jumbo Box Braids',
                'slug' => 'jumbo-box-braids',
                'description' => 'Bold jumbo box braids with natural black hair',
                'category' => 'box',
                'style_type' => 'Jumbo Size',
                'hair_type' => 'Kanekalon',
                'duration' => '5 hours',
                'is_featured' => true,
                'sort_order' => 2,
                'main_image' => 'images/watermarks/salon/portfolio/box1.jpg',
                'gallery_images' => json_encode([
                    'images/watermarks/salon/portfolio/box1.jpg',
                ]),
                'tags' => json_encode(['box', 'jumbo', 'bold', 'black']),
                'client_feedback' => 'I love how lightweight these jumbo braids feel! Perfect for making a statement.',
                'client_initials' => 'J.L.'
            ],
            [
                'title' => 'Fulani Braids',
                'slug' => 'fulani-braids',
                'description' => 'Traditional Fulani braids with beads and cowrie shells',
                'category' => 'protective',
                'style_type' => 'Fulani Style',
                'hair_type' => 'Human Hair Blend',
                'duration' => '7 hours',
                'is_featured' => true,
                'sort_order' => 3,
                'main_image' => 'images/watermarks/salon/portfolio/protective1.jpg',
                'gallery_images' => json_encode([
                    'images/watermarks/salon/portfolio/protective1.jpg',
                ]),
                'tags' => json_encode(['fulani', 'traditional', 'beads', 'cowrie']),
                'client_feedback' => 'Absolutely stunning! The attention to detail with the beads is incredible.',
                'client_initials' => 'C.R.'
            ],
        ];

        foreach ($items as $item) {
            PortfolioItem::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}