<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('residents')->insert([
            ['name' => 'John Doe', 'age' => 30, 'gender' => 'Male', 'medical_history' => 'None'],
            ['name' => 'Jane Smith', 'age' => 25, 'gender' => 'Female', 'medical_history' => 'Allergic to peanuts'],
            // Add more residents as needed
        ]);
    }
}
