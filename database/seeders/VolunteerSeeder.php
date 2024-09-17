<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('volunteers')->insert([
            ['name' => 'Karen Martin', 'role' => 'Event Organizer'],
            ['name' => 'David Lee', 'role' => 'Fundraiser'],
            // Add more volunteers as needed
        ]);
    }
}
