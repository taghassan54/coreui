<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactInfo;
use Faker\Generator as Faker;

$factory->define(ContactInfo::class, function (Faker $faker) {

    return [
        'type' => $faker->word,
        'value' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
