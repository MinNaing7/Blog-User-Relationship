<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Blog;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoryArr = [
            ['name' => 'Frontend', 'slug' => 'frontend'],
            ['name' => 'Backend', 'slug' => 'backend'],
            ['name' => 'Fullstack', 'slug' => 'fullstack'],
            ['name' => 'Mobile', 'slug' => 'mobile'],
            ['name' => 'UI/UX', 'slug' => 'uiux'],
            ['name' => 'Graphic', 'slug' => 'graphic']
        ];

        $blogArr = [
            ['title'=>'Frontend Development', 'user_id' => 1, 'category_id' => 1],
            ['title'=>'Backend Development', 'user_id' => 1, 'category_id' => 2],
            ['title'=>'Fullstack Development', 'user_id' => 1, 'category_id' => 3],
            ['title'=>'Mobile Development', 'user_id' => 2, 'category_id' => 4],
            ['title'=>'User Experience', 'user_id' => 2, 'category_id' => 5],
            ['title'=>'Graphic Design', 'user_id' => 2, 'category_id' => 6],
            ['title'=>'Frontend Frameworks', 'user_id' => 3, 'category_id' => 1],
            ['title'=>'Backend Frameworks', 'user_id' => 3, 'category_id' => 2],
            ['title'=>'Fullstack Developer', 'user_id' => 3, 'category_id' => 3],
            ['title'=>'Android vs IOS', 'user_id' => 4, 'category_id' => 4],
            ['title'=>'UX Researching', 'user_id' => 4, 'category_id' => 5],
            ['title'=>'Branding Design', 'user_id' => 4, 'category_id' => 6]
        ];

        User::factory(4)->create();

        foreach($categoryArr as $category ) {
            Category::factory()->create($category);
        }

        foreach($blogArr as $blog) {
            Blog::factory()->create($blog);
        }
    }
}
