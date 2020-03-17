<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Footer;
use Faker\Generator as Faker;

$factory->define(Footer::class, function (Faker $faker) {

    return [
        'address' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'fax' => $faker->word,
        'lang' => $faker->word,
        'lat' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
