<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::query()->create([
            "facebook" => "https://facebook.com/robet.rifqis/",
            "instagram" => "https://www.instagram.com/robet.amr/",
            "linkedin" => "https://www.linkedin.com/in/robet-atiq/",
            "github" => "https://github.com/nothing2512/"
        ]);
    }
}
