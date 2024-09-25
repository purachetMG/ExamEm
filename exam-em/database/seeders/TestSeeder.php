<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::insert([
            ['id' => 1, 'name' => 'ร่างกาย', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'ทฤษฎี', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'ปฏิบัติ', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
