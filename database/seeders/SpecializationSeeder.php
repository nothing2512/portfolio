<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialization::query()->insert([
            [
                "title" => "Front-end",
                "description" => "As a javascript developer, I have experience in HTML5 and CSS3 techniques working with jQuery or more advanced javascript MVC frameworks such as angular",
                "icon" => portfolio("img/front-end.svg"),
                "iconType" => "svg",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Back-end",
                "description" => "Utilising php frameworks such as Zend or creating bespoke code, I've written services supporting thousands of users, including REST APIs, e-learning applications and more.",
                "icon" => portfolio("img/back-end.svg"),
                "iconType" => "svg",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Consultancy",
                "description" => "As well as providing development services, I can also help you decide strategic roadmaps via consultancy services.",
                "icon" => portfolio("img/consultancy.svg"),
                "iconType" => "svg",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
