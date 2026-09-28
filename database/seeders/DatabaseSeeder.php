<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Sanju & Manju',
            'email' => 'admin@sanjumanju.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            CategorySeeder::class,
            IngredientSeeder::class,
            ProductSeeder::class,
            ProcessStepSeeder::class,
            PairingSeeder::class,
            GiftingOptionSeeder::class,
            TestimonialSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
