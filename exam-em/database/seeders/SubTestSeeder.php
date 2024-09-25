<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubTest;

class SubTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubTest::insert([
            ['id' => 1, 'name' => 'ทดสอบตาบอดสี','test_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'ทดสอบสายตายาว','test_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'ทดสอบสายตาเอียง ','test_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'ทดสอบการตอบสนองของร่างกาย ','test_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'ป้ายจราจร ','test_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'เส้นจราจร ','test_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'การให้ทาง ','test_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'การทดสอบ','test_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
