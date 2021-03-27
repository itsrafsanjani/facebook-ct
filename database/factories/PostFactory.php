<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'body' => $faker->sentence,
        'image' => '/storage/post-images/default-image.jpg',
    ];
});
