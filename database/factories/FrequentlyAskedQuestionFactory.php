<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FrequentlyAskedQuestion;
use Faker\Generator as Faker;

$factory->define(FrequentlyAskedQuestion::class, function (Faker $faker) {

    return [
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'answer' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'question' => $faker->word
    ];
});
