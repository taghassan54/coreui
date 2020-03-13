<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProgrammAndService;
use Faker\Generator as Faker;

$factory->define(ProgrammAndService::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
