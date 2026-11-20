<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['customer_code' => 'C-1001', 'name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 123 4501', 'tier' => 'Gold', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['customer_code' => 'C-1002', 'name' => 'Marco Santos', 'email' => 'marco.santos@example.com', 'phone' => '0918 234 5602', 'tier' => 'Silver', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['customer_code' => 'C-1003', 'name' => 'Bea Navarro', 'email' => 'bea.navarro@example.com', 'phone' => '0919 345 6703', 'tier' => 'Gold', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['customer_code' => 'C-1004', 'name' => 'Carlo Mendoza', 'email' => 'carlo.mendoza@example.com', 'phone' => '0920 456 7804', 'tier' => 'Bronze', 'is_active' => false, 'created_at' => now(), 'updated_at' => now()],
            ['customer_code' => 'C-1005', 'name' => 'Denise Lim', 'email' => 'denise.lim@example.com', 'phone' => '0921 567 8905', 'tier' => 'Silver', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
