<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    public function run(): void
    {
        $ingredients = [
            [
                'name' => 'Raw Mango',
                'slug' => 'raw-mango',
                'description' => 'Firm, unripe mangoes sourced at the peak of the season',
                'image_path' => null,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Lemon',
                'slug' => 'lemon',
                'description' => 'Sun-ripened lemons for bright, citrusy depth',
                'image_path' => null,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Green Chilli',
                'slug' => 'green-chilli',
                'description' => 'Fresh green chillies for vibrant heat and colour',
                'image_path' => null,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'name' => 'Mustard Seeds',
                'slug' => 'mustard-seeds',
                'description' => 'Whole black and yellow mustard for signature tempering',
                'image_path' => null,
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'name' => 'Aromatic Spices',
                'slug' => 'aromatic-spices',
                'description' => 'Fenugreek, fennel, nigella and ground spice blends',
                'image_path' => null,
                'sort_order' => 5,
                'status' => true,
            ],
            [
                'name' => 'Cold-Pressed Mustard Oil',
                'slug' => 'mustard-oil',
                'description' => 'Pure cold-pressed mustard oil, the traditional preservative',
                'image_path' => null,
                'sort_order' => 6,
                'status' => true,
            ],
            [
                'name' => 'Rock Salt & Sea Salt',
                'slug' => 'salt',
                'description' => 'Mineral-rich salts that cure and elevate each batch',
                'image_path' => null,
                'sort_order' => 7,
                'status' => true,
            ],
            [
                'name' => 'Garlic',
                'slug' => 'garlic',
                'description' => 'Fresh hand-peeled garlic cloves for bold, rounded flavour',
                'image_path' => null,
                'sort_order' => 8,
                'status' => true,
            ],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::updateOrCreate(['slug' => $ingredient['slug']], $ingredient);
        }
    }
}
