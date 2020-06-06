<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
   
    return [
        'title' => $faker->text($maxNbChars = 20)  ,
        'author_id' => 0,
        'seo_title' => null,
        'featured' => 0,
        'excerpt' => $faker->text(),
        'body' => $faker->text(),
        'slug' => $faker->slug(),
        'image' => 'posts/' . $faker->image('public/storage/posts/',640,480, null, false),
        'meta_description' => $faker->text(),
        'meta_keywords' => $faker->word(),
        'status' => 'PUBLISHED',
        'created_at' => $faker->dateTimeBetween('-30 days', '+30 days')
    ];
});
