<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create(['title' => 'فارس', 'slug' => 'fars']);

        Province::create(['title' => 'تهران', 'slug' => 'tehran']);

        Province::create(['title' => 'اصفهان', 'slug' => 'isfahan']);
    }
}
