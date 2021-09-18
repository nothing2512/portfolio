<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            "username" => "admin",
            "password" => "admin",
            "name" => "Robet Atiq Maulana Rifqi",
            "job" => "DevOps Developer",
            "photo" => portfolio("img/custom/photo-no-bg.png"),
            "bio" => "Hello! I'm Alex, a full stuck developer, a Ruby enthusiast, and a guy slighty obsessed for code quality. Also I'm a co-founder of pykod.com. I’m currently available for freelance work. If you have a project that you want to get started or think you need my help with something, then get in touch.",
            "cv" => "http://www.grad.illinois.edu/sites/default/files/pdfs/cvsamples.pdf",
            "experience" => 4
        ]);
    }
}
