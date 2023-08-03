<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PresidentOfficeSeeder::class,
            AccountingDeptSeeder::class,
            HumanResourceDeptSeeder::class,
            InformationTechnologyDeptSeeder::class,
        ]);
    }
}