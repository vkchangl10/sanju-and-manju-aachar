<?php

namespace Database\Seeders;

use App\Models\ProcessStep;
use Illuminate\Database\Seeder;

class ProcessStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'title' => 'Select',
                'slug' => 'select',
                'step_number' => '01',
                'description' => 'Every ingredient is hand-selected at the source. We work closely with small farms to choose only the firmest mangoes, the most fragrant lemons and the freshest chillies.',
                'details' => 'Only produce at the exact stage of ripeness makes it into our kitchen—nothing under, nothing over. It is the first and most important decision we make.',
                'image_path' => null,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'title' => 'Prepare',
                'slug' => 'prepare',
                'step_number' => '02',
                'description' => 'Washed, dried and cut by hand. No machinery, no shortcuts. Each piece is sized so it marinates evenly and retains its texture through months of sun-maturing.',
                'details' => 'Every batch is laid out on cotton cloths under natural sunlight to dry slowly—the traditional way to ensure a pickle that lasts and lasts.',
                'image_path' => null,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'title' => 'Blend',
                'slug' => 'blend',
                'step_number' => '03',
                'description' => 'Spices are dry-roasted in small batches and ground just before use. Then comes the mustard oil, the salts and the measured hand-mix that binds flavour and memory together.',
                'details' => 'The masala ratios are the same ones used in our family kitchen. No preservatives beyond what nature provides—oil, salt, time.',
                'image_path' => null,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'title' => 'Mature',
                'slug' => 'mature',
                'step_number' => '04',
                'description' => 'Glass jars sit in sunlight, shaken gently on schedule, quietly transforming. A few weeks of patience turns raw produce into the layered flavour you recognise as achar.',
                'details' => 'We do not rush this step. A pickle cannot be hurried. Every jar reaches its full character before it leaves us.',
                'image_path' => null,
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'title' => 'Pack',
                'slug' => 'pack',
                'step_number' => '05',
                'description' => 'Sealed, labelled and inspected by hand. Each jar carries its batch number so we know exactly when it was made, and by whom.',
                'details' => 'Packaging is chosen to protect the pickle, not distract from it. Simple glass jars that let the colour and texture speak.',
                'image_path' => null,
                'sort_order' => 5,
                'status' => true,
            ],
        ];

        foreach ($steps as $step) {
            ProcessStep::updateOrCreate(['slug' => $step['slug']], $step);
        }
    }
}
