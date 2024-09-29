<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => ' Web Design',
            'slug' => 'Web-design',
            'color' => 'red',
        ]);

        Category::create([
            'name' => ' UI UX',
            'slug' => 'UI-UX',
            'color' => 'green',
        ]);

        Category::create([
            'name' => ' Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => ' Data Structure',
            'slug' => 'data-sructure',
            'color' => 'yellow',
        ]);

    }
}
