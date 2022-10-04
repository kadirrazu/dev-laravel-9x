<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $work = Category::create([
            'title' => 'Work',
            'slug' => 'work',
        ]);

        $hobbies = Category::create([
            'title' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        $personal = Category::create([
            'title' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => $work->id,
            'title' => "My Work Post",
            'slug' => "my-work-post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio, blanditiis corporis officia repellendus consectetur.",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam laborum unde, aperiam doloremque voluptate quidem, assumenda modi aut architecto facilis eaque quia blanditiis officia tenetur? Velit alias enim eos facere sint laborum suscipit sed distinctio, consectetur quae dolores esse tenetur commodi id nobis impedit quod culpa possimus ut labore perspiciatis, nam eligendi. Quam cum dolore, atque sunt laudantium, officiis dolorem sequi veritatis numquam et eius dolorum, voluptatum dignissimos unde aut quasi porro ut architecto. Obcaecati illo aliquam maxime rem sint quaerat eius qui earum deleniti, fugit corporis, ducimus modi veritatis blanditiis quidem exercitationem ad harum adipisci molestias at doloremque labore.",
        ]);        
        
        Post::create([
            'user_id' => 1,
            'category_id' => $hobbies->id,
            'title' => "My Hobby Post",
            'slug' => "my-hobby-post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio, blanditiis corporis officia repellendus consectetur.",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam laborum unde, aperiam doloremque voluptate quidem, assumenda modi aut architecto facilis eaque quia blanditiis officia tenetur? Velit alias enim eos facere sint laborum suscipit sed distinctio, consectetur quae dolores esse tenetur commodi id nobis impedit quod culpa possimus ut labore perspiciatis, nam eligendi. Quam cum dolore, atque sunt laudantium, officiis dolorem sequi veritatis numquam et eius dolorum, voluptatum dignissimos unde aut quasi porro ut architecto. Obcaecati illo aliquam maxime rem sint quaerat eius qui earum deleniti, fugit corporis, ducimus modi veritatis blanditiis quidem exercitationem ad harum adipisci molestias at doloremque labore.",
        ]); 
        
        
        Post::create([
            'user_id' => 1,
            'category_id' => $personal->id,
            'title' => "My Personal Post",
            'slug' => "my-personal-post",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio, blanditiis corporis officia repellendus consectetur.",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam laborum unde, aperiam doloremque voluptate quidem, assumenda modi aut architecto facilis eaque quia blanditiis officia tenetur? Velit alias enim eos facere sint laborum suscipit sed distinctio, consectetur quae dolores esse tenetur commodi id nobis impedit quod culpa possimus ut labore perspiciatis, nam eligendi. Quam cum dolore, atque sunt laudantium, officiis dolorem sequi veritatis numquam et eius dolorum, voluptatum dignissimos unde aut quasi porro ut architecto. Obcaecati illo aliquam maxime rem sint quaerat eius qui earum deleniti, fugit corporis, ducimus modi veritatis blanditiis quidem exercitationem ad harum adipisci molestias at doloremque labore.",
        ]);


    }
}
