<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlertSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('alerts')->insert([
            ['camera_id' => 1, 'client' => 'Cliente A', 'timestamp' => '2023-07-19 12:00:00'],
            ['camera_id' => 2, 'client' => 'Cliente B', 'timestamp' => '2023-07-19 14:30:00'],
            ['camera_id' => 1, 'client' => 'Cliente C', 'timestamp' => '2023-07-19 16:45:00'],
        ]);
    }
}
