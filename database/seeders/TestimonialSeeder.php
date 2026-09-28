<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => '[DEVELOPMENT] Sample Review 1',
                'location' => '[PLACEHOLDER]',
                'avatar_path' => null,
                'content' => '[DEVELOPMENT PLACEHOLDER] Real customer testimonials will appear here once reviews are collected. This entry is only visible during development.',
                'rating' => 5,
                'product_id' => null,
                'approved' => true,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name' => '[DEVELOPMENT] Sample Review 2',
                'location' => '[PLACEHOLDER]',
                'avatar_path' => null,
                'content' => '[DEVELOPMENT PLACEHOLDER] Frontend should render a tasteful empty state or skeleton when no approved testimonials exist. Replace these entries in production.',
                'rating' => null,
                'product_id' => 1,
                'approved' => true,
                'sort_order' => 2,
                'status' => true,
            ],
        ];

        foreach ($testimonials as $index => $t) {
            Testimonial::updateOrCreate(
                ['name' => $t['name']],
                $t
            );
        }
    }
}
