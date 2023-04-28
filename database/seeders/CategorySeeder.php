<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            'Web Development',
            'App Development',
            'UI-UX Design',
            'Graphic Design',
            'Digital Marketing'
        ];
        foreach ($categories as $category)
        {
            Category::create([
                'name'=>$category
            ]);
        }
       
    }
}
