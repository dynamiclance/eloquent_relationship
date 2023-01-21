<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;
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
  
        $user = User::create(
            [
            
                    'name' => 'Test User',
                    'email' => 'test@example.com',
                    'password' => bcrypt('123456'),
                ],
    );

        $phone = Phone::create([
            'name' => 'Iphone pro max',
            'user_id' => $user->id
        ]);


    $posts =  Post::factory()->count(10)->create();
    $categories =  Category::factory()->count(10)->create();

    foreach($posts as $post) {
    foreach($categories as $category) {
        $post->categories()->attach($category->id);
    }

}





    // $post = Post::create([
    //     'title' => 'First Post',
    // ]);

    // $post = Post::create([
    //     'title' => 'second Post',
    // ]);

    // $post = Post::create([
    //     'title' => 'third Post',
    // ]);


    // $category = Category::create([
    //     'name' => 'first category',
    // ]); 


    // $category = Category::create([
    //     'name' =>'second category',

    // ]);

    // $category = Category::create([
    //     'name' =>'third category',

    // ]);




        // $comment = Comment::create([
        
        //         'content' => "this is first comment",
        //         'post_id' => $post->id,
        
        // ]);

        // User::factory(20)->create()
        //     ->each(function($user) use($tags){
        //     Post::create([
        //         'user_id' => $user->id,
        //         'title' => fake()->paragraph()
        //     ])->each(function($post) use($tags){
        //         $post->tags()->attach($tags->random(2));
        //     });
        // });

        // $posts = array(
        //     array('comment_id' => $comment->id, 'title' => 'designer'),
        //     array('comment_id' => $comment->id, 'title' => 'developer'), 
        //     array('comment_id' => $comment->id, 'title' => 'project manager'),
        //     array('comment_id' => $comment->id, 'title' => 'manager'),
        
        //  );


        // Post::createMany($posts);

        
    }
}
