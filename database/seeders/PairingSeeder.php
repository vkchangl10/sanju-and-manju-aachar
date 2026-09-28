<?php

namespace Database\Seeders;

use App\Models\Pairing;
use Illuminate\Database\Seeder;

class PairingSeeder extends Seeder
{
    public function run(): void
    {
        $pairings = [
            [
                'name' => 'Paratha',
                'slug' => 'paratha',
                'description' => 'Flaky, golden layers of roti meet a spoonful of achar. The traditional pairing that needs no introduction.',
                'image_path' => null,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Dal',
                'slug' => 'dal',
                'description' => 'A warm bowl of dal, rice and a side of pickle is comfort food distilled to its essence.',
                'image_path' => null,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Khichdi',
                'slug' => 'khichdi',
                'description' => 'Gentle, nourishing khichdi is elevated with a single bite of bright, tangy achar.',
                'image_path' => null,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'name' => 'Curd Rice',
                'slug' => 'curd-rice',
                'description' => 'Cool, creamy curd rice finds its perfect counterpoint in our spiced lemon pickle.',
                'image_path' => null,
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'name' => 'Steamed Rice',
                'slug' => 'steamed-rice',
                'description' => 'Simple, fragrant white rice with ghee and pickle. The quietest, most satisfying meal.',
                'image_path' => null,
                'sort_order' => 5,
                'status' => true,
            ],
            [
                'name' => 'Thepla',
                'slug' => 'thepla',
                'description' => 'Soft, herb-infused theplas travel beautifully with a jar of SANJUMANJU in your bag.',
                'image_path' => null,
                'sort_order' => 6,
                'status' => true,
            ],
        ];

        foreach ($pairings as $pairing) {
            Pairing::updateOrCreate(['slug' => $pairing['slug']], $pairing);
        }
    }
}
