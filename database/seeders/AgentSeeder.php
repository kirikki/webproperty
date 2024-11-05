<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;

use Illuminate\Support\Facades\DB;


class AgentSeeder extends Seeder
{
    public function run()
    {
        DB::table('agents')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'no_wa' => '081234567890',
                'password' => bcrypt('password123'), // You should encrypt the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'no_wa' => '082234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michaelj@example.com',
                'no_wa' => '083234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lisa Wong',
                'email' => 'lisawong@example.com',
                'no_wa' => '084234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Brown',
                'email' => 'davidbrown@example.com',
                'no_wa' => '085234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emilyd@example.com',
                'no_wa' => '086234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mark Lee',
                'email' => 'marklee@example.com',
                'no_wa' => '087234567890',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
