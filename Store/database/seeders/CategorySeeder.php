<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str ;
use App\Models\Category ;



class CategorySeeder extends Seeder
{

    public function run(): void
    {
        // Category::truncate();

        // \App\Models\Category::factory(20)->create();
    }
}
