<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Situation;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Course::factory()
            ->has(Student::factory()->count(5))
            ->create();

        Situation::factory()
            ->count(2)
            ->state(new Sequence(
                ['name' => 'present'],
                ['name' => 'absent'],
            ))
            ->create();
    }
}
