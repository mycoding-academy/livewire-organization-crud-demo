<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\JobPosition;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FirstUserSeeder::class,
            OrganizationUnitSeeder::class,
            JobRoleSeeder::class,
            JobPositionSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}
