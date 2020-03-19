<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PrivacyPolicy;
use Faker\Generator as Faker;

$factory->define(PrivacyPolicy::class, function (Faker $faker) {

    return [
        'privacy_policy' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
