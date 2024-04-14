<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School_grades;

class School_gradesTableSeeder extends Seeder
{

    public function run() : void
    {
        School_grades::factory()->count(5)->create();
    }
}
