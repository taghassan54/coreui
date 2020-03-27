<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Library;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'library_type_id' => $faker->randomDigitNotNull
    ];
});
