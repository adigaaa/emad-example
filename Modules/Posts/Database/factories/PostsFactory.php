<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Posts\Entities\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->text
    ];
});
