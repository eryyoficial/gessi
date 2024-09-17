<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('visits')->insert([
            ['resident_id' => 1, 'visitor_name' => 'Sarah Lee', 'visit_date' => '2024-09-15', 'visit_time' => '10:00:00'],
            ['resident_id' => 2, 'visitor_name' => 'Michael Green', 'visit_date' => '2024-09-16', 'visit_time' => '14:00:00'],
            // Add more visits as needed
        ]);
    }
}
