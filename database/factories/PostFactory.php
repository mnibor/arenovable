<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->sentence;

    return [
        'user_id' => $faker->numberBetween(1,3),
        'category_id' => $faker->numberBetween(1,10),
        'title' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'body' => $faker->text,
        'image' => \Faker\Provider\Image::image(storage_path() . '/app/posts', 600, 250, 'technics', false),
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT']),
        'view_count' => $faker->numberBetween(50, 500),
    ];
});
