<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogPostTag;
use Faker\Generator as Faker;

$factory->define(BlogPostTag::class, function (Faker $faker) {

    return [
        'tag_id' => $faker->word,
        'post_id' => $faker->word
    ];
});
