<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Teacher;
use App\Models\Feedback;
use App\Models\ExcuseSlip;
use Illuminate\Database\Seeder;
use Database\Seeders\DeansSeeder;
use Database\Seeders\AppUsersSeeder;
use Database\Seeders\FeedbackSeeder;
use Database\Seeders\StudentsSeeder;
use Database\Seeders\CounselorsSeeder;
use Database\Seeders\ExcuseSlipsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AppUsersSeeder::class,
            CounselorsSeeder::class,
            DeansSeeder::class,
            ExcuseSlipsSeeder::class,
            FeedbackSeeder::class,
            StudentsSeeder::class,
            TeacherSeeder::class

        ]);
    }
}
