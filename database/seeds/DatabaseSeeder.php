<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Post;
use App\Tag;
use App\Comments;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

    	Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        factory(User::class, 3)->create();

        factory(Category::class, 10)->create();

        factory(Tag::class, 30)->create();

        factory(Post::class, 200)->create()->each(function(Post $post){
            $post->tags()->attach([
                rand(1, 10),
                rand(11, 20),
                rand(21, 30),
            ]);
        });

        factory(Comments::class, 400)->create();
    }
}
