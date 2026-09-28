<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $classicCategory = Category::where('slug', 'classic-pickles')->first();
        $signatureCategory = Category::where('slug', 'signature-blends')->first();

        $products = [
            [
                'category_id' => $classicCategory?->id,
                'name' => 'Aam Ka Achar',
                'slug' => 'aam-ka-achar',
                'short_description' => 'The definitive North Indian mango pickle. Spiced, tangy, and made with raw Kesar mangoes at their peak.',
                'description' => 'Our Aam Ka Achar follows the same recipe used in our family for three generations. Raw Kesar-grade mangoes are cut into firm bite-sized pieces, sun-dried to the exact texture, then layered with mustard oil, whole black mustard, fenugreek and a measured balance of chilli and turmeric. It matures slowly in glass jars under sunlight until it reaches the deep, layered flavour you remember from dadi\'s kitchen. Best enjoyed with parathas, dal, or any meal that needs a bright, bold lift.',
                'taste_profile' => 'Tangy · Warm Spiced · Umami',
                'spice_level' => 2,
                'storage_information' => 'Store in a cool, dry place away from direct sunlight. Always use a clean, dry spoon. Once opened, best consumed within 6 months. Refrigeration is optional but recommended in warm climates.',
                'availability' => 'available',
                'featured' => true,
                'status' => true,
                'sort_order' => 1,
                'meta_title' => 'Aam Ka Achar — SANJUMANJU Traditional Mango Pickle',
                'meta_description' => 'Classic North Indian mango pickle made with raw Kesar mangoes, mustard oil and family-recipe spices. Slow-sun-matured for deep, layered flavour.',
                'sizes' => [
                    ['label' => '200g', 'weight_grams' => 200, 'sku' => 'SJ-MANGO-200', 'price' => null, 'sort_order' => 1],
                    ['label' => '500g', 'weight_grams' => 500, 'sku' => 'SJ-MANGO-500', 'price' => null, 'sort_order' => 2],
                    ['label' => '1kg', 'weight_grams' => 1000, 'sku' => 'SJ-MANGO-1KG', 'price' => null, 'sort_order' => 3],
                ],
                'ingredients_slugs' => ['raw-mango', 'mustard-seeds', 'mustard-oil', 'salt', 'aromatic-spices'],
            ],
            [
                'category_id' => $classicCategory?->id,
                'name' => 'Nimbu Ka Achar',
                'slug' => 'nimbu-ka-achar',
                'short_description' => 'Slow-cured lemons softened in salt, sun and our signature masala. Bright, sharp and unexpectedly mellow.',
                'description' => 'Sun-ripened lemons are scored, packed in mineral-rich salt and left to soften for weeks until their rind yields to a spoon. We then finish them with our house blend of roasted cumin, mustard, fennel and a gentle touch of chilli. The result is a lemon pickle that is sour without being harsh, with a depth that only patience can create. Perfect alongside dal, khichdi, curd rice or a simple thaali.',
                'taste_profile' => 'Bright Citrus · Savoury · Subtle Heat',
                'spice_level' => 1,
                'storage_information' => 'Store in a cool, dry place. Use a clean dry spoon. The lemons continue to soften and deepen in flavour over time. Refrigeration optional.',
                'availability' => 'available',
                'featured' => true,
                'status' => true,
                'sort_order' => 2,
                'meta_title' => 'Nimbu Ka Achar — SANJUMANJU Slow-Cured Lemon Pickle',
                'meta_description' => 'Lemons slow-cured in salt and sun, then blended with roasted cumin, fennel and mustard spices. Bright, savoury and beautifully mellow.',
                'sizes' => [
                    ['label' => '200g', 'weight_grams' => 200, 'sku' => 'SJ-LEMON-200', 'price' => null, 'sort_order' => 1],
                    ['label' => '500g', 'weight_grams' => 500, 'sku' => 'SJ-LEMON-500', 'price' => null, 'sort_order' => 2],
                    ['label' => '1kg', 'weight_grams' => 1000, 'sku' => 'SJ-LEMON-1KG', 'price' => null, 'sort_order' => 3],
                ],
                'ingredients_slugs' => ['lemon', 'salt', 'mustard-seeds', 'mustard-oil', 'aromatic-spices'],
            ],
            [
                'category_id' => $signatureCategory?->id,
                'name' => 'Mix Achar',
                'slug' => 'mix-achar',
                'short_description' => 'Mango, lemon, carrot, chillies and keri in one jar. A full thaali in a single spoonful.',
                'description' => 'Our signature Mix Achar is our answer to the question "which one should I try first?" We combine bite-sized pieces of raw mango, quartered lemons, slivered carrots, tender green chillies and seasonal keri in a single, balanced masala blend. No single ingredient dominates; they play together the way they do on an Indian dinner table. If you love variety in every bite, this is the jar for you.',
                'taste_profile' => 'Balanced · Multi-textured · All-in-one',
                'spice_level' => 2,
                'storage_information' => 'Cool dry place, clean dry spoon. Mix gently before serving as vegetables settle at different depths. Refrigerate after opening for longest shelf life.',
                'availability' => 'available',
                'featured' => true,
                'status' => true,
                'sort_order' => 3,
                'meta_title' => 'Mix Achar — SANJUMANJU Signature Mixed Pickle',
                'meta_description' => 'Mango, lemon, carrot, green chilli and keri in one beautifully balanced jar. The perfect introduction to SANJUMANJU.',
                'sizes' => [
                    ['label' => '200g', 'weight_grams' => 200, 'sku' => 'SJ-MIX-200', 'price' => null, 'sort_order' => 1],
                    ['label' => '500g', 'weight_grams' => 500, 'sku' => 'SJ-MIX-500', 'price' => null, 'sort_order' => 2],
                    ['label' => '1kg', 'weight_grams' => 1000, 'sku' => 'SJ-MIX-1KG', 'price' => null, 'sort_order' => 3],
                ],
                'ingredients_slugs' => ['raw-mango', 'lemon', 'green-chilli', 'mustard-seeds', 'mustard-oil', 'salt', 'aromatic-spices'],
            ],
            [
                'category_id' => $classicCategory?->id,
                'name' => 'Hari Mirch Achar',
                'slug' => 'hari-mirch-achar',
                'short_description' => 'Slit green chillies stuffed with roasted spice mix. Fiery, fragrant and utterly unforgettable.',
                'description' => 'Fresh, crisp green chillies are hand-slit and stuffed with a dry blend of roasted mustard, fennel, fenugreek and ajwain before being layered in mustard oil and a pinch of asafoetida. This is the pickle you reach for when dal is too mild, the paratha needs company, or a plain lunch deserves to be celebrated. The heat builds slowly and lingers, rounded out by the aromatic spice mix.',
                'taste_profile' => 'Fiery · Aromatic · Slow Heat',
                'spice_level' => 4,
                'storage_information' => 'Store cool, dry. Use a clean spoon. The chillies mellow slightly over time but retain their vibrant colour and character.',
                'availability' => 'available',
                'featured' => false,
                'status' => true,
                'sort_order' => 4,
                'meta_title' => 'Hari Mirch Achar — SANJUMANJU Stuffed Green Chilli Pickle',
                'meta_description' => 'Fresh green chillies hand-stuffed with roasted mustard, fenugreek, ajwain and fennel. Fiery, fragrant and layered with slow-building heat.',
                'sizes' => [
                    ['label' => '200g', 'weight_grams' => 200, 'sku' => 'SJ-GREEN-200', 'price' => null, 'sort_order' => 1],
                    ['label' => '500g', 'weight_grams' => 500, 'sku' => 'SJ-GREEN-500', 'price' => null, 'sort_order' => 2],
                ],
                'ingredients_slugs' => ['green-chilli', 'mustard-seeds', 'mustard-oil', 'salt', 'aromatic-spices'],
            ],
            [
                'category_id' => $signatureCategory?->id,
                'name' => 'Lahsun Achar',
                'slug' => 'lahsun-achar',
                'short_description' => 'Whole peeled garlic cloves slowly pickled in warm mustard oil and spice. Bold, rounded, impossible to stop at one.',
                'description' => 'Fresh Indian garlic is peeled pod by pod, lightly sun-dried, then submerged in warm mustard oil with a precise blend of mustard, chilli, fenugreek and just enough turmeric to colour it sunset-gold. Weeks of patience turn the sharp raw bite of garlic into something soft, mellow and deeply savoury. Eat it straight out of the jar (we do), or add a few cloves atop dal, rice or roti for an instant upgrade.',
                'taste_profile' => 'Garlic-forward · Mellow · Savoury',
                'spice_level' => 2,
                'storage_information' => 'Cool, dry, away from sun. Clean spoon always. Garlic continues to soften and sweeten in the oil over time.',
                'availability' => 'available',
                'featured' => false,
                'status' => true,
                'sort_order' => 5,
                'meta_title' => 'Lahsun Achar — SANJUMANJU Slow-Pickled Garlic',
                'meta_description' => 'Whole garlic cloves slow-pickled in warm mustard oil and house spices. Bold, mellow and savoury. Add a pop of flavour to any meal.',
                'sizes' => [
                    ['label' => '200g', 'weight_grams' => 200, 'sku' => 'SJ-GARLIC-200', 'price' => null, 'sort_order' => 1],
                    ['label' => '500g', 'weight_grams' => 500, 'sku' => 'SJ-GARLIC-500', 'price' => null, 'sort_order' => 2],
                ],
                'ingredients_slugs' => ['garlic', 'mustard-seeds', 'mustard-oil', 'salt', 'aromatic-spices'],
            ],
        ];

        foreach ($products as $productData) {
            $sizes = $productData['sizes'];
            $ingredientSlugs = $productData['ingredients_slugs'];
            unset($productData['sizes'], $productData['ingredients_slugs']);

            $product = Product::updateOrCreate(['slug' => $productData['slug']], $productData);

            $product->sizes()->delete();
            foreach ($sizes as $size) {
                $product->sizes()->create($size + ['status' => true]);
            }

            $ingredientIds = Ingredient::whereIn('slug', $ingredientSlugs)->pluck('id')->toArray();
            $pivotData = [];
            $sortOrder = 1;
            foreach ($ingredientIds as $id) {
                $pivotData[$id] = ['sort_order' => $sortOrder++];
            }
            $product->ingredients()->sync($pivotData);
        }
    }
}
