<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Service;
use App\Models\Student;
use App\Models\Testimonial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory(10)->create();
        Category::factory(5)->create();
        Instructor::factory(10)->create();
        Course::factory(20)->create();
        Testimonial::factory(20)->create();
        Contact::factory(20)->create();
        User::factory(20)->create();
        Student::factory(20)->create();
        
    }
}
