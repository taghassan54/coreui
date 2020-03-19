<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Membership;
use Faker\Generator as Faker;

$factory->define(Membership::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'country_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'gender' => $faker->word,
        'age_range_id' => $faker->randomDigitNotNull,
        'nationality_id' => $faker->randomDigitNotNull,
        'city_id' => $faker->randomDigitNotNull,
        'district' => $faker->word,
        'block' => $faker->word,
        'graduation_date' => $faker->word,
        'specialization_id' => $faker->randomDigitNotNull,
        'university_id' => $faker->randomDigitNotNull,
        'comments' => $faker->text,
        'Services_you_like_to_participate' => $faker->text,
        'other_memberships' => $faker->text
    ];
});
