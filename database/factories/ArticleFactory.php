<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Constants\Constants;
use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'original_id' => $faker->numerify('####'),
        'title' => $faker->title,
        'url' =>  $faker->url,
        'image_url' =>  $faker->url,
        'news_site' =>  $faker->company,
        'summary' =>  $faker->text,
    ];
});
