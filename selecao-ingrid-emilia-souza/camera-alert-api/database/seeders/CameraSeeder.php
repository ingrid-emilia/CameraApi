<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CameraSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cameras')->insert([
            ['name' => 'Camera 1', 'state' => 'habilitada'],
            ['name' => 'Camera 2', 'state' => 'habilitada'],
            ['name' => 'Camera 3', 'state' => 'desabilitada'],
        ]);
    }
}
