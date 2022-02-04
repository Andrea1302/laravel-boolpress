<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'autore'=> $faker->name(),
        'testo_post'=> $faker->text(),
    ];
});
