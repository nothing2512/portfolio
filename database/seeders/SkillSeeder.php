<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::query()->insert([
            [
                "name" => "html/css",
                "value" => 100,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "python",
                "value" => 75,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "javascript",
                "value" => 85,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ruby",
                "value" => 66,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "php",
                "value" => 97,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "java",
                "value" => 45,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
