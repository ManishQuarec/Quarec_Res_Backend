<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=[
            'node js',
            'React js ',
            'java',
            'python',
            'php'
        ];
        foreach ($tags as $tag)
        {
            Tag::create([
                'name'=>$tag
            ]);
        }    
    }
}
