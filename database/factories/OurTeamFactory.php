<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OurTeam;
use Faker\Generator as Faker;

$factory->define(OurTeam::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'position' => $faker->word,
        'aboute' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
