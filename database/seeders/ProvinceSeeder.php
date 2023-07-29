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
        Province::createMany([
            ['title' => 'فارس', 'slug' => 'fars'],
            ['title' => 'تهران', 'slug' => 'tehran'],
            ['title' => 'اصفهان', 'slug' => 'isfahan'],
        ]);
    }
}
