<?php

namespace Database\Seeders;

use App\Models\GiftingOption;
use Illuminate\Database\Seeder;

class GiftingOptionSeeder extends Seeder
{
    public function run(): void
    {
        $options = [
            [
                'name' => 'Festive Gifting',
                'slug' => 'festive-gifting',
                'tagline' => 'A jar of tradition for every celebration.',
                'description' => 'Diwali, Holi, Eid, Raksha Bandhan, Navratri. Every Indian festival tastes a little better with achar on the table. Our festive packs are curated to arrive beautifully presented and ready to share.',
                'includes' => json_encode([
                    'Selection of 3-6 signature pickles',
                    'Premium gift box with tissue wrap',
                    'Personalised handwritten note card',
                    'Optional add-ons: dry fruits, diyas, sweets',
                ]),
                'image_path' => null,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => 'Wedding Gifting',
                'slug' => 'wedding-gifting',
                'tagline' => 'A small, flavourful thank-you for your loved ones.',
                'description' => 'From intimate Roka ceremonies to large wedding favours, we help you welcome guests with a taste of home. Packaging and notes can be fully customised to your theme and story.',
                'includes' => json_encode([
                    'Customisable 1-3 jar sets per guest',
                    'Bespoke labels with names & date',
                    'Theme-matched packaging',
                    'Bulk pricing available',
                ]),
                'image_path' => null,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name' => 'Housewarming',
                'slug' => 'housewarming',
                'tagline' => 'Welcome them home with something delicious.',
                'description' => 'A new kitchen is not complete until a jar of achar has entered the cupboard. Housewarming gifts that are thoughtful, useful and immediately welcome.',
                'includes' => json_encode([
                    'Curated trio of family favourites',
                    'Recipe card with serving ideas',
                    'Gift-wrapped and ribboned',
                    'Available for same-city deliveries',
                ]),
                'image_path' => null,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'name' => 'Corporate Gifting',
                'slug' => 'corporate-gifting',
                'tagline' => 'Impress clients and teams with thoughtful flavour.',
                'description' => 'Diwali hampers, new-joinee welcome kits, client thank-you gestures. Branded, scalable, and more memorable than a mug.',
                'includes' => json_encode([
                    'Fully branded packaging available',
                    'MOQ-friendly tiers',
                    'Logo-printed labels and sleeves',
                    'Pan-India delivery coordination',
                ]),
                'image_path' => null,
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'name' => 'Family Occasions',
                'slug' => 'family-occasions',
                'tagline' => 'Anniversaries, birthdays, or simply because.',
                'description' => 'Sometimes a jar of the achar they love is exactly the right gift. No occasion is too small to send a taste of home.',
                'includes' => json_encode([
                    'Single large jar or tasting set',
                    'Handwritten note from you',
                    'Gift wrapping at no extra cost',
                    'Delivered anywhere in India',
                ]),
                'image_path' => null,
                'sort_order' => 5,
                'status' => true,
            ],
        ];

        foreach ($options as $option) {
            GiftingOption::updateOrCreate(['slug' => $option['slug']], $option);
        }
    }
}
