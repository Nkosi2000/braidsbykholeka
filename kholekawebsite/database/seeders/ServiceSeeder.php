<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Knotless Braids',
                'slug' => 'knotless-braids',
                'description' => 'Seamless, weightless braids with no tension at the roots',
                'starting_price' => 250.00,
                'detailed_description' => 'Our signature knotless braiding technique creates braids that are virtually weightless at the roots. This method eliminates the tension and discomfort associated with traditional braiding while providing a seamless, natural look.',
                'duration' => '5-7 hours',
                'category' => 'braiding',
                'is_featured' => true,
                'sort_order' => 1,
                'icon_class' => 'bi-magic',
                'image_path' => 'images/watermarks/salon/portfolio/knotless1.jpg',
                'features' => json_encode([
                    'Zero tension at roots',
                    'Seamless installation',
                    'Longer-lasting style',
                    'Scalp-friendly technique'
                ]),
                'aftercare_tips' => json_encode([
                    'Wrap hair with silk scarf at night',
                    'Use lightweight braid spray',
                    'Cleanse scalp with diluted shampoo',
                    'Schedule maintenance at 4-6 weeks'
                ]),
            ],
            [
                'name' => 'Box Braids',
                'slug' => 'box-braids',
                'description' => 'Classic, versatile braids in various sizes',
                'starting_price' => 220.00,
                'detailed_description' => 'Traditional box braids customized to your desired size and length. Perfect for those wanting a classic protective style that can be dressed up or down.',
                'duration' => '4-6 hours',
                'category' => 'braiding',
                'is_featured' => true,
                'sort_order' => 2,
                'icon_class' => 'bi-stars',
                'image_path' => 'images/watermarks/salon/portfolio/box1.jpg',
                'features' => json_encode([
                    'Versatile styling options',
                    'Various sizes available',
                    'Long-lasting protection',
                    'Easy maintenance'
                ]),
                'aftercare_tips' => json_encode([
                    'Moisturize regularly',
                    'Avoid heavy products',
                    'Protect edges with silk',
                    'Sleep with satin pillowcase'
                ]),
            ],
            [
                'name' => 'Protective Styles',
                'slug' => 'protective-styles',
                'description' => 'Gentle styles designed to protect natural hair',
                'starting_price' => 180.00,
                'detailed_description' => 'Cornrows, twists, and updrafts designed to protect your natural hair while maintaining elegance. Perfect for hair growth journeys.',
                'duration' => '3-5 hours',
                'category' => 'styling',
                'is_featured' => true,
                'sort_order' => 3,
                'icon_class' => 'bi-heart',
                'image_path' => 'images/watermarks/salon/portfolio/protective1.jpg',
                'features' => json_encode([
                    'Minimal tension',
                    'Promotes hair growth',
                    'Versatile styling options',
                    'Low maintenance'
                ]),
                'aftercare_tips' => json_encode([
                    'Keep scalp clean',
                    'Moisturize daily',
                    'Avoid tight styling',
                    'Remove after 4 weeks'
                ]),
            ],
            [
                'name' => 'Bespoke Designs',
                'slug' => 'bespoke-designs',
                'description' => 'Custom braiding patterns and creative styles',
                'starting_price' => 300.00,
                'detailed_description' => 'Express your unique personality through wearable art. Custom braiding patterns, creative designs, and intricate styles tailored specifically to you.',
                'duration' => '6-8 hours',
                'category' => 'artistic',
                'is_featured' => true,
                'sort_order' => 4,
                'icon_class' => 'bi-palette',
                'image_path' => 'images/watermarks/salon/portfolio/bespoke1.jpg',
                'features' => json_encode([
                    'Completely custom design',
                    'One-of-a-kind style',
                    'Creative expression',
                    'Artistic craftsmanship'
                ]),
                'aftercare_tips' => json_encode([
                    'Follow custom care instructions',
                    'Schedule touch-ups as needed',
                    'Document for future reference',
                    'Specialized products recommended'
                ]),
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}