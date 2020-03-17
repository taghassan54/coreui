<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'type' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
