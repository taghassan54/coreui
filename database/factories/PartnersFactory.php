<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Partners;
use Faker\Generator as Faker;

$factory->define(Partners::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'position' => $faker->word,
        'aboute' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
