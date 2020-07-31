<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */



use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/** @var Faker $faker */

$factory->define(Post::class, function (Faker $faker) {
    $title =  $faker->sentence;
    $slug = Str::slug($title);
    return [
        'title' => $title,
        'slug' => $slug,
        'body' => $faker->paragraphs(10, true)
    ];
});
