<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {

    return [
        'category_id' => $faker->word,
        'title' => $faker->word,
        'slug' => $faker->word,
        'description' => $faker->word,
        'summary' => $faker->text,
        'content' => $faker->text,
        'status' => $faker->word,
        'comments' => $faker->word,
        'featured' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
