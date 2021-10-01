<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::query()->insert([
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-1.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-2.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-3.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-4.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-5.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Project Title",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo finibus tristique. Maecenas dignissim condimentum sem eu tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet turpis facilisis consectetur quis vel ante. Integer in massa ut nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor non hendrerit.",
                "image" => portfolio("img/Portfolio-6.jpg"),
                "link" => "#",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
