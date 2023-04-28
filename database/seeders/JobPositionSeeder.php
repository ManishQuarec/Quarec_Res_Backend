<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobPosition;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions=[
            'Python',
            'Java',
            'PHP',
            'Full Stack developer',
            'MERN Stack'
        ];
        foreach ($positions as $position)
        {
            JobPosition::create([
                'name'=>$position
            ]);
        }
       
    }
}
