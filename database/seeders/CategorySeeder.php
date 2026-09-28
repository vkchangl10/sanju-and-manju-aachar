<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Classic Pickles',
                'slug' => 'classic-pickles',
                'description' => 'Traditional recipes passed down through generations',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Signature Blends',
                'slug' => 'signature-blends',
                'description' => 'Our curated house specialities',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Limited Editions',
                'slug' => 'limited-editions',
                'description' => 'Seasonal and small-batch releases',
                'sort_order' => 3,
                'status' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
