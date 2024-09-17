<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('donations')->insert([
            ['donor_name' => 'Emily Davis', 'amount' => 100.00, 'donation_date' => '2024-09-15'],
            ['donor_name' => 'James Wilson', 'amount' => 50.00, 'donation_date' => '2024-09-16'],
            // Add more donations as needed
        ]);
    }
}
