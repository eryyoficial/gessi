<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaregiversTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('caregivers')->insert([
            ['name' => 'Alice Johnson', 'role' => 'Nurse', 'contact_info' => '555-1234'],
            ['name' => 'Bob Brown', 'role' => 'Social Worker', 'contact_info' => '555-5678'],
            // Add more caregivers as needed
        ]);
    }
}

