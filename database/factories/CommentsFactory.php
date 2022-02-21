<?php

use Faker\Generator as Faker;

$factory->define(App\Comments::class, function (Faker $faker) {
    return [
		'post_id' => $faker->numberBetween(1,200),
		'name' => $faker->name,
		'email' => $faker->safeEmail,
		'comment' => $faker->paragraph,
    ];
});
